<?php

namespace App\Library\Services\Admin;

use Exception;
use App\Models\User;
use App\Library\Enum;
use App\Library\Helper;
use App\Models\Solution;
use Illuminate\Support\Str;
use App\Models\SolutionImage;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class SolutionService extends BaseService
{
    private function actionHtml($row, $user_role)
    {
        $actionHtml = '';

        if ($row->id) {

            $actionHtml .= '<a class="dropdown-item" href="' . route('admin.solution.show', $row->id) . '" ><i class="far fa-eye"></i> View</a>';



            $actionHtml .= '<a class="dropdown-item" href="' . route('admin.solution.update', $row->id) . '" ><i class="far fa-edit"></i> Edit</a>';



            $actionHtml .= '<a class="dropdown-item text-danger" href="#"  onclick="confirmFormModal(\'' . route('admin.solution.delete', $row->id) . '\', \'Confirmation\', \'Are you sure to delete operation?\')" ><i class="fas fa-trash"></i> Delete</a>';
        } else {
            $actionHtml = '';
        }

        return '<div class="action dropdown">
                    <button class="btn btn2-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="fas fa-tools"></i> Action
                    </button>
                    <div class="dropdown-menu">
                        ' . $actionHtml . '
                    </div>
                </div>';
    }

    private function getSwitch($row, $status)
    {
        $is_check = $status ? "checked" : "";

        return '<div class="custom-control custom-switch">
                    <input type="checkbox" disabled class="custom-control-input"
                        id="primarySwitch_' . $row->id . '" ' . $is_check . '>
                    <label class="custom-control-label" for="primarySwitch_' . $row->id . '"></label>
                </div>';
    }

    public function dataTable()
    {
        $data = Solution::with('operator');
        $user_role = User::getAuthUserRole();

        return Datatables::of($data)
            ->addIndexColumn()

            ->editColumn('name', function ($row) {
                return $row->name;
            })
            ->editColumn('featured_image', function ($row) {
                return '<img style="width: 50px; height: 50px; border-radius: 100%;" src="' . $row->getImage() . '">';
            })

            ->editColumn('is_featured', function ($row) {
                return $this->getSwitch($row, $row->is_featured);
            })
            ->editColumn('is_active', function ($row) {
                return $this->getSwitch($row, $row->is_active);
            })
            ->editColumn('operator', function ($row) {
                return $row?->operator?->full_name;
            })
            ->addColumn('action', function ($row) use ($user_role) {
                return $this->actionHtml($row, $user_role);
            })
            ->rawColumns(['operator', 'banner_image', 'description_title', 'featured_image', 'is_featured', 'is_active', 'action'])
            ->make(true);
    }

    public function store(array $data): bool
    {

        DB::beginTransaction();

        // try {
        $data['operator_id'] = auth()->id();
        // $data['slug'] = Str::slug($data['category']);
        $data['slug'] = rand(100000, 999999);

        if (isset($data['featured_image'])) {
            $data['featured_image'] = Helper::uploadImage($data['featured_image'], Enum::SOLUTION_FEATURE_IMAGE, 30, 30);
        }

        if (isset($data['banner_image'])) {
            $data['banner_image'] = Helper::uploadImage($data['banner_image'], Enum::SOLUTION_BANNER_IMAGE, 500, 500);
        }

        $solution = Solution::create($data);

        if (!empty($data['images'])) {
            foreach ($data['images'] as $index => $attachment) {
                if (isset($attachment)) {
                    $data['attachment'] = Helper::getAttachment($attachment);
                }

                $attachment = new SolutionImage();
                $attachment->project_id = $solution->id;
                $attachment->name = $data['file_name'][$index];
                $attachment->image = $data['attachment'];
                $attachment->operator_id = $data['operator_id'];
                $attachment->save();
            }
        }

        DB::commit();

        return $this->handleSuccess('Successfully created');
        // } catch (Exception $e) {
        //     Helper::log($e);
        //     DB::rollBack();

        //     return $this->handleException($e);
        // }
    }

    public function update(Solution $solution, array $data): bool
    {
        try {
            $data['operator_id'] = auth()->id();
            // $data['slug'] = Str::slug($data['category']);
            $data['slug'] = rand(100000, 999999);

            if (isset($data['featured_image'])) {
                deleteFile($solution->featured_image);
                $data['featured_image'] = Helper::uploadImage($data['featured_image'], Enum::PROJECT_FEATURE_IMAGE, 30, 30);
            }

            if (isset($data['banner_image'])) {
                deleteFile($solution->banner_image);
                $data['banner_image'] = Helper::bannerImage($data['banner_image'], Enum::SOLUTION_BANNER_IMAGE, 500, 500);
            }

            $this->data = $solution->update($data);

            return $this->handleSuccess('Successfully Updated');
        } catch (Exception $e) {
            Helper::log($e);

            return $this->handleException($e);
        }
    }

    public function changeStatus(Solution $solution, $type): bool
    {
        try {
            if ($type == 'is_active') {
                $this->data = $solution->update(['is_active' => !$solution->is_active]);
            } else {
                $this->data = $solution->update(['is_featured' => !$solution->is_featured]);
            }

            return $this->handleSuccess('Successfully Updated');
        } catch (Exception $e) {
            Helper::log($e);

            return $this->handleException($e);
        }
    }

    public function delete(Solution $solution): bool
    {
        try {
            if (isset($solution->projectImages)) {

                foreach ($solution->projectImages as $solutionImage) {
                    deleteFile($solutionImage->image);
                    $solutionImage->delete();
                }
            }

            deleteFile($solution->featured_image);
            $solution->delete();

            $this->message = __('Successfully deleted');

            return true;
        } catch (Exception $e) {
            Helper::log($e);

            return $this->handleException($e);
        }
    }

    public function storeProjectImage($solution, array $data): bool
    {
        try {
            if (!empty($data['images'])) {
                foreach ($data['images'] as $index => $attachment) {
                    if (isset($attachment)) {
                        $data['attachment'] = Helper::getAttachment($attachment);
                    }

                    $attachment = new SolutionImage();
                    $attachment->project_id = $solution->id;
                    $attachment->name = $data['file_name'][$index];
                    $attachment->image = $data['attachment'];
                    $attachment->operator_id = auth()->id();
                    $attachment->save();
                }
            }

            return $this->handleSuccess('Successfully created');
        } catch (Exception $e) {
            Helper::log($e);

            return $this->handleException($e);
        }
    }
}

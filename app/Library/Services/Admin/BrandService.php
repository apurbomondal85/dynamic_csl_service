<?php

namespace App\Library\Services\Admin;

use Exception;
use App\Models\User;
use App\Library\Enum;
use App\Library\Helper;
use App\Models\Brand;
use Yajra\DataTables\Facades\DataTables;

class BrandService extends BaseService
{
    private function filter(array $params)
    {
        $query = Brand::with('operator');

        $query->where('is_active', $params['status']);

        return $query;
    }

    private function actionHtml($row, $user_role)
    {
        $actionHtml = '';

        if ($row->id) {

            $actionHtml .= '<a class="dropdown-item" href="' . route('admin.brand.show', $row->id) . '" ><i class="far fa-eye"></i> View</a>';



            $actionHtml .= '<a class="dropdown-item" href="' . route('admin.brand.update', $row->id) . '" ><i class="far fa-edit"></i> Edit</a>';



            $actionHtml .= '<a class="dropdown-item text-danger" href="#"  onclick="confirmFormModal(\'' . route('admin.brand.delete.api', $row->id) . '\', \'Confirmation\', \'Are you sure to delete operation?\')" ><i class="fas fa-trash"></i> Delete</a>';
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

    private function getImage($row)
    {

        return '<div class="popup">
                    <img onclick="clickImage(\'' . $row->getAvatar() . '\')" src="' . asset($row->getAvatar() ?? \App\Library\Enum::NO_IMAGE_PATH) . '" alt="avatar" class="img-lg rounded-circle small-image">
                </div>';
    }

    public function dataTable(array $filter_params)
    {
        $data = $this->filter($filter_params);
        $user_role = User::getAuthUserRole();

        return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('avatar', function ($row) {
                return $this->getImage($row);
            })
            ->editColumn('designation', function ($row) {
                return $row->designation ?? 'N/A';
            })
            ->editColumn('company', function ($row) {
                return $row->company ?? 'N/A';
            })
            ->editColumn('is_featured', function ($row) {
                return $this->getSwitch($row, $row->is_featured);
            })
            ->editColumn('operator', function ($row) {
                return $row?->operator?->full_name;
            })
            ->addColumn('action', function ($row) use ($user_role) {
                return $this->actionHtml($row, $user_role);
            })
            ->rawColumns(['avatar', 'is_featured', 'action'])
            ->make(true);
    }

    public function store(array $data): bool
    {


        // dd($data);

        try {
            $data['operator_id'] = auth()->id();

            if (isset($data['avatar'])) {
                $data['avatar'] = Helper::uploadImage($data['avatar'], Enum::BRAND_AVATAR_DIR, 200, 200);
            }

            Brand::create($data);

            return $this->handleSuccess('Successfully created');
        } catch (Exception $e) {
            Helper::log($e);

            return $this->handleException($e);
        }
    }

    public function update(Brand $brand, array $data): bool
    {

        try {
            $data['operator_id'] = auth()->id();

            if (isset($data['avatar'])) {
                deleteFile($brand->avatar);
                $data['avatar'] = Helper::uploadImage($data['avatar'], Enum::BRAND_AVATAR_DIR, 200, 200);
            }

            $this->data = $brand->update($data);

            return $this->handleSuccess('Successfully Updated');
        } catch (Exception $e) {
            Helper::log($e);

            return $this->handleException($e);
        }
    }

    public function changeStatus(Brand $brand, $type): bool
    {
        try {
            if ($type == 'is_active') {
                $this->data = $brand->update(['is_active' => !$brand->is_active]);
            } else {
                $this->data = $brand->update(['is_featured' => !$brand->is_featured]);
            }

            return $this->handleSuccess('Successfully Updated');
        } catch (Exception $e) {
            Helper::log($e);

            return $this->handleException($e);
        }
    }

    public function delete(Brand $brand): bool
    {
        try {
            deleteFile($brand->avatar);
            $brand->delete();

            $this->message = __('Successfully deleted');

            return true;
        } catch (Exception $e) {
            Helper::log($e);

            return $this->handleException($e);
        }
    }
}

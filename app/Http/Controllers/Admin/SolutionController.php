<?php

namespace App\Http\Controllers\Admin;

use App\Models\Solution;
use App\Models\SolutionImage;
use Illuminate\Http\Request;
use App\Http\Traits\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Library\Services\Admin\SolutionService;
use App\Http\Requests\Admin\Solution\CreateRequest;
use App\Http\Requests\Admin\Solution\UpdateRequest;

class SolutionController extends Controller
{
    use ApiResponse;

    private $solution_service;

    public function __construct(SolutionService $solution_service)
    {
        $this->solution_service = $solution_service;
    }

    public function index(Request $request)
    {



        if ($request->ajax()) {
            return $this->solution_service->dataTable();
        }

        return view('admin.pages.solution.index');
    }

    public function create()
    {
        return view('admin.pages.solution.create');
    }

    public function store(CreateRequest $request)
    {

        $result = $this->solution_service->store($request->validated());

        if ($result) {
            return redirect()->route('admin.solution.index')->with('success', $this->solution_service->message);
        }

        return back()->withInput($request->all())->with('error', $this->solution_service->message);
    }

    public function show(Solution $solution)
    {
        abort_unless($solution, 404);

        return view('admin.pages.solution.show', [
            'solution'       => $solution,
            'solutionImages' => $solution->solutionImages,
        ]);
    }

    public function edit(Solution $solution)
    {
        abort_unless($solution, 404);

        return view('admin.pages.solution.update', [
            'solution'       => $solution,
            'solutionImages' => $solution->solutionImages,
        ]);
    }

    public function update(UpdateRequest $request, Solution $solution): RedirectResponse
    {


        abort_unless($solution, 404);
        $result = $this->solution_service->update($solution, $request->validated());

        if ($result) {
            return redirect()->route('admin.solution.index', $solution->id)->with('success', $this->solution_service->message);
        }

        return back()->withInput($request->all())->with('error', $this->solution_service->message);
    }

    public function destroy(Solution $solution): RedirectResponse
    {
        abort_unless($solution, 404);
        $result = $this->solution_service->delete($solution);

        if ($result) {
            return redirect()->route('admin.solution.index')->with('success', $this->solution_service->message);
        }

        return back()->with('error', 'Unable to delete now');
    }

    public function changeStatus(Solution $solution, $type)
    {
        abort_unless($solution, 404);
        $result = $this->solution_service->changeStatus($solution, $type);

        if ($result) {
            return redirect()->route('admin.solution.show', $solution->id)->with('success', $this->solution_service->message);
        }

        return back()->with('error', $this->solution_service->message);
    }



    public function createProjectImage(Solution $solution)
    {
        return view('admin.pages.solution.partial.create', [
            'solution' => $solution,
        ]);
    }

    public function storeProjectImage(Solution $solution, Request $request)
    {
        $result = $this->solution_service->storeProjectImage($solution, $request->all());

        if ($result) {
            return redirect()->route('admin.solution.show', $solution->id)->with('success', $this->solution_service->message);
        }

        return back()->withInput($request->all())->with('error', $this->solution_service->message);
    }

    public function destroyProjectImage(SolutionImage $projectImage)
    {
        abort_unless($projectImage, 404);

        deleteFile($projectImage->image);

        $projectImage->delete();

        return redirect()->route('admin.solution.show', $projectImage->project_id)->with('success', __('Successfully Deleted'));
    }
}

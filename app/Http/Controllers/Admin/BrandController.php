<?php

namespace App\Http\Controllers\Admin;


use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Traits\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Library\Services\Admin\BrandService;
use App\Http\Requests\Admin\Brand\CreateRequest;
use App\Http\Requests\Admin\Brand\UpdateRequest;


class BrandController extends Controller
{
    use ApiResponse;

    private $brand;

    public function __construct(BrandService $brand)
    {
        $this->brand = $brand;
    }

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $filter_request = $request->only(['status']);

            return $this->brand->dataTable($filter_request);
        }

        return view('admin.pages.website.brand.index');
    }

    public function create()
    {

        return view('admin.pages.website.brand.create');
    }

    public function store(CreateRequest $request)
    {


        $result = $this->brand->store($request->validated());

        if ($result) {
            return redirect()->route('admin.brand.index')->with('success', $this->brand->message);
        }

        return back()->withInput($request->all())->with('error', $this->brand->message);
    }

    public function show(Brand $brand)
    {

        abort_unless($brand, 404);

        return view('admin.pages.website.brand.show', [
            'brand' => $brand,
        ]);
    }

    public function edit(Brand $brand)
    {
        abort_unless($brand, 404);

        return view('admin.pages.website.brand.update', [
            'brand' => $brand,
        ]);
    }

    public function update(UpdateRequest $request, Brand $brand): RedirectResponse
    {

    

        abort_unless($brand, 404);
        $result = $this->brand->update($brand, $request->validated());

        if ($result) {
            return redirect()->route('admin.brand.index', $brand->id)->with('success', $this->brand->message);
        }

        return back()->withInput($request->all())->with('error', $this->brand->message);
    }

    public function destroy(Brand $brand): RedirectResponse
    {
        abort_unless($brand, 404);
        $result = $this->brand->delete($brand);

        if ($result) {
            return redirect()->route('admin.brand.index')->with('success', $this->brand->message);
        }

        return back()->with('error', 'Unable to delete now');
    }

    public function changeStatusApi(Brand $brand, $type)
    {
        abort_unless($brand, 404);
        $result = $this->brand->changeStatus($brand, $type);

        if ($result) {
            return redirect()->route('admin.brand.show', $brand->id)->with('success', $this->brand->message);
        }

        return back()->with('error', $this->brand->message);
    }
}

@extends('admin.layouts.master')

@section('title', 'Solution')

@section('content')
    <div class="content-wrapper">

        <div class="content-header d-flex justify-content-between">
            <div class="d-block">
                <h4 class="content-title">{{ strtoupper(__('Solution')) }}</h4>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <table id="solutionDataTable" class="table table-bordered no-footer dtr-inline">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Icon Image</th>
                            <th>Is Featured</th>
                            <th>Is Active</th>
                            <th>Operator</th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@include('admin.assets.dt')
@include('admin.assets.dt-buttons')
@include('admin.assets.dt-buttons-export')

@push('scripts')
    @vite('resources/admin_assets/js/solution/index.js')
@endpush

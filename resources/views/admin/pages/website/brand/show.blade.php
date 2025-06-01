@extends('admin.layouts.master')

@section('title', 'Testimonnial Details')

@section('content')

    @php
        $user_role = App\Models\User::getAuthUser()->roles()->first();
    @endphp

    <div class="content-wrapper">
        <div class="content-header d-flex justify-content-start">
            <div class="d-block">
                <h4 class="content-title">{{ strtoupper(__('Testimonnial Details')) }}</h4>
            </div>
            {!! \App\Library\Html::linkBack(route('admin.brand.index')) !!}
        </div>

        <div class="row">

            <div class="col-md-5">
                <div class="card shadow-sm">
                    <div class="card-body">

                        <div class="border-bottom text-center">
                            <img src="{{ $brand->getAvatar() }}" alt="profile" class="img-lg rounded-circle mb-3">
                            <div class="mb-3">
                                <h3>{{ $brand->name }} </h3>
                            </div>
                        </div>
                        <table class="table org-data-table table-bordered show-table">
                            <tbody>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <span
                                            class="badge {{ $brand->is_active == \App\Library\Enum::STATUS_ACTIVE ? 'btn2-secondary' : 'btn-secondary' }}">
                                            {{ $brand->is_active == \App\Library\Enum::STATUS_ACTIVE ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Is Featured</td>
                                    <td>
                                        <span class="badge {{ $brand->is_featured ? 'btn2-secondary' : 'btn-secondary' }}">
                                            {{ $brand->is_featured ? 'Yes' : 'No' }}
                                        </span>
                                    </td>
                                </tr>
                              
                                <tr>
                                    <td>Operator</td>
                                    <td> {{ $brand->operator?->full_name }} </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="text-center my-4">


                            <button class="btn btn-sm mr-1 {{ $brand->is_active ? 'btn-secondary' : 'btn2-secondary' }}"
                                onclick="confirmFormModal('{{ route('admin.brand.change_status.api', [$brand->id, 'is_active']) }}', 'Confirmation', 'Are you sure to change status?')">
                                <i class="fas fa-power-off"></i>
                                {{ $brand->is_active ? 'Make Inactive' : 'Make Active' }}
                            </button>



                            <button class="btn btn-sm mr-1 {{ $brand->is_featured ? 'btn-secondary' : 'btn2-secondary' }}"
                                onclick="confirmFormModal('{{ route('admin.brand.change_status.api', [$brand->id, 'is_featured']) }}', 'Confirmation', 'Are you sure to change status?')">
                                <i class="fas fa-power-off"></i>
                                {{ $brand->is_featured ? 'Not Featured' : 'Make Featured' }}
                            </button>



                            <a href="{{ route('admin.brand.update', $brand->id) }}" class="btn btn-sm btn-warning mr-1">
                                <i class="fas fa-edit"></i> Edit
                            </a>



                            <button class="btn btn-sm btn-danger"
                                onclick="confirmFormModal('{{ route('admin.brand.delete.api', $brand->id) }}', 'Confirmation', 'Are you sure to delete operation?')"><i
                                    class="fas fa-trash-alt"></i> Delete
                            </button>


                        </div>
                    </div>
                </div>
            </div>

            @if ($brand->message)
                <div class="col-md-7">
                    <div class="card shadow-sm">
                        <div class="card-body py-4">
                            <div class="text-left">

                                {{ $brand->message }}

                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>

@stop

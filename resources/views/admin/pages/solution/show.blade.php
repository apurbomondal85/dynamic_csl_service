@extends('admin.layouts.master')

@section('title', 'solution Details')

@section('content')

    @php
        $user_role = App\Models\User::getAuthUser()->roles()->first();
    @endphp

    <div class="content-wrapper">
        <div class="content-header d-flex justify-content-start">
            <div class="d-block">
                <h4 class="content-title">{{ strtoupper(__('Solution Details')) }}</h4>
            </div>
            {!! \App\Library\Html::linkBack(route('admin.solution.index')) !!}
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="card shadow-sm mb-3">
                    <div class="card-body">

                        <div class="border-bottom text-center pb-2">
                            <img src="{{ $solution->getImage() }}" alt="profile" class="img-lg rounded-circle mb-3">
                            <div class="mb-3">
                                <h3>{{ $solution->name }} </h3>
                            </div>
                        </div>
                        <table class="table org-data-table table-bordered show-table">
                            <tbody>
                                <tr>
                                    <td>solution Name</td>
                                    <td> {{ $solution->name }} </td>
                                </tr>
                                <tr>
                                    <td>Is Active</td>
                                    <td>
                                        <span class="badge {{ $solution->is_active ? 'btn2-secondary' : 'btn-secondary' }}">
                                            {{ $solution->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Is Featured</td>
                                    <td>
                                        <span
                                            class="badge {{ $solution->is_featured ? 'btn2-secondary' : 'btn-secondary' }}">
                                            {{ $solution->is_featured ? 'Yes' : 'No' }}
                                        </span>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Operator</td>
                                    <td> {{ $solution->operator?->full_name }} </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="text-center my-4">


                            <button class="btn btn-sm mr-1 {{ $solution->is_active ? 'btn-secondary' : 'btn2-secondary' }}"
                                onclick="confirmFormModal('{{ route('admin.solution.change_status', [$solution->id, 'is_active']) }}', 'Confirmation', 'Are you sure to change status?')">
                                <i class="fas fa-power-off"></i>
                                {{ $solution->is_active ? 'Make Inactive' : 'Make Active' }}
                            </button>



                            <button
                                class="btn btn-sm mr-1 {{ $solution->is_featured ? 'btn-secondary' : 'btn2-secondary' }}"
                                onclick="confirmFormModal('{{ route('admin.solution.change_status', [$solution->id, 'is_featured']) }}', 'Confirmation', 'Are you sure to change status?')">
                                <i class="fas fa-power-off"></i>
                                {{ $solution->is_featured ? 'Not Featured' : 'Make Featured' }}
                            </button>



                            <a href="{{ route('admin.solution.update', $solution->id) }}"
                                class="btn btn-sm btn-warning mr-1">
                                <i class="fas fa-edit"></i> Edit
                            </a>



                            <button class="btn btn-sm btn-danger mt-1"
                                onclick="confirmFormModal('{{ route('admin.solution.delete', $solution->id) }}', 'Confirmation', 'Are you sure to delete operation?')"><i
                                    class="fas fa-trash-alt"></i> Delete
                            </button>


                        </div>
                    </div>
                </div>


            </div>

            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body py-4">
                        <div class="text-left pb-1">

                            {{ $solution->short_description }}

                        </div>
                        <hr>

                        <div class="text-left">

                            {!! $solution->description !!}

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop


@push('scripts')
    <script>
        /* Demo purposes only */
        $("figure").mouseleave(
            function() {
                $(this).removeClass("hover");
            }
        );
    </script>
@endpush

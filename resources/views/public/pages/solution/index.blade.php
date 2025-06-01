@extends('public.layouts.master')
@section('contact', 'active')
@section('breadTitle', 'Contact')
@section('title', 'Contact')
@section('content')

    @include('public.components.responses.responses')
    <main id="main">

        <section class="position-relative style_2"
            style="padding: 50px 0; background: linear-gradient(84deg,rgb(21 200 235 / 10%) 20%,rgb(245 245 245) 80%);">
            <span class="position-absolute" style="top: 0; right: 0px"><img class="img-fluid" loading="lazy"
                    src="{{ asset('frontend/images/solutions/achive-bg.png') }}" alt="Payment Pattern">
            </span>
            <span class="position-absolute">
                <img class="img-fluid" loading="lazy" src="{{ asset('frontend/images/solutions/achive-bg.png') }}"
                    alt="Payment Pattern">
            </span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-start ">
                        <img class="img-fluid position-relative" loading="lazy"
                            src="{{ asset($single_solution->banner_image) }}"
                            alt="Payment Gateway integration in Bangladesh" width="500" height="500">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="section_title text-start">
                            {{ $single_solution->name }}
                        </h2>
                        <p class="text-justify lead">
                            {{ $single_solution->short_description }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h2 class="section_title text-start" style="font-size: 20px;">
                            {{ $single_solution->description_title }}
                        </h2>
                        <p class="text-justify lead">
                            {!! $single_solution->description !!}
                        </p>


                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

@extends('public.layouts.master')
@section('about', 'active')
@section('title', 'Clients')
@section('content')
    <div>
        <section class="style_2" style="padding:50px 0; transform: scaleX(-1)">
            <div class="container" style="transform: scaleX(-1)">
                <h3 class="main-title text-center">
                    Our Clients
                </h3>



                <div class="row pt-3 justify-content-around">
                    @foreach ($clients as $key => $value)
                        <div data-aos="fade-down" class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                            data-aos="zoom-in-down">
                            <a class="d-flex align-items-center justify-content-center" href="{{ $value->url }}"
                                title="ACME" rel="nofollow">
                                <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                    style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                    <img src="{{ asset($value->logo) }}" class="img-fluid client-img" loading="lazy"
                                        alt="Acme" width="150" height="150"
                                        style="height: 60px; object-fit: cover;" title="{{ $value->description }}">
                                    <p class="text-center mt-2 mb-0 text-dark" style="font-size: 13px;">{{ $value->name }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </div>

@endsection

@extends('public.layouts.master')
@section('about', 'active')
@section('title', 'Blogs')
@section('content')

    {{-- <section class="banner2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="title-text text-center text-white" data-animation="fadeInUp" data-delay=".5s">MEET OUR
                    CLIENTS</h1>
            </div>
        </div>
</section>

@include('public.components.responses.responses')

@if (isset($clients))
<div class="container mt-5">
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 row-cols-xxl-6">
        @foreach ($clients as $client)
        <div class="col">
            <div class="item">
                <div class="text-center my-2 d-flex justify-content-center">
                    <div class="circle-container">
                        <img src="{{ $client->getLogo() }}" alt="Logo" class="client-logo">
                        <h5 class="mt-2">{{ $client?->name }}</h5>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

</div>

@else
<section>
    <div class="container mb-3">
        <div class="row">
            <div class="card shadow-sm border-radius-5">
                <div class="card-body">
                    <div class="col-md-12 text-center">
                        <h2 data-aos="zoom-in" data-aos-duration="3000" class="aos-init aos-animate text-danger"
                            style="padding: 50px;">
                            OPPS! Client not found...
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif --}}

    <div>
        <section class="style_2" style="padding:50px 0; transform: scaleX(-1)">
            <div class="container" style="transform: scaleX(-1)">
                <h3 class="main-title text-center">
                    Our Clients
                </h3>
                <div class="row pt-3 justify-content-around">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate" data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#" title="ACME"
                            rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-1.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="Acme" width="150" height="150"
                                    style="height: 60px; object-fit: cover;"
                                    title="ACME - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">ACME</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#" title="BGMEA"
                            rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-2.png') }}"
                                    class="img-fluid client-img " loading="lazy" alt="BGMEA" width="150"
                                    height="150" style="height: 60px; object-fit: cover;"
                                    title="BGMEA - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">BGMEA</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#" title="AUST"
                            rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-3.png') }}"
                                    class="img-fluid client-img " loading="lazy" alt="AUST" width="150"
                                    height="150" style="height: 60px; object-fit: cover;"
                                    title="AUST - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">AUST</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#" title="Aziz Group"
                            rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-4.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="Aziz Group" width="150"
                                    height="150" style="height: 60px; object-fit: cover;"
                                    title="Aziz Group - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">Aziz Group
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#"
                            title="IFAD Autos Limited" rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-5.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="IFAD Autos Limited" width="150"
                                    height="150" style="height: 52px; object-fit: cover;"
                                    title="IFAD Autos Limited - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">IFAD Autos Limited</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#" title="AKH Group"
                            rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-6.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="AKH Group" width="150"
                                    height="150" style="height: 60px; object-fit: cover;"
                                    title="AKH Group - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">AKH Group</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#"
                            title="বাংলাদেশ লোক-প্রশাসন রশিক্ষণ কেন্দ্র (বিপিএটিসি)" rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-7.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="BPATC" width="150"
                                    height="150" style="height: 60px; object-fit: cover;"
                                    title="বাংলাদেশ লোক-প্রশাসন প্রশিক্ষণ কেন্দ্র (বিপিএটিসি) - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">বাংলাদেশ লোক-প্রশাসন
                                    প্রশিক্ষণ কেন্দ্র (বিপিএটিসি)</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#" title="BUET"
                            rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-8.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="BUET" width="150"
                                    height="150" style="height: 60px; object-fit: cover;"
                                    title="BUET - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">BUET</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#"
                            title="আঞ্জুমান মফিদুল ইসলাম" rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-9.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="Anjuman" width="150"
                                    height="150" style="height: 60px; object-fit: cover;"
                                    title="আঞ্জুমান মফিদুল ইসলাম - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">আঞ্জুমান মফিদুল ইসলাম</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#" title="BDCCL"
                            rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-10.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="BDCCL" width="150"
                                    height="150" style="height: 60px; object-fit: cover;"
                                    title="BDCCL - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">BDCCL</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#" title="ANANTA"
                            rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-11.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="Ananta" width="150"
                                    height="150" style="height: 60px; object-fit: cover;"
                                    title="ANANTA - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">ANANTA</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#" title="Aramex"
                            rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-12.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="Aramex" width="150"
                                    height="150" style="height: 60px; object-fit: cover;"
                                    title="Aramex - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">Aramex</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#"
                            title="Bangaldesh Gas &amp; Fields
                                        Company Ltd."
                            rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-13.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="Gas Fields" width="150"
                                    height="150" style="height: 60px; object-fit: cover;"
                                    title="Bangaldesh Gas Fields Company Ltd. - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">
                                    Bangladesh Gas Fields Company Ltd.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#"
                            title="Amin Mohammad &amp;Lands Development Ltd." rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-14.png') }}"
                                    class="img-fluid client-img" loading="lazy"
                                    alt="Amin Mohammad Lands Development Ltd." width="150" height="150"
                                    style="height: 60px; object-fit: cover;"
                                    title="Amin Mohammad Lands Development Ltd. - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">
                                    Amin Mohammad Lands Development Ltd.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#"
                            title="Apex Agriscience Ltd." rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-15.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="Apex Agriscience Ltd."
                                    width="150" height="150" style="height: 52px; object-fit: cover;"
                                    title="Apex Agriscience Ltd. - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">Apex Agriscience Ltd.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#"
                            title="BANGLADESH ONLINE" rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-16.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="BANGLADESH ONLINE" width="150"
                                    height="150" style="height: 60px; object-fit: cover;"
                                    title="BANGLADESH ONLINE - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">BANGLADESH ONLINE</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#"
                            title="Girls Guide Association" rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-17.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="Girls Guide Association"
                                    width="150" height="150" style="height: 60px; object-fit: cover;"
                                    title="Girls Guide Association - Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">Girls Guide Association</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="#" title="BMW Bangladesh"
                            rel="nofollow">
                            <div class="client-logo m-auto p-2 d-flex align-items-center justify-content-center flex-column"
                                style="border-bottom: 3px solid var(--primary);border-radius: 10%; min-height: 140px; max-width: 175px; box-shadow: 0 4px 10px rgb(31 48 151 / 15%);">
                                <img src="{{ asset('frontend/images/customer/customer-18.png') }}"
                                    class="img-fluid client-img" loading="lazy" alt="BMW Bangladesh" width="150"
                                    height="150" style="height: 60px; object-fit: cover;"
                                    title="BMW Bangladesh- Client Of Global Informatics Ltd.">
                                <p class="text-center mt-2 mb-0" style="font-size: 12px;">BMW Bangladesh
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

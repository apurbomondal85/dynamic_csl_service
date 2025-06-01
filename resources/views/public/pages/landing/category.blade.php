{{-- <section class="category" id="category">
    <div class="container">
        <div class="category-row d-flex align-items-center justify-content-center">
            <div class="category-col">
                <div class="category-card-1">
                    <div class="service-icon-1">
                        <img alt="category image" height="32" src="{{ asset('frontend/images/category/card-1.png') }}"
                            width="32" />
                    </div>
                    <div class="service-title">
                        Automated IP Surveillance & CCTV
                    </div>
                    <a href="surveillance.html" class="btn btn-details-1">
                        View Details
                    </a>
                </div>
            </div>
            <div class="category-col">
                <div class="category-card-2">
                    <div class="service-icon-2">
                        <img alt="category image" height="32"
                            src="{{ asset('frontend/images/category/card-2.png') }}" width="32" />
                    </div>
                    <div class="service-title">
                        Smart Access Control And Attendance System
                    </div>
                    <a href="attendance_system.html" class="btn btn-details-2">
                        View Details
                    </a>
                </div>
            </div>
            <div class="category-col">
                <div class="category-card-3">
                    <div class="service-icon-3">
                        <img alt="category image" height="32"
                            src="{{ asset('frontend/images/category/card-3.png') }}" width="32" />
                    </div>
                    <div class="service-title">
                        Smart Wireless
                    </div>
                    <a href="smart_wireless.html" class="btn btn-details-3">
                        View Details
                    </a>
                </div>
            </div>
            <div class="category-col">
                <div class="category-card-4">
                    <div class="service-icon-4">
                        <img alt="category image" height="32"
                            src="{{ asset('frontend/images/category/card-4.png') }}" width="32" />
                    </div>
                    <div class="service-title">
                        Structure Local Area Network (LAN)
                    </div>
                    <a href="area_network.html" class="btn btn-details-4">
                        View Details
                    </a>
                </div>
            </div>
            <div class="category-col">
                <div class="category-card-5">
                    <div class="service-icon-5">
                        <img alt="category image" height="32"
                            src="{{ asset('frontend/images/category/card-5.png') }}" width="32" />
                    </div>
                    <div class="service-title">
                        Building Management System (BMS)
                    </div>
                    <a href="building_management.html" class="btn btn-details-5">
                        View Details
                    </a>
                </div>
            </div>
            <div class="category-col">
                <div class="category-card-6">
                    <div class="service-icon-6">
                        <img alt="category image" height="32"
                            src="{{ asset('frontend/images/category/card-6.png') }}" width="32" />
                    </div>
                    <div class="service-title">
                        Smart Public Addressing (PA) System
                    </div>
                    <a href="addressing_system.html" class="btn btn-details-6">
                        View Details
                    </a>
                </div>
            </div>
            <div class="category-col">
                <div class="category-card-7">
                    <div class="service-icon-7">
                        <img alt="category image" height="32"
                            src="{{ asset('frontend/images/category/card-7.png') }}" width="32" />
                    </div>
                    <div class="service-title">
                        Smart IP PABX
                    </div>
                    <a href="pabx.html" class="btn btn-details-7">
                        View Details
                    </a>
                </div>
            </div>
            <div class="category-col">
                <div class="category-card-8">
                    <div class="service-icon-8">
                        <img alt="category image" height="32"
                            src="{{ asset('frontend/images/category/card-8.png') }}" width="32" />
                    </div>
                    <div class="service-title">
                        Fiber Optic Backbone
                    </div>
                    <a href="optic_backbone.html" class="btn btn-details-8">
                        View Details
                    </a>
                </div>
            </div>
            <div class="category-col">
                <div class="category-card-9">
                    <div class="service-icon-9">
                        <img alt="category image" height="32"
                            src="{{ asset('frontend/images/category/card-9.png') }}" width="32" />
                    </div>
                    <div class="service-title">
                        ICT Consultancy and Project Management
                    </div>
                    <a href="consultancy_project.html" class="btn btn-details-9">
                        View Details
                    </a>
                </div>
            </div>
            <div class="category-col">
                <div class="category-card-11">
                    <div class="service-icon-11">
                        <img alt="category image" height="32"
                            src="{{ asset('frontend/images/category/card-11.png') }}" width="32" />
                    </div>
                    <div class="service-title">
                        Interactive Display
                    </div>
                    <a href="interactive.html" class="btn btn-details-11">
                        View Details
                    </a>
                </div>
            </div>
            <div class="category-col">
                <div class="category-card-10">
                    <div class="service-icon-10">
                        <img alt="category image" height="32"
                            src="{{ asset('frontend/images/category/card-1.png') }}" width="32" />
                    </div>
                    <div class="service-title">
                        Enterprise Switching and Routing
                    </div>
                    <a href="switching_routing.html" class="btn btn-details-9">
                        View Details
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<div id="ec" class="" style="margin-top: -0px" data-draft-content-id="0">

    <div class="mobile-padding">
        <section class="style_2 home-top brand-padding" style="padding-bottom: 50px;">
            <div class="container">
                <div class="service_slide row justify-content-center">

                    @foreach ($solutions as $key => $value)
                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up"
                            data-aos-anchor="#example-anchor" data-aos-offset="500">
                            <div class="card p-3 service_card"
                                style="--service-color: {{ $value->color }}; border-radius: 15px; border-top: 3px solid {{ $value->color }};border-bottom: 3px solid {{ $value->color }};">
                                <div class="card-header custom_header px-0 py-2">
                                    <div class="home_demo_icon" title="{{ $value->name }}">
                                        <img style="width: 75px;"
                                            src="{{ asset($value->featured_image) }}"
                                            alt="Software Development">
                                    </div>
                                    <h2 class="text-center my-3 mb-0" title="{{ $value->name }}">
                                        <a class="service-title"
                                            href="{{ route('public.solution', $value->id) }}">Software Development</a>
                                    </h2>
                                </div>
                                <div class="card-body p-0 text-center p_item">
                                    <a href="{{ route('public.solution', $value->id) }}"
                                        class="anim_fill_btn btn btn_fill_rounded rounded-0 secondary_bg mt-2"
                                        style="background: {{ $value->color }};">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
    </div>












</div>

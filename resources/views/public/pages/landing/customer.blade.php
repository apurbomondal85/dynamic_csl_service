<div>
    <style>
        .anim_ouline_btn:before {
            background: var(--primary);
        }

        .clientDiv:hover .client-img {
            transform: scale(1.2);
            /* Scale up the image on hover */
            transition: transform 0.6s ease;
            /* Smooth transition for scaling */
        }

        /* Full div hover effect */
        .clientDiv:hover .client-logo {
            animation: pulse 0.8s infinite alternate;
            /* Pulse effect on hover */
            box-shadow: 0 6px 15px rgba(31, 48, 151, 0.3);
        }

        @keyframes pulse {
            from {
                transform: scale(1);
                /* Default size */
            }

            to {
                transform: scale(1.05);
                /* Slight zoom */
            }
        }
    </style>
    <section class="style_2" style="padding:50px 0; transform: scaleX(-1)">
        <div class="container" style="transform: scaleX(-1)">
            <h2 class="section_title">
                <span class="theme_secondary_color text-primary position-relative">Customer
                    <svg class="highlight-scribble-1" viewBox="0 0 760 60" preserveAspectRatio="none">
                        <path d="M19,49C75.19,30.63,152,21,317.26,17.27c55.43-.41,198.33-2.08,407.85,12.53"
                            stroke="#2c7eb2" pathLength="1" stroke-width="14" fill="none"></path>
                    </svg>
                </span>
                Trust On Us
            </h2>
            <div class="row pt-3 justify-content-around">
                <div data-aos="fade-down" class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                    data-aos="zoom-in-down">
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
                <div data-aos="fade-down" class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
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

                <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 text-center">
                    <a href="#" class="anim_fill_btn btn btn_fill_rounded primary_bg rounded-0 about-btn px-2"
                        style="width: 100px">
                        See More
                        <!-- <i class="bx bx-right-arrow-alt"></i> -->
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>


<div>
    <section class="style_2" style="padding: 75px 0;">
        <div class="container position-relative">
            <div class="row counters counters-text-light">
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter">
                        <!-- <i class="fas fa-user" style="font-size: 40px;"></i> -->
                        <strong style="font-size: 40px;" data-to="700">700+</strong>
                        <h3>Happy Clients</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter">
                        <!-- <i class="fas fa-star" style="font-size: 40px;"></i> -->
                        <strong style="font-size: 40px;" data-to="7">7+</strong>
                        <h3>Years in Business</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                    <div class="counter">
                        <!-- <i class="fas fa-project-diagram" style="font-size: 40px;"></i> -->
                        <strong style="font-size: 40px;" data-to="1000">1000+</strong>
                        <h3>Projects</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter">
                        <!-- <i class="fas fa-users" style="font-size: 40px;"></i> -->
                        <strong style="font-size: 40px;" data-to="50">50+</strong>
                        <h3>Team Members</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

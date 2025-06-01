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
                @foreach ($clients as $key => $value)
                    <div data-aos="fade-down"
                        class="col-xl-2 col-lg-2 col-md-3 col-6 mb-3 clientDiv aos-init aos-animate"
                        data-aos="zoom-in-down">
                        <a class="d-flex align-items-center justify-content-center" href="{{ $value->url }}" title="ACME"
                            rel="nofollow">
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
                <div class="col-xl-3 col-lg-2 col-md-3 col-6 mb-3 mt-2"
                    style="font-size: inline-block;margin: auto;display: grid;">
                    <a href="{{ route('public.clients') }}" class="anim_fill_btn btn btn_fill_rounded primary_bg rounded-0 about-btn w-75 mx-auto py-2">
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

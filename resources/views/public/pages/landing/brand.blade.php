<div>

    <section class="style_2 pb-5">
        <div class="container">
            <h2 class="section_title mb-4">Our
                <span class="theme_primary_color text-primary position-relative">Brands
                    <svg class="highlight-scribble-1" viewBox="0 0 760 60" preserveAspectRatio="none">
                        <path d="M19,49C75.19,30.63,152,21,317.26,17.27c55.43-.41,198.33-2.08,407.85,12.53"
                            stroke="#2c7eb2" pathLength="1" stroke-width="14" fill="none">
                        </path>
                    </svg>
                </span>
            </h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row justify-content-center">
                        @foreach ($brands as $key => $value)
                            <div class="col-6 col-lg-4 aos-init aos-animate" data-aos="zoom-in-down">
                                <a href="{{ $value->url }}" title="{{ $value->name }}">
                                    <div class="brandDiv border rounded d-inline-block p-2"
                                        style="border: 5px solid #eef6f8 !important;">
                                        <img src="{{ asset($value->avatar) }}" class="img-fluid"
                                            alt="{{ $value->name }}" width="250" loading="lazy">
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

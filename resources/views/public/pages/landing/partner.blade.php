<div>
    <section class="style_2 py-5">
        <div class="container">
            <h2 class="section_title">Our
                <span class="theme_primary_color text-primary position-relative">Partners
                    <svg class="highlight-scribble-1" viewBox="0 0 760 60" preserveAspectRatio="none">
                        <path d="M19,49C75.19,30.63,152,21,317.26,17.27c55.43-.41,198.33-2.08,407.85,12.53"
                            stroke="#2c7eb2" pathLength="1" stroke-width="14" fill="none">
                        </path>
                    </svg>
                </span>
            </h2>
            <div class="row pt-3">
                @foreach ($partners as $key => $value)
                    <div class="col-6 col-lg-2 col-md-3 mb-4 aos-init aos-animate" data-aos="zoom-in-up">
                        <a href="{{ $value->url }}" title="{{ $value->name ?? 'Partner' }}">
                            <div class="card_2 shadow-sm mb-3 border-left p-2"
                                style="border-left: 2px solid #00568d; background: rgb(157 201 216 / 17%)">
                                <img src="{{ asset($value->logo) }}" alt="{{ $value->name ?? 'Partner' }}"
                                    class="img-fluid" loading="{{ $value->name ?? 'Partner' }}">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

@extends('public.layouts.master')
@section('contact', 'active')
@section('breadTitle', 'Contact')
@section('title', 'Contact')
@section('content')

    @include('public.components.responses.responses')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        {{-- @include('public.components.breadcrumbs') --}}

        {{-- <section id="contact" class="contact contact-page">
        <div class="container" data-aos="fade-up">
            <div class="row gx-lg-0 gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Mobile</h4>
                            <p>{{ settings('phone') ? settings('phone') : '0212534213' }}</p>
                            <p>{{ settings('phone2') ? settings('phone2') : '0212534213' }}</p>
                        </div>
                    </div><!-- End Info Item -->
                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email</h4>
                            <p>{{ settings('email') ? settings('email') : 'info@banglaconstruction.co.nz' }}</p>
                        </div>
                    </div><!-- End Info Item -->
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Location</h4>
                                {{ settings('address') ? settings('address') : '463 Porchester Road, Randwick Park, Auckland
                                2105' }}
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h4>Open Hours</h4>
                                <p>Hours 9-5 Mon-Fri</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                </div>

                <div class="col-lg-8">
                    <form method="post" action="{{ route('public.contact.store') }}" class="contact-form"
                        enctype="multipart/form-data">
                        @csrf
                        @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                        @endif
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name"
                                    class="@error('name') border border-danger @enderror" placeholder="Your Name*" required>
                                @error('name')
                                <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email"
                                    class="@error('email') border border-danger @enderror" placeholder="Email*" required>
                                @error('email')
                                <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6 form-group">
                                <input type="tel" name="phone" value="{{ old('phone') }}"
                                    class="form-control @error('phone') border border-danger @enderror" id="phone"
                                    placeholder="Phone Number*" required>
                                @error('phone')
                                <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="7"
                                placeholder="Message">{{ old('message') }}</textarea>
                            @error('message')
                            <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div><button type="submit">Submit</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section> --}}


        <div >
            <h3 class="main-title text-center">
                Contact
            </h3>
            <section class="py-5"
                style="background: linear-gradient(84deg, rgb(21 200 235 / 10%) 20%, rgb(245 245 245) 80%);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="text-center shadow-sm p-3 pt-5 animate-hover" style="border: 10px solid #00568d;">
                                <div class="card_2_icon">
                                    <span class="fas fa-envelope fa-2x text-primary"></span>
                                </div>
                                <h4 class="my-2 text-primary">Mail Us</h4>
                                <p>
                                    You need any information?<br>
                                    please mail us<br>
                                    <a class="contact" target="_blank" href="mailto:info@cslservicebd.com">
                                        <strong class="">info@cslservicebd.com</strong>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="text-center shadow-sm p-3 pt-5 animate-hover" style="border: 10px solid #00568d;">
                                <div class="card_2_icon">
                                    <span class="fas fa-phone-volume fa-2x text-primary"></span>
                                </div>
                                <h4 class="my-2 text-primary">Call Us</h4>
                                <p>
                                    You need any help?<br>
                                    please call us<br>
                                    <a class="contact" target="_blank"
                                        href="tel:+8801893115555"><strong>+8801893115555</strong></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="text-center shadow-sm p-3 pt-5 animate-hover" style="border: 10px solid #00568d;">
                                <div class="card_2_icon">
                                    <span class="fas fa-comment-dots fa-2x text-primary"></span>
                                </div>
                                <h4 class="my-2 text-primary">24/7 Live Chat</h4>
                                <p>
                                    We endeavour to answer <br> all enquiries within 24 hours.<br>
                                    <a class="contact" href="https://web.whatsapp.com/send?text=&amp;phone=+8801893115555">
                                        <strong>Start Chat</strong>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section id="contact" class="contact my-5">
            <div class="contact-section mt-4">
                <div class="container">

                    <div class="contact-main">
                        <div class="row">
                            <div class="col-md-6 d-none d-lg-block">
                                <div class="contact-info">
                                    <p class="form-text-subtitle">Serving your local area</p>
                                    <h2 class="form-text-title">Home, Commercial, Auto, You Name It, We'll Be there.</h2>
                                </div>
                            </div>
                            <div class=" col-md-12 col-lg-6">
                                <div class="form-section">
                                    <h3 class="form-title bar mb-2">Contact Us</h3>
                                    {{-- <form>
                                        <div class="mb-3">
                                            <input type="text" class="" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Email">
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" class="" id="exampleInputPassword1"
                                                placeholder="Password">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Subjects">
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="textarea" placeholder="Comments"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send <i
                                                class="fa-solid fa-paper-plane p-1"></i></button>
                                    </form> --}}

                                    <form method="POST" action="{{ route('public.contact.store') }}" class="contact-form"
                                        enctype="multipart/form-data">
                                        @csrf

                                        {{-- Show Validation Errors --}}
                                        @if ($errors->any())
                                            <div class="mb-3">
                                                @foreach ($errors->all() as $error)
                                                    <p class="alert alert-danger">{{ $error }}</p>
                                                @endforeach
                                            </div>
                                        @endif

                                        <div class="mb-3">
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                class="form-control @error('name') is-invalid @enderror" placeholder="Name*"
                                                required>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email*" required>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <input type="tel" name="phone" value="{{ old('phone') }}"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="Phone*" required>
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <input type="text" name="subject" value="{{ old('subject') }}"
                                                class="form-control" placeholder="Subject">
                                        </div>

                                        <div class="mb-3">
                                            <textarea name="message" style="background: transparent" class=" form-control @error('message') is-invalid @enderror"
                                                rows="5" placeholder="Your Message*" required>{{ old('message') }}</textarea>
                                            @error('message')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                        <script>
                                            $(document).ready(function() {
                                                $('input, textarea').each(function() {
                                                    var placeholder = $(this).attr('placeholder');
                                                    $(this).data('placeholder', placeholder);
                                                });

                                                $('input, textarea').on('focus', function() {
                                                    $(this).attr('placeholder', '');
                                                });

                                                $('input, textarea').on('blur', function() {
                                                    if ($(this).val().trim() === '') {
                                                        $(this).attr('placeholder', $(this).data('placeholder'));
                                                    }
                                                });
                                            });
                                        </script>


                                        {{-- Optional Feedback Messages --}}
                                        <div class="my-3">
                                            <div class="loading d-none">Loading...</div>
                                            <div class="sent-message d-none">Your message has been sent. Thank you!</div>
                                            <div class="error-message d-none"></div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">
                                            Send <i class="fa-solid fa-paper-plane ps-2"></i>
                                        </button>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- ===== Contact Section ===== -->

    </main><!-- End #main -->
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <!--meta tags-->
    <meta charset="UTF-8">
    <meta name="description" content="CSL Service">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">

    <!-- Favicons -->
    <link rel="shortcut icon"
        href="{{ settings('favicon') ? asset(settings('favicon')) : Vite::asset(\App\Library\Enum::NO_IMAGE_PATH) }}">

    <!-- google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- App Title -->
    <title> {{ settings('app_title') ? settings('app_title') : 'CSL Service' }} || @yield('title')</title>

    <!-- google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/plugin/toastr/toastr.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    @vite('resources/public_assets/sass/app.scss')

</head>

<body>
    @include('public.layouts.partials.header')
    @yield('content')
    @include('public.components.modals.job-post-modal')
    @include('public.components.modals.service-partner-modal')
    @include('public.layouts.partials.footer')

    {{-- <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a> --}}

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    @vite('resources/public_assets/js/app.js')

    @stack('scripts')

    <!-- Start Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <!---------------------Sweet Allert-------------------->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;
                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;
                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;
                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>


    <script>
        // Function to animate counters
        function animateCounter(counter) {
            const target = +counter.getAttribute('data-to');
            const increment = target / 200; // Speed of counting

            let currentCount = 0;
            const updateCount = () => {
                currentCount += increment;
                if (currentCount < target) {
                    counter.innerText = Math.ceil(currentCount);
                    setTimeout(updateCount, 20);
                } else {
                    counter.innerText = target + '+';
                }
            };
            updateCount();
        }

        // IntersectionObserver to detect when counters are in view
        const counters = document.querySelectorAll('.counter strong');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    animateCounter(counter);
                    observer.unobserve(counter); // Stop observing once animated
                }
            });
        }, {
            threshold: 0.5 // Trigger when 50% of the element is visible
        });

        counters.forEach(counter => {
            observer.observe(counter); // Start observing each counter
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.toggle-submenu').on('click', function(e) {
                e.preventDefault();
                const $submenu = $(this).closest('li').find('.nav_dropdown').first();
                $submenu.slideToggle(200);
                const currentText = $(this).text().trim();
                $(this).text(currentText === '+' ? '−' : '+');
            });
        });
    </script>

</body>

</html>

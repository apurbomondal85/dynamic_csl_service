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
                <img class="img-fluid" loading="lazy"
                    src="{{ asset('frontend/images/solutions/achive-bg.png') }}" alt="Payment Pattern">
            </span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-start d-none d-lg-block">
                        <img class="img-fluid position-relative" loading="lazy"
                            src="https://cslservicebd.com/build/images/solutions/cctv.jpg"
                            alt="Payment Gateway integration in Bangladesh" width="500" height="500">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="section_title text-start">
                            Automated IP Surveillance &amp; CCTV
                        </h2>
                        <p class="text-justify lead">
                            IP cameras are security cameras that use a computer network to send video over an IP network
                            instead of using dedicated infrastructure. Also called network cameras, IP cameras are the
                            optimal solution in security systems and work to provide video surveillance that businesses use.
                            With a vast selection on the market, each one is just as different as each business and can be
                            overwhelming.
                            <br>
                            Surveillance camera professionals at CSL Service understand networking infrastructure and the
                            fundamentals of video security systems. Our engineers meet or exceed the requirements of our
                            qualification standards with a Bachelor’s degree, five-plus years of IT experience, and
                            authorized certifications in networking and IP cameras.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h2 class="section_title text-start" style="font-size: 20px;">
                            Methodology for IP Camera Support &amp; Services
                        </h2>
                        <p class="text-justify lead">
                            CSL Service provides IP surveillance camera services and support. From custom security solutions
                            to camera deployment assistance, we are trained and certified to create and implement optimal
                            surveillance systems for your business.
                        </p>
                        <br>
                        <h6>Plan</h6>

                        <p class="text-justify lead">IP Camera Consultation. We can help you learn more about IP cameras and
                            their potential as part of your business strategy. Even if you’ve been thinking about replacing
                            CCTV cameras for a new surveillance solution but still unsure if it’s the right choice, our
                            trained consultants can guide you to the right decision.
                        </p>

                        <h6>Analysis</h6>

                        <p class="text-justify lead">IP Surveillance Camera Analysis. If you have an IP camera not working
                            like it should, CSL Service can look into it for you regardless of who did the installation or
                            manufacture. Our certified engineers are trained and authorized to properly inspect your IT
                            infrastructure, safely test your camera, and identify the source of the issue.
                        </p>

                        <h6>Design</h6>

                        <p class="text-justify lead">Security Camera System Design. Our certified design engineers can work
                            with you to create your ideal IP camera solution. After a consultation with CSL Service and
                            analysis of your network, they’ll decide what camera system will work best with your network,
                            location, and to reach your objective.
                        </p>
                        <h6>Implement</h6>

                        <p class="text-justify lead">IP Camera System Installation. CSL Service can set up your IP security
                            camera that’s still in the box and integrate it into your network. Or, if you’re relocating and
                            need to uninstall/reinstall a camera, let one of our experienced technicians take care of it and
                            ease your mind.
                        </p>

                        <h6>Support</h6>

                        <p class="text-justify lead">Security Camera &amp; System Support. Whether you put the surveillance
                            camera together or worked with us on a solution, CSL Service is committed to supporting your
                            security camera system. No matter the reason – adding more cameras, needing a new system for a
                            new objective, or having questions – our friendly support team is available to make sure your
                            camera system is helping, not hurting.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

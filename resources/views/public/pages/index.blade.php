@extends('public.layouts.master')
@section('title', 'Home')
@section('home', 'active')
@section('content')

@include('public.components.responses.responses')

<main id="main">
    <!-- ======= Hero Section ======= -->
    @include('public.pages.landing.hero')
    <!-- End Hero Section -->

     <!-- ===== banner Section ===== -->
        @include('public.pages.landing.banner')
      <!-- ===== End banner Section ===== -->

      <!-- ===== Blog Section ===== -->
      @include('public.pages.landing.category')
      <!-- ===== End Blog Section ===== -->

     <!-- ===== About Section ===== -->
        @include('public.pages.landing.about')
      <!-- ===== End About Section ===== -->

   <!-- ===== Why Us ====== -->
    @include('public.pages.landing.why-us')
   <!-- ===== End Why Us ====== -->

   <!-- ===== Why Us ====== -->
    @include('public.pages.landing.skill')
   <!-- ===== End Why Us ====== -->

   <!-- ===== Why Us ====== -->
    @include('public.pages.landing.products')
   <!-- ===== End Why Us ====== -->

    <!-- ======= Contact Section ======= -->
    @include('public.pages.landing.contact')
    <!-- End Contact Section -->

</main><!-- End #main -->
@endsection
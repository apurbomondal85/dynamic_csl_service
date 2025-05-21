@extends('public.layouts.master')
@section('about', 'active')
@section('breadTitle', 'Our Blogs')
@section('title', 'Blogs')

@section('content')

<main id="main">

    @include('public.components.breadcrumbs')

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4 mt-4 mt-xl-5">
            @foreach($blogs as $blog)
            <div class="col-xxl-3 col-lg-4 col-md-6">
              <div class="blog-card">
                <div class="w-100 h-100">
                  <a href="blog-details.html" class="">
                    <a href="{{ route('public.blogDetails', $blog->id ) }}">
                        <img src="{{ $blog->getFeaturedImage() }}" class="blog-img img-fluid" alt="">
                    </a>
                  </a>
                </div>
                <div class="px-4 py-3">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-2 blog-time">
                      <span><i class="fa fa-clock"></i></span>
                      <p>{{ $blog->created_at->format('M d, Y') }}</p>
                    </div>
                    <div class="post-author-img">
                        <img src="{{ $blog->operator->getAvatar() }}" title="{{ $blog->operator->full_name }}" alt="">
                    </div>
                  </div>
                  <h2 class="mt-2">{{ Str::limit($blog->title, 50) }}</h2>
                  <p class="my-3">{{ Str::limit($blog->short_description, 80)}}</p>
                  <a href="{{ route('public.blogDetails', $blog->id ) }}" class="">
                    <button class="btn read-btn">Read More</button>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>

</main><!-- End #main -->
@stop
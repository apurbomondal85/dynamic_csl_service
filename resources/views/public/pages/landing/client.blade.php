<!--@if(count($sponsors))-->
<!--<section id="clients" class="clients">-->
<!--    <div class="container" data-aos="zoom-out">-->
<!--        <div class="row gy-4">-->
<!--            <div class="col-12">-->
<!--                <div class="clients-slider swiper">-->
<!--                    <div class="swiper-wrapper align-items-center">-->
<!--                        @foreach($sponsors as $key => $sponsor)-->
<!--                        <div class="swiper-slide" onclick="showSponsorDetails({{ $sponsor->id }})">-->
<!--                            <img src="{{ $sponsor->getLogo() }}" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                        @endforeach-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    @include('public.pages.about.partials.show_modal')-->
<!--</section>-->
<!--@endif-->

<!--@push('scripts')-->
<!--<script>-->
<!--    new Swiper('.clients-slider', {-->
<!--    speed: 400,-->
<!--    loop: true,-->
<!--    autoplay: {-->
<!--      delay: 5000,-->
<!--      disableOnInteraction: false-->
<!--    },-->
<!--    slidesPerView: 'auto',-->
<!--    pagination: {-->
<!--      el: '.swiper-pagination',-->
<!--      type: 'bullets',-->
<!--      clickable: true-->
<!--    },-->
<!--    breakpoints: {-->
<!--      320: {-->
<!--        slidesPerView: 2,-->
<!--        spaceBetween: 40-->
<!--      },-->
<!--      480: {-->
<!--        slidesPerView: 3,-->
<!--        spaceBetween: 60-->
<!--      },-->
<!--      640: {-->
<!--        slidesPerView: 4,-->
<!--        spaceBetween: 80-->
<!--      },-->
<!--      992: {-->
<!--        slidesPerView: 5,-->
<!--        spaceBetween: 50-->
<!--      },-->
<!--      1400: {-->
<!--        slidesPerView: 6,-->
<!--        spaceBetween: 120-->
<!--      }-->
<!--    }-->
<!--  });-->

<!--</script>-->
<!--@endpush-->
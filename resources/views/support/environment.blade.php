<x-guest-layout>
    @push('styles')
    <style>
        section ul {
                list-style-type: disc;
                margin-left: 20px;
            }

            section ul li {
                font-size: 16px;
                margin-bottom: 10px;
            }
            .volunteers-card__title{
                font-size: 20px;
            }


        .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        }

    </style>
    @endpush
    <section class="page-header" style="background-image: url({{asset('_nuxt/page-header-1-1.BAD7W5SW.jpg')}}); padding-bottom: 5.375rem; padding-top: 5.375rem;">
        <div class="container">
           <ul class="list-unstyled breadcrumb-one">
              <li><a href="/">Home</a></li>
              <li><span>Support</span></li>
           </ul>
           <h2 class="page-header__title">Environmental Sustainability</h2>
        </div>
    </section>

    <section class="sec-pad-top sec-pad-bottom about-one">
        <div class="about-one__shape-1 float-bob-y"><img src="{{asset('_nuxt/about-1-1.BzIvtQQI.png')}}" alt=""></div>
        <div class="about-one__shape-2 float-bob-x"><img src="{{asset('_nuxt/about-1-2.D_jGqYhl.png')}}" alt=""></div>
        <div class="container">
           <div class="row">

              <div class="col-lg-6">
                 <div class="about-one__content" style="padding-left:0">
                    <div class="sec-title">

                       <h2 class="sec-title__title" style="font-size: 1.5rem;">Environmental Sustainability</h2>
                    </div>

                    <p class="about-one__text">
                        The King Ateke Tom Foundation is dedicated to preserving the environment for future generations. Through reforestation projects, clean energy initiatives, and educational programs, we promote sustainable practices that protect natural resources. We support local farmers with eco-friendly farming techniques and advocate for waste reduction and recycling efforts within our communities. Our goal is to create a healthier, greener planet while empowering and educating individuals to adopt environmentally responsible lifestyles.
                    </p>

                 </div>
              </div>

            <div class="col-lg-6" style="overflow: hidden; height: 300px">
                    <div class="pre-amnesty" style="width:100%">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('images/environment/1.jpg')}}" alt="Image 1">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('images/environment/2.jpg')}}" alt="Image 2">
                            </div>
                        </div>
                    </div>
                </div>
           </div>

        </div>
    </section>


     @push('scripts')
     <script>
        var preAmnesty = new Swiper('.pre-amnesty', {
          direction: 'horizontal',
          slidesPerView: 1,
          loop: true, // Loop the slides
          autoplay: {
            delay: 2000, // 3-second delay between slides
            disableOnInteraction: false, // Keep autoplay running after interaction
          },
          pagination: {
            el: '.swiper-pagination',
            },
        });

        var preAmnesty = new Swiper('.post-amnesty', {
          direction: 'horizontal',
          slidesPerView: 1,
          loop: true, // Loop the slides
          autoplay: {
            delay: 2000, // 3-second delay between slides
            disableOnInteraction: false, // Keep autoplay running after interaction
          },
          pagination: {
            el: '.swiper-pagination',
            },
        });
      </script>
      @endpush
</x-guest-layout>



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
           <h2 class="page-header__title">Poverty Alleviation</h2>
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

                       <h2 class="sec-title__title" style="font-size: 1.5rem;">Poverty Alleviation </h2>
                    </div>

                    <p class="about-one__text">
                        At the King Ateke Tom Foundation, we address poverty through holistic and sustainable solutions. Our microfinance loans offer individuals and families the chance to start or grow small businesses, with low interest rates and flexible repayment options. We also support local farmers by providing seeds, tools, and training in modern farming techniques to boost productivity. Additionally, we help homeless individuals and those living in inadequate housing by building safe and secure homes. Through these combined efforts, we empower communities to break free from poverty and build brighter futures.
                    </p>

                 </div>
              </div>

                <div class="col-lg-6" style="overflow: hidden; height: 300px">
                    <div class="pre-amnesty" style="width:100%">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('images/poverty/2.jpg')}}" alt="Image 1">
                            </div>
                        </div>
                    </div>
                </div>
           </div>

        </div>
    </section>


</x-guest-layout>
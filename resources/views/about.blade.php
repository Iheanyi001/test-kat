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
    </style>
    @endpush
    <section class="page-header" style="background-image: url({{asset('_nuxt/page-header-1-1.BAD7W5SW.jpg')}}); padding-bottom: 5.375rem; padding-top: 5.375rem;">
        <div class="container">
           <ul class="list-unstyled breadcrumb-one">
              <li><a href="/">Home</a></li>
              <li><span>About</span></li>
           </ul>
           <h2 class="page-header__title">About Us</h2>
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
                       <p class="sec-title__tagline">More about the KAT Foundation</p>
                       <h2 class="sec-title__title" style="font-size: 2rem;">History of the King Ateke Tom Foundation:<br/> From Struggle to Service</h2>
                    </div>
                    <!--<ul class="list-unstyled about-one__list">
                       <li><i class="fa fa-check-circle"></i> Donate to Poors </li>
                       <li><i class="fa fa-check-circle"></i> Deserving People </li>
                    </ul>-->
                    <div class="about-one__tagline">Pre-Amnesty </div>
                    <p class="about-one__text">
                        The King Ateke Tom Foundation emerged from the turbulent history of the Niger Delta, a region rich in resources but burdened by neglect and environmental degradation. Its founder, HRH King Ateke Michael Tom, from Okrika, Rivers State, rose as a leader during the struggle for resource control and justice for the Niger Delta communities.
                    </p>
                    <p>
                        King Ateke initially led the Niger Delta Vigilante (NDV), a militia group fighting for the rights of the region’s people. The NDV’s activities brought international attention to the Niger Delta's plight, advocating for resource control, environmental protection, and development.
                    </p>


                 </div>
              </div>

              <div class="col-lg-6">
                <div class="about-one__images wow fadeInLeft" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInLeft;">
                   <img src="{{asset('images/homepage/hero1.jpg')}}" alt="">
                   <img style="width: 275px; height: 275px; right:-40px;" src="{{asset('images/med_program/img4.jpg')}}" alt=""></div>
             </div>
           </div>
           <div class="row">
                <div class="col-lg-6">
                    <p>
                        In 2009, King Ateke embraced the Nigerian government's amnesty program under President Umaru Yar'Adua, marking a turning point from armed conflict to peacebuilding. His leadership led to the disarmament of his forces in exchange for amnesty, job training, and reintegration support.
                    </p>

                    <div class="about-one__tagline">Post-Amnesty: Empowering Communities, Building Futures</div>
                    <p>
                        Today, the King Ateke Tom Foundation focuses on improving lives in the Niger Delta through:
                    </p>
                    <ul>
                        <li><strong>Education:</strong> Scholarships and school infrastructure.</li>
                        <li><strong>Healthcare:</strong> Medical outreach and improved healthcare facilities.</li>
                        <li><strong>Youth Empowerment:</strong> Skills acquisition and vocational training.</li>
                        <li><strong>Community Development:</strong> Infrastructure projects improving quality of life.</li>
                        <li><strong>Peacebuilding:</strong> Promoting conflict resolution and stability.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="about-one__tagline">Future Vision</div>

                    <p>
                        The foundation aims to expand its impact by scaling educational programs, enhancing healthcare services, broadening youth training efforts, and deepening peacebuilding activities. The King Ateke Tom Foundation is committed to transforming the Niger Delta into a prosperous, peaceful region.
                    </p>
                    <div class="about-one__meta clearfix">
                       <img style="width:91px" src="{{asset('images/king1.png')}}" alt="">
                       <h3 class="about-one__name">His Royal Majesty, King (Dr) Michael Ateke Tom, JP </h3>
                       <h5>Amayanabo of Okochiri Kingdom</h5>
                       <p class="about-one__designation">Chairman, Board of Trustees, King AtekeTom Foundation</p>
                    </div>
                </div>
           </div>
        </div>
     </section>

     <section style="padding-bottom: 1.75rem;" class="sec-pad-top testimonials-one testimonials-one--bottom-pd-lg">
        <div class="testimonials-one__bg" style="background-image:url('_nuxt/testimonials-1-bg.Cc9osmTB.jpg');"></div>
        <div class="testimonials-one__gallery">
           <img style="width: 70px; height: 70px; border-radius: 50%;" src="{{asset('images/test1.png')}}" alt="Gallery Image 1" class="float-bob-x">
           <img style="width: 70px; height: 70px; border-radius: 50%;" src="{{asset('images/test3.png')}}" alt="Gallery Image 2" class="float-bob-x">
           <img style="width: 70px; height: 70px; border-radius: 50%;" src="{{asset('images/test2.png')}}" alt="Gallery Image 3" class="float-bob-x">
           <img style="width: 70px; height: 70px; border-radius: 50%;" src="{{asset('images/test4.png')}}" class="float-bob-x">
        </div>
        <div class="container">
           <div class="row gutter-y-60">
              <div class="col-lg-5">
                 <div class="testimonials-one__content">
                    <div class="sec-title">
                       <p class="sec-title__tagline">Our feedbacks</p>
                       <h2 class="sec-title__title">Voices of Impact: <br>Hear Their Stories</h2>
                    </div>
                    <p class="testimonials-one__text">The true measure of our success is found in the stories of those whose lives have been touched by the King AtekeTom Foundation. Here’s what some of our beneficiaries, partners,
                     <br>and supporters have to say about the difference we’re making:</p>
                    <a href="#" class="thm-btn testimonials-one__btn"><span>View all feedbacks</span></a>
                 </div>
              </div>
              <div class="col-lg-7">
                 <div>
                    <div class="swiper">
                       <!--[--><!--]-->
                       <div class="swiper-wrapper">
                          <!--[--><!--]--><!--[-->
                          <div class="swiper-slide">
                             <!--[-->
                             <div class="testimonials-card" 84118bfd>
                                <i class="paroti-icon-quote testimonials-card__icon" 84118bfd></i>
                                <img src="{{asset('_nuxt/testimonials-item-bg-1-1.BkqDuzSL.png')}}" class="testimonials-card__bg" alt="Background for Mike Hardson" 84118bfd>
                                <p class="testimonials-card__text" 84118bfd>The King AtekeTom Foundation has been a lifeline for our community. Their dedication to improving lives through education and healthcare is truly inspiring. We are grateful for their unwavering support.</p>
                                <div class="testimonials-card__meta clearfix" 84118bfd>
                                   <img style="width:91px; height:91px" src="{{asset('images/test1.png')}}" alt="Community Leader" 84118bfd>
                                   <h3 class="testimonials-card__name" 84118bfd>Community Leader, </h3>
                                   <p class="testimonials-card__designation" 84118bfd>Niger Delta</p>
                                </div>
                             </div>
                             <!--]--><!---->
                          </div>
                          <div class="swiper-slide">
                             <!--[-->
                             <div class="testimonials-card" 84118bfd>
                                <i class="paroti-icon-quote testimonials-card__icon" 84118bfd></i>
                                <img src="{{asset('_nuxt/testimonials-item-bg-1-1.BkqDuzSL.png')}}" class="testimonials-card__bg" alt="Background for Mike Hardson" 84118bfd>
                                <p class="testimonials-card__text" 84118bfd>The skills training and job opportunities provided by the foundation have transformed my life. I now have a stable career and can support my family with dignity. Thank you for making a difference.</p>
                                <div class="testimonials-card__meta clearfix" 84118bfd>
                                   <img style="width:91px; height:91px" src="{{asset('images/test3.png')}}" alt="Okochiri" 84118bfd>
                                   <h3 class="testimonials-card__name" 84118bfd>Okochiri</h3>
                                   <p class="testimonials-card__designation" 84118bfd>Beneficiary</p>
                                </div>
                             </div>
                             <!--]--><!---->
                          </div>
                          <!--<div class="swiper-slide">

                             <div class="testimonials-card" 84118bfd>
                                <i class="paroti-icon-quote testimonials-card__icon" 84118bfd></i><img src="_nuxt/testimonials-item-bg-1-1.BkqDuzSL.png" class="testimonials-card__bg" alt="Background for Mike Hardson" 84118bfd>
                                <p class="testimonials-card__text" 84118bfd>Proin a lacus arcu nullam id dui eu orci maximus. Cras at auctor lectus, vel pretium tellus. Class aptent sociosqu ad litora torquent per conubia nostra.</p>
                                <div class="testimonials-card__meta clearfix" 84118bfd>
                                   <img src="_nuxt/testi-1-1.7TljiI0u.png" alt="Mike Hardson" 84118bfd>
                                   <h3 class="testimonials-card__name" 84118bfd>Mike Hardson</h3>
                                   <p class="testimonials-card__designation" 84118bfd>Customer</p>
                                </div>
                             </div>

                          </div>-->
                          <!--]--><!--[--><!--]-->
                       </div>
                       <!----><!----><!----><!--[--><!--]-->
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>

     <section class="sec-pad-top sec-pad-bottom">
        <div class="container">
           <div class="sec-title text-center">
              <p class="sec-title__tagline">Meet Our</p>
              <h2 class="sec-title__title">board of Trustees</h2>
           </div>
           <div class="row gutter-y-30">
              <div class="col-md-6 col-lg-4">
                 <div class="volunteers-card">
                    <h3 class="volunteers-card__title"><a href="#">His Royal Majesty, King (Dr) Michael Ateke Tom, JP  </a></h3>
                    <p class="volunteers-card__designation">Chairman</p>
                    <div class="volunteers-card__image"><img src="{{asset('images/king1.png')}}" alt=""></div>
                    <div class="volunteers-card__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                 </div>
              </div>
              <div class="col-md-6 col-lg-4">
                 <div class="volunteers-card">
                    <h3 class="volunteers-card__title"><a href="#">Luke Okoro</a></h3>
                    <p class="volunteers-card__designation">Member</p>
                    <div class="volunteers-card__image">
                        <img style="height: 353px;" src="{{asset('images/trustee1.png')}}" alt="">
                    </div>
                    <div class="volunteers-card__social"><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-pinterest"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                 </div>
              </div>
              <div class="col-md-6 col-lg-4">
                 <div class="volunteers-card">
                    <h3 class="volunteers-card__title"><a href="#">Martins Victor</a></h3>
                    <p class="volunteers-card__designation">Member</p>
                    <div class="volunteers-card__image">
                        <img src="{{asset('images/trustee2.png')}}" alt="">
                    </div>
                    <div class="volunteers-card__social"><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-pinterest"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                 </div>
              </div>
           </div>
        </div>
     </section>


     <section class="sec-pad-top sec-pad-bottom video-one" >
        <div class="container" >
           <div class="video-one__inner" style="background-image:url(_nuxt/video-inner-bg-1-1.DDfA7HnK.jpg);" >
              <div class="row gutter-y-60" >
                 <div class="col-md-12 col-lg-6" >
                    <div class="video-one__content"  >
                       <a href="#" class="video-one__btn video-popup" ><i class="fa fa-play" ></i><span class="video-one__btn__arrow" ></span></a>
                       <h3 class="video-one__title count-box" >
                        Become a Member <br>
                        Help us to :
                          <span class="d-inline-flex" >

                             <div class="countup-wrap" >
                                <!--[--><!--]--><span></span><!--[--><!--]-->
                             </div>
                          </span>

                       </h3>
                       <ul class="list-unstyled video-one__list" >
                          <!--[-->
                          <li ><i class="fa fa-check-circle" ></i> Provide essential healthcare.</li>
                          <li ><i class="fa fa-check-circle" ></i> Empower through education</li>
                          <li ><i class="fa fa-check-circle" ></i> Ensure safe housing.</li>
                          <!--]-->
                       </ul>
                    </div>
                 </div>
                 <div id="membership-form" class="col-md-12 col-lg-6" >
                    @livewire('membership-form')
                 </div>
              </div>
           </div>
        </div>
     </section>
</x-guest-layout>

<x-guest-layout>
    @push('styles')
    <style>
        .slider-one__btn {
    position: relative; /* Ensure the button is positioned correctly */
    z-index: 1000; /* Set a higher z-index to make sure it's clickable */
}

.slider-one__item {
    position: relative; /* Ensure the content is stacked properly */
    z-index: 5;
}

.swiper-slide {
    position: relative;
    z-index: 1; /* Keep the slides behind the content */
}
.swiper-pagination-bullets{
    display: none!important;
}
.main-menu__right{
    display:flex!important;
}
    </style>
    @endpush
<section class="slider-one">
        <div class="swiper" adaptiveheight="true">
           <!--[--><!--]-->
           <div class="swiper-wrapper">
              <!--[--><!--]--><!--[-->
              <div class="swiper-slide" data-swiper-slide-index="0">
                 <!--[-->
                 <div class="slider-one__item">
                    <div class="slider-one__image" style="background-image: url({{asset('images/homepage/hero1.jpg')}})"></div>
                    <div class="container">
                       <h2 class="slider-one__title"> Building <span>Brighter</span> <br> Futures with Compassion </h2>
                       <p class="slider-one__text">Together, we can uplift communities and change lives.</p>
                        <div class="slider-one__btns">
                            <a href="{{route('donate')}}" class="thm-btn slider-one__btn">
                                <span>Get involved</span>
                            </a>
                        </div>
                    </div>
                 </div>
                 <!--]--><!---->
              </div>
              <div class="swiper-slide" data-swiper-slide-index="1">
                 <!--[-->
                 <div class="slider-one__item">
                    <div class="slider-one__image" style="background-image: url({{asset('images/homepage/hero2.jpg')}})"></div>
                    <div class="container">
                       <h2 class="slider-one__title">Empowering Lives:<br> Education, Care, Shelter</h2>
                       <p class="slider-one__text">Providing essential support for those in need.</p>
                       <div class="slider-one__btns"><a href="{{route('donate')}}" class="thm-btn slider-one__btn"><span>Get involved</span></a></div>
                    </div>
                 </div>
                 <!--]--><!---->
              </div>
              <div class="swiper-slide" data-swiper-slide-index="2">
                 <!--[-->
                 <div class="slider-one__item">
                    <div class="slider-one__image" style="background-image: url({{asset('images/homepage/hero3.jpg')}})"></div>
                    <div class="container">
                       <h2 class="slider-one__title">Join Us:<br/> Make a Lasting Impact</h2>
                       <p class="slider-one__text">Be a part of a movement dedicated to sustainable change.</p>
                       <div class="slider-one__btns">
                        <a href="{{route('contact')}}" class="thm-btn slider-one__btn"><span>Get involved</span></a></div>
                    </div>
                 </div>
                 <!--]--><!---->
              </div>
              <!--]--><!--[--><!--]-->
           </div>
           <!--[-->
           <div class="swiper-button-prev"></div>
           <div class="swiper-button-next"></div>
           <!--]--><!---->
           <div class="swiper-pagination"></div>
           <!--[--><!--]-->
        </div>
</section>
     <section class="sec-pad-top sec-pad-bottom about-two">
        <img src="_nuxt/about-2-1.mbvHjTJ1.png" class="about-two__shape-1 float-bob-x" alt="">
        <div class="container">
           <div class="row gutter-y-60">
              <div class="col-md-12 col-lg-6" >
                 <div class="about-two__image" >
                    <div class="about-two__image__shape-1" ></div>
                    <div class="about-two__image__shape-2" ></div>
                    <div class="about-two__image__shape-3" ></div>
                    <img src="{{asset('images/king2.png')}}" class="wow fadeInLeft" data-wow-duration="1500ms" alt="" >
                    <div style="position: absolute;left:0;bottom: 0;height: auto;width:100%;background-color: #df5311;padding: 5px; padding-top:10px">
                        <h1 style="text-transform: uppercase; font-size: 14px; color: white;font-weight: bold;">
                            His Royal Majesty, King (Dr) Ateke Michael Tom, JP
                        </h1>
                    </div>
                    <div style="display:none" class="about-two__image__caption" >
                       <div >
                          <h3 class="about-two__image__caption__count count-box d-flex justify-content-center" >
                             <div class="countup-wrap" >
                                <!--[--><!--]--><span></span><!--[--><!--]-->
                             </div>
                             +
                          </h3>
                       </div>
                       <p class="about-two__image__caption__text" >Years of work experience</p>
                    </div>
                 </div>
              </div>
              <div class="col-md-12 col-lg-6">
                 <div class="about-two__content">
                    <div class="sec-title">
                       <p class="sec-title__tagline">Executive Brief</p>
                       <h2 class="sec-title__title">From the Chairman, King AtekeTom Foundation</h2>
                    </div>
                    <p class="about-two__text">The King AtekeTom Foundation stands as a beacon of hope and resilience, born from a journey of transformation and selflessness. Our foundation was established to uplift the downtrodden, empower the disenfranchised, and create opportunities where none existed before. This mission is deeply rooted in our history,
                        a history of overcoming adversity and striving for a better future for all.</p>
                    <div class="about-two__btns mt-10" style="margin-bottom: 20px">
                        <a href="{{route('brief')}}" class="thm-btn about-two__btn">
                            <span>Continue Reading</span>
                        </a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>


     <section class="sec-pad-top sec-pad-bottom popular-causes">
        <div class="container">
           <div class="sec-title">
              <p class="sec-title__tagline">We Touch Lifes</p>
              <h2 class="sec-title__title">Our Support Outreach</h2>
           </div>
           <div class="donations-carousel">
                <div class="my-slider">
                    <div  aria-hidden="true" tabindex="-1">
                        <div class="donations-card" style="--accent-color: #df5311;">
                            <div class="donations-card__image">
                                <img style="height: 252px" src="{{asset('images/med_program/img3.jpg')}}" alt="Donation Image">
                                <div class="donations-card__category">
                                    <a href="{{route('support.medical')}}">Medical Outreach </a>
                                </div>
                            </div>
                        </div>
                        <!--- content--->
                    </div>

                    <div  aria-hidden="true" tabindex="-1">
                        <div class="donations-card" style="--accent-color: #df5311;">
                            <div class="donations-card__image">
                            <img style="height: 252px" src="{{asset('images/youth/1.png')}}" alt="Donation Image">
                            <div class="donations-card__category">
                                <a href="{{route('support.youth')}}">Youth Empowerment and Skill Acquisition</a>
                            </div>
                        </div>
                        </div>
                        <!--- content--->
                    </div>


                    <div  aria-hidden="true" tabindex="-1">
                        <div class="donations-card" style="--accent-color: #df5311;">
                            <div class="donations-card__image">
                            <img style="height: 252px" src="{{asset('images/poverty/2.png')}}" alt="Donation Image">
                            <div class="donations-card__category">
                                <a href="{{route('support.poverty')}}">Poverty Alleviation</a>
                            </div>
                        </div>
                        </div>
                        <!--- content--->
                    </div>

                    <div  aria-hidden="true" tabindex="-1">
                        <div class="donations-card" style="--accent-color: #df5311;">
                            <div class="donations-card__image">
                            <img style="height: 252px" src="{{asset('images/edu_program/1.jpg')}}" alt="Donation Image">
                            <div class="donations-card__category">
                                <a href="{{route('support.education')}}">Education</a>
                            </div>
                        </div>
                        </div>
                       <!--- content--->
                    </div>

                    <div  aria-hidden="true" tabindex="-1">
                        <div class="donations-card" style="--accent-color: #df5311;">
                            <div class="donations-card__image">
                            <img style="height: 252px" src="{{asset('images/environment/1.jpg')}}" alt="Donation Image">
                            <div class="donations-card__category">
                                <a href="{{route('support.environment')}}">Environmental Sustainability</a>
                            </div>
                        </div>
                        </div>
                        <!--- content--->
                    </div>

                </div>
            </div>
        </div>
     </section>
     <x-testimonials/>
     <section class="gallery-one">
        <div class="container-fluid">
           <div class="swiper3" >
              <!--[--><!--]-->
              <div class="swiper-wrapper">
                 <!--[--><!--]--><!--[-->
                 <div class="swiper-slide" data-swiper-slide-index="0" >
                    <!--[-->
                    <div class="gallery-card">
                       <div class="gallery-card__image">
                        <img style="height:192px"  src="{{asset('images/edu_program/3.jpg')}}" alt="#"></div>
                       <div class="gallery-card__content">
                            <a class="glightbox img-popup" href="{{asset('images/edu_program/3.jpg')}}">
                            <i class="fab fa-instagram" c673d43c></i>
                            </a>
                        </div>
                    </div>
                    <!--]--><!---->
                 </div>
                 <div class="swiper-slide" data-swiper-slide-index="1" >
                    <!--[-->
                    <div class="gallery-card" >
                       <div  class="gallery-card__image">
                        <img style="height:192px" src="{{asset('images/med_program/img2.jpg')}}" alt="#"></div>
                       <div  class="gallery-card__content"><a class="glightbox img-popup" href="{{asset('images/med_program/img2.jpg')}}"><i class="fab fa-instagram"></i></a></div>
                    </div>
                    <!--]--><!---->
                 </div>
                 <div class="swiper-slide" data-swiper-slide-index="2" >
                    <!--[-->
                    <div class="gallery-card" >
                       <div class="gallery-card__image">
                        <img style="height:192px" src="{{asset('images/health_program/4.jpg')}}" alt="#"></div>
                       <div  class="gallery-card__content"><a class="glightbox img-popup" href="{{asset('images/health_program/4.jpg')}}"><i class="fab fa-instagram" c673d43c></i></a></div>
                    </div>
                    <!--]--><!---->
                 </div>
                 <div class="swiper-slide" data-swiper-slide-index="3" >
                    <!--[-->
                    <div class="gallery-card">
                       <div  class="gallery-card__image">
                        <img style="height:192px" src="{{asset('images/edu_program/13.jpg')}}" alt="#"></div>
                       <div class="gallery-card__content"><a class="glightbox img-popup" href="{{asset('images/edu_program/13.jpg')}}">
                        <i class="fab fa-instagram"></i></a></div>
                    </div>
                    <!--]--><!---->
                 </div>
                 <div class="swiper-slide" data-swiper-slide-index="4" >
                    <!--[-->
                    <div class="gallery-card">
                       <div class="gallery-card__image">
                        <img style="height:192px" src="{{asset('images/med_program/img8.jpg')}}" alt="#"></div>
                       <div class="gallery-card__content"><a class="glightbox img-popup" href="{{asset('images/med_program/img8.jpg')}}"><i class="fab fa-instagram"></i></a></div>
                    </div>
                    <!--]--><!---->
                 </div>
                 <div class="swiper-slide" data-swiper-slide-index="5" >
                    <!--[-->
                    <div class="gallery-card">
                       <div class="gallery-card__image">
                        <img style="height:192px" src="{{asset('images/health_program/4.jpg')}}" alt="#"></div>
                       <div class="gallery-card__content"><a class="glightbox img-popup" href="{{asset('images/health_program/4.jpg')}}"><i class="fab fa-instagram" c673d43c></i></a></div>
                    </div>
                    <!--]--><!---->
                 </div>
                 <div class="swiper-slide" data-swiper-slide-index="6" 1987b388>
                    <!--[-->
                    <div class="gallery-card">
                        <div class="gallery-card__image" >
                            <img style="height:192px" src="{{asset('images/edu_program/2.jpg')}}" alt="#" >
                        </div>
                       <div class="gallery-card__content" ><a class="glightbox img-popup" href="{{asset('images/edu_program/2.jpg')}}" ><i class="fab fa-instagram" c673d43c></i></a></div>
                    </div>
                    <!--]--><!---->
                 </div>
                 <!--]--><!--[--><!--]-->
              </div>
              <!----><!----><!----><!--[--><!--]-->
           </div>
        </div>
     </section>

     <section class="sec-pad-top sec-pad-bottom">
        <div class="container">
           <div class="sec-title text-center">
              <p class="sec-title__tagline">Meet Our</p>
              <h2 class="sec-title__title">Board of Trustees</h2>
           </div>
           <div class="row gutter-y-30">
              <div class="col-md-6 col-lg-4">
                 <div class="volunteers-card">
                    <h3 style="font-size: 20px;" class="volunteers-card__title">
                        <a href="#">His Royal Majesty, King (Dr) Michael Ateke Tom, JP  </a>
                    </h3>
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
                    <h3 style="font-size: 20px;"  class="volunteers-card__title"><a href="#"> Madu I. E.</a></h3>
                    <p class="volunteers-card__designation"> Director General (DG)</p>
                    <div class="volunteers-card__image">
                        <img style="height: 353px;" src="{{asset('images/trustee1.png')}}" alt="">
                    </div>
                    <div class="volunteers-card__social"><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-pinterest"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                 </div>
              </div>
              <div class="col-md-6 col-lg-4">
                 <div class="volunteers-card">
                    <h3 style="font-size: 20px;"  class="volunteers-card__title"><a href="#">Chief Amangi Sunday</a></h3>
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


     <section style="display: none!important" class="sec-pad-top sec-pad-bottom sponsor-carousel undefined" >
        <div class="container" >
           <div class="swiper4" >

              <div class="swiper-wrapper">

                 <div class="swiper-slide" >
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHoAAAAXCAMAAADz7atSAAAAxlBMVEUAAAAZREvr7+8fSlBRcXbz9vb2+PgWQUiAmJyVqazm6+wxWF5IanBAZGqxv8Jwi4/b4uM9YWeEm5+fsbTj6Onp7e4jTFMoUFctVFpEZ22KoKO2xMbEz9HX3uDx9PRNbnNrh4x9lpqtvL/O2Nnu8vIcR05beX5ffYFigIR0jpKInqKPpKfH0dNWdntlgoenuLq9yszBzc/K1NbR2tvf5eb4+vo2W2GarbA6X2VohImTqKvh5uejtLd4kZUhSlFVdHpVdXoUQEdRE2inAAAAQXRSTlMA+hbzvQ0K/YpzG+DHz1WbJ9OGaB8Y7+rky39PQCwPwqCNWTUS9rKuqpeCej23p19HQzkyIwfabdakdSFkkvG5uOs74P8AAAORSURBVEjHxVXZdtowEB0w2Dg2i4EYqM0SdgiELZCtbaL//6nOIiGHnJzmIT29D9ZoGOmOZgP+LZ7j6Ar+C3pKqdJXDHf1dXntfif1FVL/+oLdkyJUv5M6n1Oq/lercaQEY7BornZ7myuRXtJd7Z3iYuN2092hZ6mX74z2u9X9ZVYCpfHzrPM7tM/1N7K98aIiJAXSRWTUjLxMiEpe0MUlmbfIIJ6vDHU7DMMqv+foh55CPNabWeqyMphpzeh0Vr0ddcmshkZVRTJc9qDxwlnNr9UZvlALbqmUAmWQewBGDeNXt0fampnk1nSwdnDtSMl4IcrljiPBqeB3LsbixxCmigymaybZWupJCmjOL+7LI+vMrFbQVBlw0twJ+eqS5wPpkOuc8jAmNdRUUeMAtNCZIghi9BMAf1h0adugNwj1036/zwPcK/L0ACjdkDhEqa24uC04SwsUKiCgKI6JWqmCaKgIUnjGr45cooO6WYHgBypGTH1rjthiH1LMXUjxOtezxOJPEdc7sROHG0wtEZHgPfOxQBR9HQALD88wtYyULmUCDChsPj54yjdZNPTdL2CAqRvgNZJzSRI3DaViL86Rhcbx5ZBuh2j9bKm5mBLb77jrwyM6U7qkZk3B4C0mwzFeszDtKdQ1ExvKXk2qs15oKUGWmgrQy8MZEZVCrDxYfKCuqguUmbqUof4hCcy5UmQhv2amMvCF2mQkPrJkPJnQqds7lUVFV1nsWASJvkbQ1NSJeFrR0ey12cvB8qHh595TF5DLtdSv1CIRVZvKgrpjieuhaAHAZXbznpr76xEg5M6S3BdGYnJBfScpMUAfTx9D+xsQW650i8+ob1Hogdn9pgttIfqZv48HtjE48NQcXVJXuUon8hBBujl+Qt0jhg3zo4WyhVhn6mvPUI9pCp0jHsqwK1xQX4F5Tt8F4/HsE2oKpOPoOnfRIjLPYmp3IlNIV0+nZ9paDMfORX0LHlEOHmr5ZuUVpdNn1F1bH/KKOYpN32Nq+Veqp42KDAfV9rvXtZ+klKnRjZXF8tz1gQx+j78jaahFZr6V7F+efSshoJPlE4/QjRIkeF4uzMk31V06NcTtCpxRtC3Xv6dwWsckxSKmMvYFiYng+hhKAAey39IFJAsKtth31Sh2gmnDhSxGvzptpxU9JXpwh7MxaGzCefEshkPbBst+0DrNULEN5y6fmnc6s4q+8CbEC8vVLe/+AFczB7i3c6+FAAAAAElFTkSuQmCC" alt ><!--]--><!---->
                 </div>
                 <div class="swiper-slide" >
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHoAAAAXCAMAAADz7atSAAAAxlBMVEUAAAAZREvr7+8fSlBRcXbz9vb2+PgWQUiAmJyVqazm6+wxWF5IanBAZGqxv8Jwi4/b4uM9YWeEm5+fsbTj6Onp7e4jTFMoUFctVFpEZ22KoKO2xMbEz9HX3uDx9PRNbnNrh4x9lpqtvL/O2Nnu8vIcR05beX5ffYFigIR0jpKInqKPpKfH0dNWdntlgoenuLq9yszBzc/K1NbR2tvf5eb4+vo2W2GarbA6X2VohImTqKvh5uejtLd4kZUhSlFVdHpVdXoUQEdRE2inAAAAQXRSTlMA+hbzvQ0K/YpzG+DHz1WbJ9OGaB8Y7+rky39PQCwPwqCNWTUS9rKuqpeCej23p19HQzkyIwfabdakdSFkkvG5uOs74P8AAAORSURBVEjHxVXZdtowEB0w2Dg2i4EYqM0SdgiELZCtbaL//6nOIiGHnJzmIT29D9ZoGOmOZgP+LZ7j6Ar+C3pKqdJXDHf1dXntfif1FVL/+oLdkyJUv5M6n1Oq/lercaQEY7BornZ7myuRXtJd7Z3iYuN2092hZ6mX74z2u9X9ZVYCpfHzrPM7tM/1N7K98aIiJAXSRWTUjLxMiEpe0MUlmbfIIJ6vDHU7DMMqv+foh55CPNabWeqyMphpzeh0Vr0ddcmshkZVRTJc9qDxwlnNr9UZvlALbqmUAmWQewBGDeNXt0fampnk1nSwdnDtSMl4IcrljiPBqeB3LsbixxCmigymaybZWupJCmjOL+7LI+vMrFbQVBlw0twJ+eqS5wPpkOuc8jAmNdRUUeMAtNCZIghi9BMAf1h0adugNwj1036/zwPcK/L0ACjdkDhEqa24uC04SwsUKiCgKI6JWqmCaKgIUnjGr45cooO6WYHgBypGTH1rjthiH1LMXUjxOtezxOJPEdc7sROHG0wtEZHgPfOxQBR9HQALD88wtYyULmUCDChsPj54yjdZNPTdL2CAqRvgNZJzSRI3DaViL86Rhcbx5ZBuh2j9bKm5mBLb77jrwyM6U7qkZk3B4C0mwzFeszDtKdQ1ExvKXk2qs15oKUGWmgrQy8MZEZVCrDxYfKCuqguUmbqUof4hCcy5UmQhv2amMvCF2mQkPrJkPJnQqds7lUVFV1nsWASJvkbQ1NSJeFrR0ey12cvB8qHh595TF5DLtdSv1CIRVZvKgrpjieuhaAHAZXbznpr76xEg5M6S3BdGYnJBfScpMUAfTx9D+xsQW650i8+ob1Hogdn9pgttIfqZv48HtjE48NQcXVJXuUon8hBBujl+Qt0jhg3zo4WyhVhn6mvPUI9pCp0jHsqwK1xQX4F5Tt8F4/HsE2oKpOPoOnfRIjLPYmp3IlNIV0+nZ9paDMfORX0LHlEOHmr5ZuUVpdNn1F1bH/KKOYpN32Nq+Veqp42KDAfV9rvXtZ+klKnRjZXF8tz1gQx+j78jaahFZr6V7F+efSshoJPlE4/QjRIkeF4uzMk31V06NcTtCpxRtC3Xv6dwWsckxSKmMvYFiYng+hhKAAey39IFJAsKtth31Sh2gmnDhSxGvzptpxU9JXpwh7MxaGzCefEshkPbBst+0DrNULEN5y6fmnc6s4q+8CbEC8vVLe/+AFczB7i3c6+FAAAAAElFTkSuQmCC" alt ><!--]--><!---->
                 </div>
                 <div class="swiper-slide" >
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHoAAAAXCAMAAADz7atSAAAAxlBMVEUAAAAZREvr7+8fSlBRcXbz9vb2+PgWQUiAmJyVqazm6+wxWF5IanBAZGqxv8Jwi4/b4uM9YWeEm5+fsbTj6Onp7e4jTFMoUFctVFpEZ22KoKO2xMbEz9HX3uDx9PRNbnNrh4x9lpqtvL/O2Nnu8vIcR05beX5ffYFigIR0jpKInqKPpKfH0dNWdntlgoenuLq9yszBzc/K1NbR2tvf5eb4+vo2W2GarbA6X2VohImTqKvh5uejtLd4kZUhSlFVdHpVdXoUQEdRE2inAAAAQXRSTlMA+hbzvQ0K/YpzG+DHz1WbJ9OGaB8Y7+rky39PQCwPwqCNWTUS9rKuqpeCej23p19HQzkyIwfabdakdSFkkvG5uOs74P8AAAORSURBVEjHxVXZdtowEB0w2Dg2i4EYqM0SdgiELZCtbaL//6nOIiGHnJzmIT29D9ZoGOmOZgP+LZ7j6Ar+C3pKqdJXDHf1dXntfif1FVL/+oLdkyJUv5M6n1Oq/lercaQEY7BornZ7myuRXtJd7Z3iYuN2092hZ6mX74z2u9X9ZVYCpfHzrPM7tM/1N7K98aIiJAXSRWTUjLxMiEpe0MUlmbfIIJ6vDHU7DMMqv+foh55CPNabWeqyMphpzeh0Vr0ddcmshkZVRTJc9qDxwlnNr9UZvlALbqmUAmWQewBGDeNXt0fampnk1nSwdnDtSMl4IcrljiPBqeB3LsbixxCmigymaybZWupJCmjOL+7LI+vMrFbQVBlw0twJ+eqS5wPpkOuc8jAmNdRUUeMAtNCZIghi9BMAf1h0adugNwj1036/zwPcK/L0ACjdkDhEqa24uC04SwsUKiCgKI6JWqmCaKgIUnjGr45cooO6WYHgBypGTH1rjthiH1LMXUjxOtezxOJPEdc7sROHG0wtEZHgPfOxQBR9HQALD88wtYyULmUCDChsPj54yjdZNPTdL2CAqRvgNZJzSRI3DaViL86Rhcbx5ZBuh2j9bKm5mBLb77jrwyM6U7qkZk3B4C0mwzFeszDtKdQ1ExvKXk2qs15oKUGWmgrQy8MZEZVCrDxYfKCuqguUmbqUof4hCcy5UmQhv2amMvCF2mQkPrJkPJnQqds7lUVFV1nsWASJvkbQ1NSJeFrR0ey12cvB8qHh595TF5DLtdSv1CIRVZvKgrpjieuhaAHAZXbznpr76xEg5M6S3BdGYnJBfScpMUAfTx9D+xsQW650i8+ob1Hogdn9pgttIfqZv48HtjE48NQcXVJXuUon8hBBujl+Qt0jhg3zo4WyhVhn6mvPUI9pCp0jHsqwK1xQX4F5Tt8F4/HsE2oKpOPoOnfRIjLPYmp3IlNIV0+nZ9paDMfORX0LHlEOHmr5ZuUVpdNn1F1bH/KKOYpN32Nq+Veqp42KDAfV9rvXtZ+klKnRjZXF8tz1gQx+j78jaahFZr6V7F+efSshoJPlE4/QjRIkeF4uzMk31V06NcTtCpxRtC3Xv6dwWsckxSKmMvYFiYng+hhKAAey39IFJAsKtth31Sh2gmnDhSxGvzptpxU9JXpwh7MxaGzCefEshkPbBst+0DrNULEN5y6fmnc6s4q+8CbEC8vVLe/+AFczB7i3c6+FAAAAAElFTkSuQmCC" alt ><!--]--><!---->
                 </div>
                 <div class="swiper-slide" >
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHoAAAAXCAMAAADz7atSAAAAxlBMVEUAAAAZREvr7+8fSlBRcXbz9vb2+PgWQUiAmJyVqazm6+wxWF5IanBAZGqxv8Jwi4/b4uM9YWeEm5+fsbTj6Onp7e4jTFMoUFctVFpEZ22KoKO2xMbEz9HX3uDx9PRNbnNrh4x9lpqtvL/O2Nnu8vIcR05beX5ffYFigIR0jpKInqKPpKfH0dNWdntlgoenuLq9yszBzc/K1NbR2tvf5eb4+vo2W2GarbA6X2VohImTqKvh5uejtLd4kZUhSlFVdHpVdXoUQEdRE2inAAAAQXRSTlMA+hbzvQ0K/YpzG+DHz1WbJ9OGaB8Y7+rky39PQCwPwqCNWTUS9rKuqpeCej23p19HQzkyIwfabdakdSFkkvG5uOs74P8AAAORSURBVEjHxVXZdtowEB0w2Dg2i4EYqM0SdgiELZCtbaL//6nOIiGHnJzmIT29D9ZoGOmOZgP+LZ7j6Ar+C3pKqdJXDHf1dXntfif1FVL/+oLdkyJUv5M6n1Oq/lercaQEY7BornZ7myuRXtJd7Z3iYuN2092hZ6mX74z2u9X9ZVYCpfHzrPM7tM/1N7K98aIiJAXSRWTUjLxMiEpe0MUlmbfIIJ6vDHU7DMMqv+foh55CPNabWeqyMphpzeh0Vr0ddcmshkZVRTJc9qDxwlnNr9UZvlALbqmUAmWQewBGDeNXt0fampnk1nSwdnDtSMl4IcrljiPBqeB3LsbixxCmigymaybZWupJCmjOL+7LI+vMrFbQVBlw0twJ+eqS5wPpkOuc8jAmNdRUUeMAtNCZIghi9BMAf1h0adugNwj1036/zwPcK/L0ACjdkDhEqa24uC04SwsUKiCgKI6JWqmCaKgIUnjGr45cooO6WYHgBypGTH1rjthiH1LMXUjxOtezxOJPEdc7sROHG0wtEZHgPfOxQBR9HQALD88wtYyULmUCDChsPj54yjdZNPTdL2CAqRvgNZJzSRI3DaViL86Rhcbx5ZBuh2j9bKm5mBLb77jrwyM6U7qkZk3B4C0mwzFeszDtKdQ1ExvKXk2qs15oKUGWmgrQy8MZEZVCrDxYfKCuqguUmbqUof4hCcy5UmQhv2amMvCF2mQkPrJkPJnQqds7lUVFV1nsWASJvkbQ1NSJeFrR0ey12cvB8qHh595TF5DLtdSv1CIRVZvKgrpjieuhaAHAZXbznpr76xEg5M6S3BdGYnJBfScpMUAfTx9D+xsQW650i8+ob1Hogdn9pgttIfqZv48HtjE48NQcXVJXuUon8hBBujl+Qt0jhg3zo4WyhVhn6mvPUI9pCp0jHsqwK1xQX4F5Tt8F4/HsE2oKpOPoOnfRIjLPYmp3IlNIV0+nZ9paDMfORX0LHlEOHmr5ZuUVpdNn1F1bH/KKOYpN32Nq+Veqp42KDAfV9rvXtZ+klKnRjZXF8tz1gQx+j78jaahFZr6V7F+efSshoJPlE4/QjRIkeF4uzMk31V06NcTtCpxRtC3Xv6dwWsckxSKmMvYFiYng+hhKAAey39IFJAsKtth31Sh2gmnDhSxGvzptpxU9JXpwh7MxaGzCefEshkPbBst+0DrNULEN5y6fmnc6s4q+8CbEC8vVLe/+AFczB7i3c6+FAAAAAElFTkSuQmCC" alt ><!--]--><!---->
                 </div>
                 <div class="swiper-slide" >
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHoAAAAXCAMAAADz7atSAAAAxlBMVEUAAAAZREvr7+8fSlBRcXbz9vb2+PgWQUiAmJyVqazm6+wxWF5IanBAZGqxv8Jwi4/b4uM9YWeEm5+fsbTj6Onp7e4jTFMoUFctVFpEZ22KoKO2xMbEz9HX3uDx9PRNbnNrh4x9lpqtvL/O2Nnu8vIcR05beX5ffYFigIR0jpKInqKPpKfH0dNWdntlgoenuLq9yszBzc/K1NbR2tvf5eb4+vo2W2GarbA6X2VohImTqKvh5uejtLd4kZUhSlFVdHpVdXoUQEdRE2inAAAAQXRSTlMA+hbzvQ0K/YpzG+DHz1WbJ9OGaB8Y7+rky39PQCwPwqCNWTUS9rKuqpeCej23p19HQzkyIwfabdakdSFkkvG5uOs74P8AAAORSURBVEjHxVXZdtowEB0w2Dg2i4EYqM0SdgiELZCtbaL//6nOIiGHnJzmIT29D9ZoGOmOZgP+LZ7j6Ar+C3pKqdJXDHf1dXntfif1FVL/+oLdkyJUv5M6n1Oq/lercaQEY7BornZ7myuRXtJd7Z3iYuN2092hZ6mX74z2u9X9ZVYCpfHzrPM7tM/1N7K98aIiJAXSRWTUjLxMiEpe0MUlmbfIIJ6vDHU7DMMqv+foh55CPNabWeqyMphpzeh0Vr0ddcmshkZVRTJc9qDxwlnNr9UZvlALbqmUAmWQewBGDeNXt0fampnk1nSwdnDtSMl4IcrljiPBqeB3LsbixxCmigymaybZWupJCmjOL+7LI+vMrFbQVBlw0twJ+eqS5wPpkOuc8jAmNdRUUeMAtNCZIghi9BMAf1h0adugNwj1036/zwPcK/L0ACjdkDhEqa24uC04SwsUKiCgKI6JWqmCaKgIUnjGr45cooO6WYHgBypGTH1rjthiH1LMXUjxOtezxOJPEdc7sROHG0wtEZHgPfOxQBR9HQALD88wtYyULmUCDChsPj54yjdZNPTdL2CAqRvgNZJzSRI3DaViL86Rhcbx5ZBuh2j9bKm5mBLb77jrwyM6U7qkZk3B4C0mwzFeszDtKdQ1ExvKXk2qs15oKUGWmgrQy8MZEZVCrDxYfKCuqguUmbqUof4hCcy5UmQhv2amMvCF2mQkPrJkPJnQqds7lUVFV1nsWASJvkbQ1NSJeFrR0ey12cvB8qHh595TF5DLtdSv1CIRVZvKgrpjieuhaAHAZXbznpr76xEg5M6S3BdGYnJBfScpMUAfTx9D+xsQW650i8+ob1Hogdn9pgttIfqZv48HtjE48NQcXVJXuUon8hBBujl+Qt0jhg3zo4WyhVhn6mvPUI9pCp0jHsqwK1xQX4F5Tt8F4/HsE2oKpOPoOnfRIjLPYmp3IlNIV0+nZ9paDMfORX0LHlEOHmr5ZuUVpdNn1F1bH/KKOYpN32Nq+Veqp42KDAfV9rvXtZ+klKnRjZXF8tz1gQx+j78jaahFZr6V7F+efSshoJPlE4/QjRIkeF4uzMk31V06NcTtCpxRtC3Xv6dwWsckxSKmMvYFiYng+hhKAAey39IFJAsKtth31Sh2gmnDhSxGvzptpxU9JXpwh7MxaGzCefEshkPbBst+0DrNULEN5y6fmnc6s4q+8CbEC8vVLe/+AFczB7i3c6+FAAAAAElFTkSuQmCC" alt ><!--]--><!---->
                 </div>
                 <div class="swiper-slide" >
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHoAAAAXCAMAAADz7atSAAAAxlBMVEUAAAAZREvr7+8fSlBRcXbz9vb2+PgWQUiAmJyVqazm6+wxWF5IanBAZGqxv8Jwi4/b4uM9YWeEm5+fsbTj6Onp7e4jTFMoUFctVFpEZ22KoKO2xMbEz9HX3uDx9PRNbnNrh4x9lpqtvL/O2Nnu8vIcR05beX5ffYFigIR0jpKInqKPpKfH0dNWdntlgoenuLq9yszBzc/K1NbR2tvf5eb4+vo2W2GarbA6X2VohImTqKvh5uejtLd4kZUhSlFVdHpVdXoUQEdRE2inAAAAQXRSTlMA+hbzvQ0K/YpzG+DHz1WbJ9OGaB8Y7+rky39PQCwPwqCNWTUS9rKuqpeCej23p19HQzkyIwfabdakdSFkkvG5uOs74P8AAAORSURBVEjHxVXZdtowEB0w2Dg2i4EYqM0SdgiELZCtbaL//6nOIiGHnJzmIT29D9ZoGOmOZgP+LZ7j6Ar+C3pKqdJXDHf1dXntfif1FVL/+oLdkyJUv5M6n1Oq/lercaQEY7BornZ7myuRXtJd7Z3iYuN2092hZ6mX74z2u9X9ZVYCpfHzrPM7tM/1N7K98aIiJAXSRWTUjLxMiEpe0MUlmbfIIJ6vDHU7DMMqv+foh55CPNabWeqyMphpzeh0Vr0ddcmshkZVRTJc9qDxwlnNr9UZvlALbqmUAmWQewBGDeNXt0fampnk1nSwdnDtSMl4IcrljiPBqeB3LsbixxCmigymaybZWupJCmjOL+7LI+vMrFbQVBlw0twJ+eqS5wPpkOuc8jAmNdRUUeMAtNCZIghi9BMAf1h0adugNwj1036/zwPcK/L0ACjdkDhEqa24uC04SwsUKiCgKI6JWqmCaKgIUnjGr45cooO6WYHgBypGTH1rjthiH1LMXUjxOtezxOJPEdc7sROHG0wtEZHgPfOxQBR9HQALD88wtYyULmUCDChsPj54yjdZNPTdL2CAqRvgNZJzSRI3DaViL86Rhcbx5ZBuh2j9bKm5mBLb77jrwyM6U7qkZk3B4C0mwzFeszDtKdQ1ExvKXk2qs15oKUGWmgrQy8MZEZVCrDxYfKCuqguUmbqUof4hCcy5UmQhv2amMvCF2mQkPrJkPJnQqds7lUVFV1nsWASJvkbQ1NSJeFrR0ey12cvB8qHh595TF5DLtdSv1CIRVZvKgrpjieuhaAHAZXbznpr76xEg5M6S3BdGYnJBfScpMUAfTx9D+xsQW650i8+ob1Hogdn9pgttIfqZv48HtjE48NQcXVJXuUon8hBBujl+Qt0jhg3zo4WyhVhn6mvPUI9pCp0jHsqwK1xQX4F5Tt8F4/HsE2oKpOPoOnfRIjLPYmp3IlNIV0+nZ9paDMfORX0LHlEOHmr5ZuUVpdNn1F1bH/KKOYpN32Nq+Veqp42KDAfV9rvXtZ+klKnRjZXF8tz1gQx+j78jaahFZr6V7F+efSshoJPlE4/QjRIkeF4uzMk31V06NcTtCpxRtC3Xv6dwWsckxSKmMvYFiYng+hhKAAey39IFJAsKtth31Sh2gmnDhSxGvzptpxU9JXpwh7MxaGzCefEshkPbBst+0DrNULEN5y6fmnc6s4q+8CbEC8vVLe/+AFczB7i3c6+FAAAAAElFTkSuQmCC" alt ><!--]--><!---->
                 </div>

              </div>

           </div>
        </div>
     </section>
     <section class="funfact-two sec-pad-top sec-pad-bottom" style="background-image:url(_nuxt/funfact-bg-1-1.Ddy1ig-J.jpg);" >
        <div class="funfact-two__shape" ></div>
        <div class="container" >
           <div class="sec-title text-center" >
              <p class="sec-title__tagline" >Partner with us to empower them</p>
              <h2 class="sec-title__title" >Join your hands with us for <br >a better life and future</h2>
           </div>
           <ul class="list-unstyled funfact-two__list" >
              <li class="funfact-two__list__item" >
                 <div class="funfact-two__list__icon" ><i class="paroti-icon-campaign" ></i></div>
                 <h3 class="funfact-two__list__count count-box" >
                    <div class="countup-wrap" >
                       <span></span>
                    </div>
                 </h3>
                 <p class="funfact-two__list__text" >Total Campaigns</p>
              </li>
              <li class="funfact-two__list__item" style="--accent-color:#fdbe44;" >
                 <div class="funfact-two__list__icon" ><i class="paroti-icon-budget" ></i></div>
                 <h3 class="funfact-two__list__count count-box" >
                    <div class="countup-wrap" >
                       <!--[--><!--]--><span></span><!--[--><!--]-->
                    </div>
                 </h3>
                 <p class="funfact-two__list__text" >Raised Funds</p>
              </li>
              <li class="funfact-two__list__item" style="--accent-color:#138999;" >
                 <div class="funfact-two__list__icon" ><i class="paroti-icon-social-campaign" ></i></div>
                 <h3 class="funfact-two__list__count count-box" >
                    <div class="countup-wrap" >
                       <!--[--><!--]--><span></span><!--[--><!--]-->
                    </div>
                 </h3>
                 <p class="funfact-two__list__text" >Satisfied Donors</p>
              </li>
              <li class="funfact-two__list__item" style="--accent-color:#8139e7;" >
                 <div class="funfact-two__list__icon" ><i class="paroti-icon-help" ></i></div>
                 <h3 class="funfact-two__list__count count-box" >
                    <div class="countup-wrap" >
                       <!--[--><!--]--><span></span><!--[--><!--]-->
                    </div>
                 </h3>
                 <p class="funfact-two__list__text" >Happy Volunteers</p>
              </li>
           </ul>
        </div>
     </section>
     <section class="sec-pad-top sec-pad-bottom" >
        <div class="container" >
           <div class="sec-title text-center" >
              <p class="sec-title__tagline" >Support our cause</p>
              <h2 class="sec-title__title" >Upcoming Events</h2>
           </div>
           <div class="blog-carousel" >

                <div class="my-slider2">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img style="height: 282px" src="{{asset('images/med_program/img8.jpg')}}" alt="Online legal advice for asylum seekers in Greece">
                            <div class="blog-card__date">
                                <span>28</span>Oct
                            </div>
                        </div>
                        <div class="blog-card__content">
                            <h3 class="blog-card__title">
                                <a href="{{route('events.upcoming.health')}}" class="">Regular Health Care Programs and Health Education</a>
                            </h3>
                            <a href="{{route('events.upcoming.health')}}" class="blog-card__links">
                                <i class="fa fa-angle-double-right"></i> Read More
                            </a>
                        </div>
                    </div>

                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img style="height: 282px" src="{{asset('images/edu_program/14.jpg')}}" alt="Online legal advice for asylum seekers in Greece">
                            <div class="blog-card__date">
                                <span>10</span>Nov
                            </div>
                        </div>
                        <div class="blog-card__content">
                            <h3 class="blog-card__title">
                                <a href="{{route('events.upcoming.school')}}" class="">Continuing School Support Programs
                                </a>
                            </h3>
                            <a href="{{route('events.upcoming.school')}}" class="blog-card__links">
                                <i class="fa fa-angle-double-right"></i> Read More
                            </a>
                        </div>
                    </div>

                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img style="height: 282px" src="{{asset('images/green.webp
                            ')}}" alt="Online legal advice for asylum seekers in Greece">
                            <div class="blog-card__date">
                                <span>2025</span>
                            </div>
                        </div>
                        <div class="blog-card__content">
                            <h3 class="blog-card__title">
                                <a href="{{route('events.upcoming.green')}}" class="">Green I Initiative (Planting One Million Trees by 2025)</a>
                            </h3>
                            <a href="{{route('events.upcoming.green')}}" class="blog-card__links">
                                <i class="fa fa-angle-double-right"></i> Read More
                            </a>
                        </div>
                    </div>

                </div>
           </div>
        </div>
     </section>
     <section class="newsletter-one" >
        <div class="newsletter-one__bg" style="background-image:url(_nuxt/newsletter-1-1.DIGFgQeg.png);" ></div>
        <div class="newsletter-one__shape float-bob-x" ><img src="_nuxt/newsletter-1-1.DpPopHu9.png" alt="" ></div>
        <div class="container" >
           <div class="newsletter-one__icon float-bob-y" ><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHMAAABbCAMAAAB3YkqPAAAArlBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8tivQqAAAAOXRSTlMABfoS9vELQBYb5mE7sJIj3tZFDurNxE42jUniv4O5qn5c0Zt5U9q1iGoxLSagyHRXH+6llgcqZW67kQN7AAAIXklEQVRo3rzX6XaiQBAF4AvI4gIqCmrcl7hF46657/9iAzRGQHCYk5n5fng8R7Spqq6ywd8gHfblsa7gv7nYEwqTWRH/w4fDCPms4V9rlZhQr+KfMhZ81q1C0K7/oMDrLtN8QuiTk5WEv0pXmWoJ4UbPQoNwNfBzlQJTFYoQiiLqBnx7qj9ftHpkui3uLPp6EjwTsvLjpqwzQxt3Ul+lZ+i/JfnjOC1m6CFCsWRR4A+yjh9aM4uOGGPnUpXwTpr4E9rbbrSyY6np5QpTMHpTzPxoc1NmNQpzq4KQzuxqRr2ZTm863jg7k2zlzmE8oNJSgW/IDFNE2TIDc8qUG8jFODHpuALQkJmupCBUOQD4iiU9F7uZWrEi9kwn6whp873/eluoFHJ25xfTNe0z05UjrWRB2LTKX2N9Xc+15oyZVKapvT3mIukiRnfgk0bb3FGm+7T7i66qyuSxPrXxTaqTJcQNWvBsySqyvDEH81WKLrjbtL33bSfssTYyGEfm8Y401QL5iEcySbWjoFcBHHKBLCbzMccpqRrQd0CoQE/J3p9w44t/NJv51TpFxLQYUBB6EzkblQ5NcoQsn/wTc8Q49Mn4dhgw0CQnF2SoMJVr1JlKQUQ7DB8R4zkD8hpZtulJNNBhGjl2853UWfc+bJK8IYt0ZIrjFRjmGOw1Bs5I0ptjZFLSylnfAFWZKbpaWl3KeLLQ8cL7nAlmA9AcpnlD1JnCFU86K7wileOrjjLLrLYQ02WgGX/CUC0N2C3xGy2XdzVdHFFTND8QU6RwSm6rnobyFEmSNdcQVZ25MikPxhJ8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" alt="" ></div>
           <div class="row" >
              <div class="col-lg-7" >
                 <div class="sec-title" >
                    <p class="sec-title__tagline" >Partner with Us for Lasting Impact</p>
                    <h2 class="sec-title__title" >Together, We Can Transform Lives <br >and Build Stronger Communities</h2>
                 </div>

                 <div class="about-two__btns mt-10" style="margin:0!important">
                    <a href="{{route('donate')}}" class="my-join-us-btn thm-btn about-two__btn"
                    style="background-color:var(--paroti-black,#144047); border-radius:40px">
                        <span>Join Us</span>
                    </a>
                </div>

                 <div class="mc-response" >
                    <!---->
                 </div>
              </div>
           </div>
        </div>
     </section>

    @push('scripts')
        <script>
        var slider = tns({
            container: '.my-slider',
            items: 3,
            slideBy: 'page',
            autoplay: true,
            controls:false,
            autoplayButton:false,
            responsive: {
            300:{
                items: 1
            },
            640: {
                items: 1
            },
            700: {
                item: 2
            },
            900: {
                gutter: 20,
                items: 3
            }
            }
        });

        var slider2 = tns({
            container: '.my-slider2',
            items: 3,
            slideBy: 'page',
            autoplay: true,
            controls:false,
            autoplayButton:false,
            responsive: {
            300:{
                items: 1
            },
            640: {
                items: 1
            },
            700: {
                item: 2
            },
            900: {
                gutter: 20,
                items: 3
            }
            }
        });
        </script>
    @endpush
</x-guest-layout>

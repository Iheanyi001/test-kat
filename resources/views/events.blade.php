<x-guest-layout>
    @push('styles')
    <style>
    #dropdown-content {

        max-height: 0!important;
       overflow: hidden;
        transition: max-height 0.5s ease, padding 0.5s ease;
        /*padding: 0 20px;  Padding for smooth transition */
    }

    /* Style for visible state */
    .show {
        max-height: 400px; /* Adjust this value based on content height */
        padding: 10px 20px; /* Adding padding when visible */
    }

    #toggle-content {
        margin: 20px 0px;
        padding: 10px 15px;
        cursor: pointer;
    }
    .swiper-slide img{
        height: 408;
        width: auto;
    }
    .pre-amnesty .swiper-slide {
    display: none;
    }

    .pre-amnesty .swiper-slide-active {
    display: block;
    }
</style>
@endpush
    <section class="page-header" style="background-image: url({{asset('_nuxt/page-header-1-1.BAD7W5SW.jpg')}}); padding-bottom: 5.375rem; padding-top: 5.375rem;">
        <div class="container">
           <ul class="list-unstyled breadcrumb-one">
              <li><a href="{{route('home')}}">Home</a></li>
              <li><span>Events</span></li>
           </ul>
           <h2 class="page-header__title">Events</h2>
        </div>
    </section>

    <section class="my-container sec-pad-top sec-pad-bottom about-one">
        <div class="about-one__shape-1 float-bob-y"><img src="{{asset('_nuxt/about-1-1.BzIvtQQI.png')}}" alt=""></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6" style="overflow: hidden;">
                            <div class="pre-amnesty" style="width:100%">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/1.jpg')}}" alt="Image 1">
                                    </div>
                                    <div  class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/2.jpg')}}" alt="Image 2">
                                    </div>
                                    <div  class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/3.jpg')}}" alt="Image 3">
                                    </div>

                                    <div  class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/4.jpg')}}" alt="Image 3">
                                    </div>


                                    <div class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/5.jpg')}}" alt="Image 5">
                                    </div>

                                    <div class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/6.jpeg')}}" alt="Image 6">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/7.jpg')}}" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/8.jpg')}}" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/9.jpg')}}" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/10.jpg')}}" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/11.jpg')}}" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/12.jpg')}}" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/13.jpg')}}" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/14.jpg')}}" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/15.jpg')}}" alt="Image 7">
                                    </div><div class="swiper-slide">
                                        <img class="my-img" src="{{asset('images/edu_program/16.jpg')}}" alt="Image 7">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="about-one__content" style="padding-left:0">
                                <div class="sec-title">
                                    <p class="sec-title__tagline">Educational Outreach</p>
                                    <h2 class="sec-title__title" style="font-size: 1.5rem;">Visit To Schools In Niger Delta Region, <br>Rivers State</h2>
                                </div>
                                <!--<ul class="list-unstyled about-one__list">
                                <li><i class="fa fa-check-circle"></i> Donate to Poors </li>
                                <li><i class="fa fa-check-circle"></i> Deserving People </li>
                                </ul>-->

                                <p class="about-one__text" style="text-align: justify">
                                    The King Ateke Tom Foundation carried out an educational outreach in the Niger Delta region, specifically in Rivers State.
                                    On April 26th, two schools were visited, followed by two additional schools on April 27th. The foundation distributed educational materials, including textbooks, notebooks, writing tools, and backpacks, to over 500 students. Additionally, motivational talks were delivered by foundation members to encourage students to remain focused and dedicated to their education.
                                </p>
                                <!--<button id="toggle-content" style="border: none; background-color: #195650; color:#fff">
                                    Show all <i style="padding-left: 10px" class="fa fa-angle-right"></i>
                                </button>-->

                                <div>
                                    <h3 ><strong>Impact:</strong></h3>
                                    <p style="text-align: justify">This initiative provided critical learning resources, significantly boosting student morale and participation.
                                        Teachers observed a noticeable increase in student enthusiasm and engagement following the outreach.
                                        Furthermore, the foundation awarded full scholarships to 20 pupils from the four schools visited, underscoring its dedication to supporting education and fostering community development in the region.
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-container sec-pad-top sec-pad-bottom">
        <div class="sec-title text-center">
            <h2 class="sec-title__title">Upcoming Events</h2>
         </div>
        <div class="container">
           <div class="row gutter-y-30">
              <div class="col-md-12 col-lg-4">
                 <div  class="events-card">
                    <div  class="events-card__image"><img  src="https://paroti-nuxtjs.vercel.app/_nuxt/events-1-1.X_RzBhDG.jpg" alt=""><img  src="https://paroti-nuxtjs.vercel.app/_nuxt/events-1-1.X_RzBhDG.jpg" class="events-card__image--hover" alt=""></div>
                    <div  class="events-card__content">
                       <div  class="events-card__date">28 Oct.</div>
                       <ul  class="events-card__meta list-unstyled">
                          <li ><i  class="fa fa-clock"></i><a  href="#">8:00 am</a></li>
                          <li ><i  class="fa fa-map-marker-alt"></i><a  href="#">Rivers State</a></li>
                       </ul>
                       <h3  class="events-card__title"><a  href="/#" class="">Regular Health Care Programs and Health Education</a></h3>
                    </div>
                 </div>
              </div>
              <div class="col-md-12 col-lg-4">
                 <div  class="events-card">
                    <div  class="events-card__image"><img  src="https://paroti-nuxtjs.vercel.app/_nuxt/events-1-2.Bg2ITsv2.jpg" alt=""><img  src="https://paroti-nuxtjs.vercel.app/_nuxt/events-1-2.Bg2ITsv2.jpg" class="events-card__image--hover" alt=""></div>
                    <div  class="events-card__content">
                       <div  class="events-card__date">10 Nov</div>
                       <ul  class="events-card__meta list-unstyled">
                          <li ><i  class="fa fa-clock"></i><a  href="#">10:00 am</a></li>
                          <li ><i  class="fa fa-map-marker-alt"></i><a  href="#">Nigeria</a></li>
                       </ul>
                       <h3  class="events-card__title"><a  href="/#" class="">Continuing School Support Programs</a></h3>
                    </div>
                 </div>
              </div>
              <div class="col-md-12 col-lg-4">
                 <div  class="events-card">
                    <div  class="events-card__image"><img  src="https://paroti-nuxtjs.vercel.app/_nuxt/events-1-3.RHc6ZBpF.jpg" alt=""><img  src="https://paroti-nuxtjs.vercel.app/_nuxt/events-1-3.RHc6ZBpF.jpg" class="events-card__image--hover" alt=""></div>
                    <div  class="events-card__content">
                       <div  class="events-card__date">2025</div>
                       <ul  class="events-card__meta list-unstyled">
                          <li ><i  class="fa fa-clock"></i><a  href="#">8:00 pm</a></li>
                          <li ><i  class="fa fa-map-marker-alt"></i><a  href="#">Niger Delta States</a></li>
                       </ul>
                       <h3  class="events-card__title"><a  href="/#" class="">Green I Initiative (Planting One Million Trees by 2025)</a></h3>
                    </div>
                 </div>
              </div>
           </div>
        </div>
    </section>


    @push('scripts')
    <script>
        const toggleBtn = document.getElementById('toggle-content');
    const content = document.getElementById('dropdown-content');

// Add click event to the button
/*toggleBtn.addEventListener('click', function() {
    content.classList.toggle('show');
});*/

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

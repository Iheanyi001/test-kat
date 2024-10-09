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

        .my-img{
            height: 430px!important; /* Replace with your desired height */
            width: auto!important; /* Replace with your desired width */
            object-fit: cover; /* Scale image to cover entire height */
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

    <section class="my-container sec-pad-top sec-pad-bottom about-one">
        <div class="about-one__shape-1 float-bob-y"><img src="{{asset('_nuxt/about-1-1.BzIvtQQI.png')}}" alt=""></div>
        <div class="about-one__shape-2 float-bob-x"><img src="{{asset('_nuxt/about-1-2.D_jGqYhl.png')}}" alt=""></div>
        <div class="container">
           <div class="row">

                <div class="col-lg-6">
                    <div class="about-one__content" style="padding-left:0">
                        <div class="sec-title">
                        <p class="sec-title__tagline">More about the KAT Foundation</p>
                        <h2 class="sec-title__title" style="font-size: 1.5rem;">History of the King Ateke Tom Foundation:<br/> From Struggle to Service</h2>
                        </div>
                        <!--<ul class="list-unstyled about-one__list">
                        <li><i class="fa fa-check-circle"></i> Donate to Poors </li>
                        <li><i class="fa fa-check-circle"></i> Deserving People </li>
                        </ul>-->
                        <div class="about-one__tagline">Pre-Amnesty </div>
                        <p class="about-one__text">

                        </p>
                        <p>
                        The King Ateke Tom Foundation was born out of the complex and challenging history of the Niger Delta, a region rich in natural resources but plagued by decades of neglect, environmental degradation, and socio-economic strife. The foundation’s roots are deeply intertwined with the personal journey of its founder, King Ateke Michael Tom, who rose from the crucible of these struggles to become a prominent leader in the region.
                        </p>

                    </div>
                </div>

                    <div class="col-lg-6" style="overflow: hidden; height: 408px">
                        <div class="pre-amnesty swiper" style="width: 100%; height: 100%">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="my-img" src="{{asset('images/anm/pre-amnesty1.jpg')}}" alt="Image 1">
                                </div>
                                <div class="swiper-slide">
                                    <img class="my-img" src="{{asset('images/anm/pre-amnesty2.jpg')}}" alt="Image 2">
                                </div>
                                <div class="swiper-slide">
                                    <img class="my-img" src="{{asset('images/anm/pre-amnesty3.jpg')}}" alt="Image 3">
                                </div>
                                <div class="swiper-slide">
                                    <img class="my-img" src="{{asset('images/anm/pre-amnesty4.jpg')}}" alt="Image 4">
                                </div>
                                <div class="swiper-slide">
                                    <img class="my-img" src="{{asset('images/anm/pre-amnesty5.jpg')}}" alt="Image 5">
                                </div>
                                <div class="swiper-slide">
                                    <img class="my-img" src="{{asset('images/anm/pre-amnesty6.jpeg')}}" alt="Image 6">
                                </div>
                                <div class="swiper-slide">
                                    <img class="my-img" src="{{asset('images/anm/pre-amnesty7.jpg')}}" alt="Image 7">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

           <div class="row">
                <div class="col-lg-6">
                    <p>
                     HRH King Ateke Michael Tom hails from Okrika, a town in the Rivers State of Nigeria. He became prominent in the early 2000s due to his involvement in the struggle for control over the resources in the Niger Delta. He left behind his roles as a fisherman, poultry farmer, and sand digger to fight for justice.
                    </p>

                   <p>
                     King Ateke Tom initially gained notoriety as a leader of the Niger Delta Vigilante (NDV), a militia group formed to protect the interests of the Niger Delta communities amidst the turmoil caused by the oil industry and government neglect. The NDV, under his leadership, was instrumental in drawing national and international attention to the plight of the region. Their activities were focused on fighting for resource control, environmental protection, and greater development in the Niger Delta region.
                   </p>

                   <p>
                     During an interview, Ateke mooted the idea of peace if his boys could be granted amnesty, provided skilled training and afforded jobs for them to live normal life.
                     Under Ateke Tom's leadership, the NDV engaged in armed struggles, including attacking oil installations, taking hostages, and clashing with both government forces and rival militias. These activities were part of the broader Niger Delta insurgency, where militants sought to claim a greater share of oil revenues for the impoverished region.
                     He faced relentless attacks and government hostility, yet his resolve never wavered. His mission was clear: to secure amnesty for his men and provide them with the skills and jobs needed to build a new life.

                    </p>
                    <p>
                     Recognizing that true progress required peace and constructive engagement, King Ateke Tom embraced the Nigerian government's amnesty program in 2009 offered by President Umaru Yar'Adua. An unconditional pardon and cash payments to rebels who agree to lay down their arms. This pivotal decision marked the beginning of a transformation to one of peacebuilding and community development.
                    </p>
                </div>

                <div class="col-lg-6">
                    <p>
                     When President Umaru Musa Yar'Adua saw Ateke Tom in the state house admist the amnesty resolutions, A highly elated Yar'Adua described Atekes visit as his 49th Independence gift, saying that <strong>"this independent anniversary gift you have given me, I cherish very much because of all those things I cherished, one of them is peace and security in the Niger Delta, it has always pained me to see our brother and sister  Nigerians taking up arms against fellow Nigerians and are ready to live in the creeks under very difficult situations and conditions because of such issues that agitated their minds. But by the grace of God and the kind heart and the goodwill you have brought to this amnesty programme, this is coming to an end"</strong>

                    </p>
                    <p>
                     Our minds would draw back to the following interview of King Ateke.
                     <strong><i>What else would you want the government to do for you and your boys so that there could be peace, that is in, addition to the compensation for what was damaged during the attack on your base? Let the government find jobs for the boys and involve those who wish to learn any trade in skill acquisition, so that they can live their lives peacefully.
                     Are you saying that if the government comes and says bring the list of the names of your boys so that they could be employed, as a sort of amnesty, will that end the problem between you and government? Of course there will no more trouble; we would not feel concerned about anything anymore. Because we are not robbers, we are loyal citizens going about our lives quietly.</i></strong>

                    </p>
                    <p><strong><i>
                     If the problem between you and the government is settled, how would you want to live your life? Already I am a quiet man, I made peace and resolved to keep the peace, I have been living quietly, I have nothing against anyone. But our things must be returned or compensated for and we will remain quiet.</i></strong>
                    </p>
                    <p>The King Ateke Tom Foundation emerged from this transformation as a beacon of hope, dedicated to the sustainable development of the Niger Delta and beyond.</p>
                </div>
           </div>

           <br><br>
           <div class="row">

            <div class="col-lg-6">
               <div class="about-one__content" style="padding-left:0">
                  <div class="sec-title">
                     <h2 class="sec-title__title" style="font-size: 1.5rem;">Post Amnesty: Empowering Communities, Building Futures</h2>
                  </div>

                  <!--<div class="about-one__tagline">Pre-Amnesty </div>-->
                  <p class="about-one__text">

                  </p>
                  <p>
                     Today, the King Ateke Tom Foundation stands as a powerful force for good in the Niger Delta. Our mission is to uplift the lives of the people in this region by addressing critical issues such as poverty, lack of education, poor healthcare, and youth unemployment. Through a variety of initiatives, the foundation works tirelessly to improve the socio-economic conditions of the communities it serves.

                     <div class="about-one__tagline">Education:</div>
                   </p>
                     We believe in the power of education to change lives.
                     The foundation provides scholarships, supplies educational materials, and supports the construction and renovation of schools. Our goal is to ensure that every child in the Niger Delta has access to quality education.

               </div>
            </div>

            <div class="col-lg-6" style="overflow: hidden; height: 408px">
                <div class="post-amnesty swiper" style="width: 100%; height: 100%">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="my-img" src="{{asset('images/anm/post-amnesty1.jpg')}}" alt="Image 1">
                        </div>
                        <div class="swiper-slide">
                            <img class="my-img" src="{{asset('images/anm/post-amnesty2.jpg')}}" alt="Image 2">
                        </div>
                        <div class="swiper-slide">
                            <img class="my-img" src="{{asset('images/anm/post-amnesty3.jpg')}}" alt="Image 3">
                        </div>
                        <div class="swiper-slide">
                            <img class="my-img" src="{{asset('images/anm/post-amnesty4.jpg')}}" alt="Image 4">
                        </div>
                        <div class="swiper-slide">
                            <img class="my-img" src="{{asset('images/anm/post-amnesty5.jpg')}}" alt="Image 5">
                        </div>
                        <div class="swiper-slide">
                            <img class="my-img" src="{{asset('images/anm/post-amnesty6.jpg')}}" alt="Image 6">
                        </div>
                        <div class="swiper-slide">
                            <img class="my-img" src="{{asset('images/anm/post-amnesty8.jpg')}}" alt="Image 8">
                        </div>
                        <div class="swiper-slide">
                            <img class="my-img" src="{{asset('images/anm/post-amnesty9.jpg')}}" alt="Image 9">
                        </div>
                        <div class="swiper-slide">
                            <img class="my-img" src="{{asset('images/anm/post-amnesty10.jpg')}}" alt="Image 10">
                        </div>
                        <div class="swiper-slide">
                            <img class="my-img" src="{{asset('images/anm/post-amnesty11.jpg')}}" alt="Image 11">
                        </div>
                        <div class="swiper-slide">
                            <img class="my-img" src="{{asset('images/anm/post-amnesty12.jpg')}}" alt="Image 12">
                        </div>
                        <div class="swiper-slide">
                            <img class="my-img" src="{{asset('images/anm/post-amnesty13.jpg')}}" alt="Image 13">
                        </div>
                    </div>
                </div>
            </div>
         </div>

         <div class="row">
              <div class="col-lg-6">
                  <p>
                     <div class="about-one__tagline">Healthcare:</div> The foundation organizes medical outreach programs, providing free healthcare services to underserved communities. We also invest in improving local healthcare infrastructure to ensure long-term benefits for the region’s residents.
                  </p>

                 <p>
                  <div class="about-one__tagline">Youth Empowerment:</div> the potential of the youth as the future of the region, the foundation offers skills acquisition programs and vocational training. These initiatives are designed to reduce unemployment and provide young people with the tools they need to build successful, self-sufficient lives.
                 </p>

                 <p>
                  <div class="about-one__tagline">Community Development:</div>
                  The foundation is actively involved in various infrastructure projects, from constructing roads to providing clean water supplies. These projects are vital in improving the overall quality of life and fostering sustainable development in the region.
                  Peacebuilding: As a freedom fighter, King Ateke Tom is deeply committed to promoting peace in the Niger Delta and beyond. The foundation works closely with local communities, government agencies, and other stakeholders to mediate conflicts and support initiatives that ensure lasting peace.

                  </p>
                  <p>
                   Recognizing that true progress required peace and constructive engagement, King Ateke Tom embraced the Nigerian government's amnesty program in 2009 offered by President Umaru Yar'Adua. An unconditional pardon and cash payments to rebels who agree to lay down their arms. This pivotal decision marked the beginning of a transformation to one of peacebuilding and community development.
                  </p>

                  <div class="about-one__tagline">Our Future: A Vision of Prosperity and Peace</div>
                  <p>
                     Looking ahead, the King Ateke Tom Foundation is committed to expanding its reach and impact. We envision a future where the Niger Delta is no longer defined by its struggles but by its triumphs—a region where communities are thriving, children are educated, and peace is the norm rather than the exception.
                  </p>
              </div>

              <div class="col-lg-6">
               <br><br>
                <div class="about-one__tagline">Our goals for the future include:</div>
                  <p>

                     Scaling Up Educational Programs: Expanding our scholarship and school support programs to reach more children across the Niger Delta and beyond.
                     Enhancing Healthcare Initiatives: Increasing the frequency and scope of our medical outreach programs and further improving healthcare infrastructure.
                     Broadening Youth Empowerment Efforts: Developing more comprehensive vocational training programs and creating partnerships with businesses to provide employment opportunities for trained youth.
                  </p>
                  <p>
                     Strengthening Community Development Projects: Undertaking larger-scale infrastructure projects that will have a lasting impact on the region’s development.
                     Deepening Peacebuilding Activities: Continuing our work in conflict resolution and peace promotion, with the aim of fostering a stable and prosperous environment with and beyond shores.

                  </p>
                  <p>
                     The King Ateke Tom Foundation is more than just an organization, it is a movement for change, a symbol of hope, and a testament to the resilience and potential of the people. As we move forward, we invite everyone, partners, donors, and well-wishers to join us on this journey toward a brighter future for all.
                  </p>

                  <div class="about-one__tagline">Coronation of King Ateke Tom: A Legacy of Sacrifice and Leadership</div>
                  <p>
                    On the 27th of November, 2017, the people of Okochiri Kingdom crowned Ateke Tom as their king, not just in recognition of his leadership, but as a reward for his years of selfless sacrifice. For decades, King Ateke Tom fought tirelessly for the rights and well-being of his people, standing as a beacon of hope and a protector of their interests during difficult times. His coronation was a deeply symbolic moment for the kingdom, acknowledging his unwavering dedication to defending their future.
                  </p>
                  <p>
                    This honor was officially sanctioned with the presentation of the staff of office by His Excellency, Barr. Nyesom Ezenwo Wike, the then-Governor of Rivers State, cementing King Ateke Tom’s role as a leader committed to progress and peace for his people.
                  </p>
                  <p>
                    In a further testament to his enduring impact, more recently in March of this year, His Excellency Siminalaye Fubara, the current Governor of Rivers State, bestowed upon King Ateke Tom the certificate and staff of office as a First-Class King. This recognition, a significant milestone in the King’s reign, acknowledges not only his leadership within Okochiri Kingdom but also his influence across the wider region.
                  </p>
                  <p>
                    King Ateke Tom’s journey from a fighter for his people’s rights to a First-Class King is a testament to his sacrifices and the profound respect he commands. His legacy continues to inspire the mission of the King Ateke Tom Foundation, which remains dedicated to improving the lives of the less privileged and fostering sustainable development in the kingdom and beyond.
                  </p>
                </div>
         </div>
        </div>
     </section>

     <x-testimonials/>

     <section class="sec-pad-top sec-pad-bottom">
        <div class="container">
           <div class="sec-title text-center">
              <h2 class="sec-title__title">What we do</h2>
           </div>
           <div class="row gutter-y-30 mt-4">

            <ul class="list-unstyled funfact-two__list" >
                <li class="funfact-two__list__item" >
                   <a style="color:var(--paroti-black,#144047)" href="{{route('support.medical')}}">
                   <div class="funfact-two__list__icon" >
                    <img style="width:70px" src="{{asset('images/med-icon.png')}}" alt="Medical Outreach" >
                </div>
                   <h3 class="funfact-two__list__count count-box" >
                      <div class="countup-wrap" >
                         <span></span>
                      </div>
                   </h3>
                   <p class="funfact-two__list__text" >Medical Outreach</p>
                   </a>
                </li>

                <li class="funfact-two__list__item" style="--accent-color:#8139e7;" >
                    <a style="color:var(--paroti-black,#144047)" href="{{route('support.environment')}}">
                    <div class="funfact-two__list__icon" >
                        <img style="width:70px" src="{{asset('images/env-icon.png')}}" alt="Environment" >
                    </div>
                    <h3 class="funfact-two__list__count count-box" >
                       <div class="countup-wrap" >
                          <!--[--><!--]--><span></span><!--[--><!--]-->
                       </div>
                    </h3>
                    <p class="funfact-two__list__text" >Environmental Sustainability</p>
                    </a>
                 </li>

                <li class="funfact-two__list__item" >
                    <a style="color:var(--paroti-black,#144047)" href="{{route('support.youth')}}">
                    <div class="funfact-two__list__icon" >
                        <img style="width:70px" src="{{asset('images/youth-icon.png')}}" alt="">
                    </div>
                    <h3 class="funfact-two__list__count count-box" >
                       <div class="countup-wrap" >
                          <span></span>
                       </div>
                    </h3>
                    <p  class="funfact-two__list__text" >Youth Empowerment and Skill Acquisition</p>
                    </a>
                </li>
                <li class="funfact-two__list__item" style="--accent-color:#fdbe44;" >
                    <a style="color:var(--paroti-black,#144047)" href="{{route('support.poverty')}}">
                   <div class="funfact-two__list__icon" >
                    <img style="width:70px" src="{{asset('images/poor-icon.png')}}" alt="Poverty Alleviation" >
                    </div>
                   <h3 class="funfact-two__list__count count-box" >
                      <div class="countup-wrap" >
                         <!--[--><!--]--><span></span><!--[--><!--]-->
                      </div>
                   </h3>
                   <p class="funfact-two__list__text" >Poverty Alleviation </p>
                    </a>
                </li>
                <li class="funfact-two__list__item" style="--accent-color:#138999;" >
                    <a style="color:var(--paroti-black,#144047)" href="{{route('support.education')}}">
                   <div class="funfact-two__list__icon" >
                    <img style="width:70px" src="{{asset('images/edu-icon.png')}}" alt="Educational Support"/>
                    </div>

                   <h3 class="funfact-two__list__count count-box" >
                      <div class="countup-wrap" >
                         <!--[--><!--]--><span></span><!--[--><!--]-->
                      </div>
                   </h3>
                   <p class="funfact-two__list__text" >Educational Support </p>
                   </a>
                </li>

             </ul>


           </div>
        </div>
     </section>

     @push('scripts')
     <script>
        const preAmnesty = new Swiper('.pre-amnesty', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 3000, // Change this to the desired delay in milliseconds
        disableOnInteraction: false, // Allow autoplay to continue after user interactions
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination', // Ensure you add pagination if you want to display it
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});


const swiperPostAmnesty = new Swiper('.post-amnesty', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 3000, // Autoplay every 3 seconds
        disableOnInteraction: false, // Keep autoplay even after user interaction
    },

    // If pagination is needed
    pagination: {
        el: '.swiper-pagination', // Add a pagination container
        clickable: true,
    },

    // Navigation buttons (if needed)
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

      </script>
      @endpush
</x-guest-layout>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>KingAtekeTomFoundation</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

        <link rel="icon" type="image/x-icon" href="{{asset('images/logo-icon.png')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
        <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.helper.ie8.js"></script><![endif]-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery.counterup@2.1.0/jquery.counterup.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/waypoints/lib/jquery.waypoints.min.js"></script>

        @vite(['resources/css/app.css', 'resources/css/style.css'])
        <link rel="stylesheet" href="_nuxt/entry.Cnz8qrmP.css">
        <link rel="stylesheet" href="_nuxt/swiper-vue.C8kddlLw.css">
        <link rel="stylesheet" href="_nuxt/index.CIolG9YW.css">
        <link rel="stylesheet" href="_nuxt/SearchPopup.0PP6UZ_v.css">
        <link rel="stylesheet" href="{{asset('libs/toastr/toastr.css')}}">
        <!-- Styles -->

        <style>
            [data-action="stop"] {
                display:none!important;
            }
        </style>
        @livewireStyles
        @stack('styles')
        <style>
            @media (min-width: 900px) {
    .my-container {
        margin: 0 100px;
    }
}
.p{
    text-align: justify!important;
}
.my-join-us-btn:after, .my-join-us-btn:before{
    background: #fdbe44!important;
}

    #main {
        display: none;
    }

    #preloader {
        display: flex;
    }


        </style>
    </head>
    <body>
        <div id="__nuxt">
            <div>

               <div id="preloader"  class="preloader">
                  <div class="preloader__inner">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </div>

               <div id="main" style="display: none">
                  <div>
                     <!--[-->
                     <div>
                        <header class="main-header">
                           <div class="topbar">
                              <div class="container-fluid">
                                 <div class="topbar__inner">
                                    <ul class="list-unstyled topbar__info">
                                       <li><i class="fa fa-map"></i><a href="#">No. 12 Dokubo Street, Conerstone off NTA Road, Portharcourt, Rivers State. </a></li>
                                       <li><i class="fa fa-envelope-open"></i><a href="mailto:info@kingateketomfoundation.org">info@kingateketomfoundation.org</a></li>
                                       <li><i class="fa fa-mobile"></i><a href="tel:(+234) 7085892686">(+234) 7085892686</a></li>
                                    </ul>
                                    <div class="topbar__social">
                                        <a href="/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.facebook.com/kat.foundation1?mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a>

                                        <a href="https://www.instagram.com/katfoundation2024/"><i class="fab fa-instagram"></i></a>
                                    </div>

                                 </div>
                              </div>
                           </div>
                           <nav class="main-menu sticky-header">
                              <div class="container-fluid">
                                 <a aria-current="page" href="{{route('home')}}" class="router-link-active router-link-exact-active main-header__logo">
                                    <img src="{{asset('images/logo.png')}}" width="250" height="49" alt></a>
                                 <ul class="main-menu__list">
                                    <!--[-->
                                    <li class="dropdown">
                                       <a aria-current="page" href="{{route('home')}}" class="{{request()->routeIs('home') ? 'router-link-active router-link-exact-active': ''}}">Home</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="{{route('about')}}" class="{{request()->routeIs('about') ? 'router-link-active router-link-exact-active': ''}}">About Us</a>
                                     </li>

                                    <li class="dropdown">
                                       <a href="{{route('events')}}" class="{{request()->routeIs('events') ? 'router-link-active router-link-exact-active': ''}}">Events</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="{{route('donate')}}" class="{{request()->routeIs('donate') ? 'router-link-active router-link-exact-active': ''}}">Donations</a>
                                     </li>

                                    <li class="">
                                       <a href="{{route('contact')}}" class="{{request()->routeIs('contact') ? 'router-link-active router-link-exact-active': ''}}">Contact Us</a><!---->
                                    </li>


                                    <!--]-->
                                 </ul>
                                 <div class="main-menu__right">
                                    <div class="main-menu__cta">
                                       <div class="main-menu__cta__icon"><i class="paroti-icon-volunteer"></i></div>
                                       <div class="main-menu__cta__text"><span>Join us now</span><a href="{{route('contact')}}" class="">Become a Volunteer</a></div>
                                    </div>
                                    <a href="{{route('donate')}}" class="thm-btn thm-btn--two">
                                        <span>Donate Now</span>
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" style="display:none" class="main-header__btn search-toggler">
                                        <i class="paroti-icon-magnifying-glass"></i>
                                    </a>

                                    <a href="javascript:void(0)" onclick="openNav()" class="main-header__toggler mobile-nav__toggler">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                 </div>
                              </div>
                           </nav>
                        </header>
            {{ $slot }}

        <footer class="site-footer" style="background-image:url({{asset('_nuxt/footer-bg-1-1.DQ6J-Ydo.jpg')}});" data-v-637754db>
            <div class="site-footer__top" data-v-637754db>
               <div class="container" data-v-637754db>
                  <div class="row" data-v-637754db>
                     <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms" data-v-637754db>
                        <div class="site-footer__widget site-footer__widget__about" data-v-637754db>
                           <a aria-current="page" href="{{route('home')}}" class="router-link-active router-link-exact-active site-footer__widget__logo" data-v-637754db>
                            <img src="{{asset('images/logo-white.png')}}" width="250" height="49" alt="Logo" data-v-637754db></a>
                           <p class="site-footer__widget__text" data-v-637754db>No. 12 Dokubo Street, Conerstone off NTA Road, Portharcourt, Rivers State.
                        </p>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms" data-v-637754db>
                        <div class="site-footer__widget" data-v-637754db>
                           <h3 class="site-footer__widget__title" data-v-637754db>Links</h3>
                           <ul class="list-unstyled site-footer__widget__links" data-v-637754db>
                              <li data-v-637754db><a href="{{route('home')}}" class="" data-v-637754db>Home</a></li>
                              <li data-v-637754db><a href="{{route('about')}}" class="" data-v-637754db>About us</a></li>
                              <li data-v-637754db><a href="{{route('donate')}}" class="" data-v-637754db>Donate</a></li>
                              <li data-v-637754db><a href="{{route('events')}}" class="" data-v-637754db>Events</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms" data-v-637754db>
                        <div class="non-profile-container site-footer__widget" data-v-637754db>
                           <h3 class="site-footer__widget__title" data-v-637754db>Support Outreach</h3>
                           <ul class="list-unstyled site-footer__widget__links" data-v-637754db>
                              <li data-v-637754db><a href="{{route('support.medical')}}" class="" data-v-637754db>Medical</a></li>
                              <li data-v-637754db><a href="{{route('support.education')}}" class="" data-v-637754db>Educational</a></li>
                              <li data-v-637754db><a href="{{route('support.poverty')}}" class="" data-v-637754db>Poverty Alleviation</a></li>
                              <li data-v-637754db><a href="{{route('support.youth')}}" class="" data-v-637754db>Youth Empowerment</a></li>
                              <li data-v-637754db><a href="{{route('support.environment')}}" class="" data-v-637754db>Environmental Sustainability</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="site-footer__widget">
                           <h3 class="site-footer__widget__title">Contact</h3>
                           <ul class="list-unstyled site-footer__widget__contact">
                              <li><i class="fa fa-envelope-open"></i><a href="mailto:info@kingateketomfoundation.org">info@kingateketomfoundation.org</a></li>
                              <li><i class="fa fa-mobile"></i><a href="tel:(+234) 7085892686">(+234) 7085892686</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="site-footer__widget site-footer__widget__cta">
                           <h3 class="site-footer__widget__title"><span>Get involved</span></h3>
                           <a href="{{route('donate')}}" class="thm-btn thm-btn--two thm-btn--light"><span>Donate Now</span><i class="fa fa-heart" data-v-637754db></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="site-footer__bottom">
               <div class="container">
                  <div class="site-footer__bottom__inner">
                     <p class="site-footer__bottom__text"> © Copyright
                        <span class="dynamic-year">2024</span> KAT Foundation
                    </p>
                    <p class="site-footer__bottom__text"> Made by
                        <a href="https://bytebouwers.com.ng" target="_blank" class="dynamic-year">ByteBouwers</a>
                    </p>
                     <div class="site-footer__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/kat.foundation1?mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a>

                        <a href="https://www.instagram.com/katfoundation2024/"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
               </div>
            </div>

            <!---->
         </footer>
         <div id="mobile-nav__wrapper" class="mobile-nav__wrapper" >
            <div class="mobile-nav__overlay mobile-nav__toggler" ></div>
            <div class="mobile-nav__content" >
               <a href="javascript:void(0)" onclick="openNav()" class="mobile-nav__close mobile-nav__toggler" ><span ></span><span ></span></a>
               <div class="logo-box" ><a aria-current="page" href="{{route('home')}}" class="router-link-active router-link-exact-active" aria-label="logo image" >
                <img src="{{asset('images/logo-white.png')}}" width="250" height="49" alt="KAT Foundation" ></a></div>
               <div class="mobile-nav__container" >
                  <ul class="mobile-menu__list" >
                     <!--[-->
                     <li class="menu-item-has-children" >
                        <a href="{{route('home')}}" >Home </a>

                     </li>
                     <li class="menu-item-has-children" >
                        <a href="{{route('about')}}" >About </a>

                     </li>
                     <li class="menu-item-has-children" >
                        <a href="{{route('donate')}}" >Donate </a>

                     </li>
                     <li class="menu-item-has-children" >
                        <a href="{{route('events')}}" >Events </a>
                     </li>

                     <li class="" >
                        <a href="{{route('contact')}}" >
                           Contact <!---->
                        </a>
                        <!---->
                     </li>
                     <!--]-->
                  </ul>
               </div>
               <ul class="mobile-nav__contact list-unstyled" >
                  <li ><i class="fa fa-phone" ></i><a href="tel:+8898006802" >(+234) 7085892686</a></li>
                  <li ><i class="fa fa-envelope" ></i><a href="mailto:needhelp@company.com" >info@kingateketomfoundation.org</a></li>
                  <li ><i class="fa fa-map-marker-alt" ></i> N9. Delta state <br > Nigeria </li>
               </ul>
               <ul class="mobile-nav__social" >
                  <li ><a href="{{route('home')}}" ><i class="fab fa-twitter" ></i></a></li>
                  <li ><a href="https://www.facebook.com/kat.foundation1?mibextid=ZbWKwL" ><i class="fab fa-facebook-f" ></i></a></li>
                  <li ><a href="https://www.instagram.com/katfoundation2024/" ><i class="fab fa-instagram" ></i></a></li>
               </ul>
            </div>
         </div>
         <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <div class="search-popup__content">
               <form action="#"><label for="search" class="sr-only">search here</label><input type="text" id="search" placeholder="Search Here..." value=""><button type="submit" aria-label="search submit" class="thm-btn"><span><i class="paroti-icon-magnifying-glass"></i></span></button></form>
               <div class="mc-response">
                  <!---->
               </div>
            </div>
         </div>
      </div>
      <!--]-->
   </div>
</div>
</div>
</div>
<div id="teleports"></div>
<div onclick="scrollToTop()" id="scrollToTopBtn">
    <a class="scroll-to-target scroll-to-top animated fadeInUp">
        <i class="fa fa-angle-up"></i>
    </a>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script>

    window.addEventListener("load", function () {
        // Set a delay before hiding the preloader and showing the main content
        setTimeout(function () {
            // Hide the preloader
            const preloader = document.getElementById("preloader");
            if (preloader) {
                preloader.style.display = "none";
            }

            // Show the main content
            const mainContent = document.getElementById("main");
            if (mainContent) {
                mainContent.style.display = "block";
            }
        }, 100); // Delay of 100ms
    });



    // Get the button
let scrollToTopBtn = document.getElementById("scrollToTopBtn");

// Show the button when the user scrolls down 100px from the top
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        scrollToTopBtn.style.display = "block"; // Show button
    } else {
        scrollToTopBtn.style.display = "none"; // Hide button
    }
}

// When the user clicks on the button, scroll to the top
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth" // Smooth scroll effect
    });
}

    const lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });

    const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // Enable autoplay
    autoplay: {
        delay: 5000, // Autoplay delay in milliseconds
        disableOnInteraction: false, // Prevent autoplay from pausing on interaction
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true, // Enable pagination dots to be clickable
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Enable adaptive height
    autoHeight: true,
    // Ensure Swiper allows interaction with slide content
    slideToClickedSlide: true,
    preventInteractionOnTransition: false
});


</script>

<script>

const swiper2 = new Swiper('.swiper2', {
// Optional parameters
direction: 'horizontal',
loop: true,

// If we need pagination
pagination: {
el: '.swiper-pagination',
},

// Navigation arrows
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},

slidesPerView: 2,
spaceBetween: 20,

breakpoints: {
    // when window width is >= 320px
    320: {
    slidesPerView: 1,
    },
    // when window width is >= 480px
    480: {
    slidesPerView: 1,
    },
    // when window width is >= 640px
    640: {
    slidesPerView: 1,
    },
    840: {
    slidesPerView: 1,
    }
}

});

const swiper3 = new Swiper('.swiper3', {
// Optional parameters
direction: 'horizontal',
loop: true,

// If we need pagination
pagination: {
el: '.swiper-pagination',
},

// Navigation arrows
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
slidesPerView: 1,
spaceBetween: 10,
autoplay: {
delay: 5000,
},
// Responsive breakpoints
breakpoints: {
// when window width is >= 320px
320: {
   slidesPerView: 1,
   spaceBetween: 20
},
// when window width is >= 480px
480: {
   slidesPerView: 2,
   spaceBetween: 30
},
// when window width is >= 640px
640: {
   slidesPerView: 4,
   spaceBetween: 40
},
840: {
   slidesPerView: 5,
   spaceBetween: 40
}

}
});

const swiper4 = new Swiper('.swiper4', {
// Optional parameters
direction: 'horizontal',
loop: true,

// If we need pagination
pagination: {
el: '.swiper-pagination',
},

// Navigation arrows
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
slidesPerView: 1,
spaceBetween: 10,
autoplay: {
delay: 5000,
},
// Responsive breakpoints
breakpoints: {
// when window width is >= 320px
320: {
   slidesPerView: 2,
   spaceBetween: 20
},
// when window width is >= 480px
480: {
   slidesPerView: 3,
   spaceBetween: 30
},
// when window width is >= 640px
640: {
   slidesPerView: 4,
   spaceBetween: 40
},
840: {
   slidesPerView: 5,
   spaceBetween: 40
}
}
});

function openNav(){
 let navCon =  document.getElementById("mobile-nav__wrapper");
 navCon.classList.toggle("expanded");
}

</script>
<script src="{{asset('libs/toastr/toastr.js')}}"></script>




@stack('scripts')
</html>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <link rel="icon" type="image/x-icon" href="{{asset('images/logo-icon.png')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
        <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.helper.ie8.js"></script><![endif]-->
        @vite(['resources/css/app.css', 'resources/css/style.css'])
        <link rel="stylesheet" href="_nuxt/entry.Cnz8qrmP.css">
        <link rel="stylesheet" href="_nuxt/swiper-vue.C8kddlLw.css">
        <link rel="stylesheet" href="_nuxt/index.CIolG9YW.css">
        <link rel="stylesheet" href="_nuxt/SearchPopup.0PP6UZ_v.css">


        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div id="__nuxt">
            <div>
               <!--<div id="preloader"  class="preloader">
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
               </div>-->
               <div id="main">
                  <div>
                     <!--[-->
                     <div>
                        <header class="main-header">
                           <div class="topbar">
                              <div class="container-fluid">
                                 <div class="topbar__inner">
                                    <ul class="list-unstyled topbar__info">
                                       <li><i class="fa fa-map"></i><a href="#">N9. Delta state</a></li>
                                       <li><i class="fa fa-envelope-open"></i><a href="mailto:info@kingateketomfoundation.org">info@kingateketomfoundation.org</a></li>
                                       <li><i class="fa fa-mobile"></i><a href="tel:+234990099900">+234990099900</a></li>
                                    </ul>
                                    <div class="topbar__social">
                                        <a href="/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.facebook.com/kat.foundation1?mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a>
                                        <a href="/"><i class="fab fa-pinterest"></i></a>
                                        <a href="https://www.instagram.com/katfoundation2024/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <ul class="list-unstyled topbar__links">
                                       <!---<li><a href="#">Login</a></li>
                                       <li><a href="#">Register</a></li>-->
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <nav class="main-menu sticky-header">
                              <div class="container-fluid">
                                 <a aria-current="page" href="index.html" class="router-link-active router-link-exact-active main-header__logo">
                                    <img src="{{asset('images/logo.png')}}" width="250" height="49" alt></a>
                                 <ul class="main-menu__list">
                                    <!--[-->
                                    <li class="dropdown">
                                       <a aria-current="page" href="{{route('home')}}" class="router-link-active router-link-exact-active">Home</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="events.html" class="">About Us</a>
                                     </li>

                                    <li class="dropdown">
                                       <a href="events.html" class="">Events</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="donations.html" class="">Donations</a>
                                     </li>

                                    <li class="">
                                       <a href="contact.html" class="">Contact</a><!---->
                                    </li>
                                    <!--]-->
                                 </ul>
                                 <div class="main-menu__right">
                                    <div class="main-menu__cta">
                                       <div class="main-menu__cta__icon"><i class="paroti-icon-volunteer"></i></div>
                                       <div class="main-menu__cta__text"><span>Join us now</span><a href="contact.html" class="">Become a Volunteer</a></div>
                                    </div>
                                    <a href="donations-details.html" class="thm-btn thm-btn--two">
                                        <span>Donate Now</span>
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="main-header__btn search-toggler">
                                        <i class="paroti-icon-magnifying-glass"></i>
                                    </a>

                                    <a href="#" class="main-header__toggler mobile-nav__toggler">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>

                                 </div>
                              </div>
                           </nav>
                        </header>

            {{ $slot }}

        <footer class="site-footer" style="background-image:url(_nuxt/footer-bg-1-1.DQ6J-Ydo.jpg);" data-v-637754db>
            <div class="site-footer__top" data-v-637754db>
               <div class="container" data-v-637754db>
                  <div class="row" data-v-637754db>
                     <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms" data-v-637754db>
                        <div class="site-footer__widget site-footer__widget__about" data-v-637754db>
                           <a aria-current="page" href="index.html" class="router-link-active router-link-exact-active site-footer__widget__logo" data-v-637754db>
                            <img src="{{asset('images/logo-white.png')}}" width="127" height="49" alt="Logo" data-v-637754db></a>
                           <p class="site-footer__widget__text" data-v-637754db>N9 Delta State</p>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms" data-v-637754db>
                        <div class="site-footer__widget" data-v-637754db>
                           <h3 class="site-footer__widget__title" data-v-637754db>Links</h3>
                           <ul class="list-unstyled site-footer__widget__links" data-v-637754db>
                              <li data-v-637754db><a href="{{route('home')}}" class="" data-v-637754db>Home</a></li>
                              <li data-v-637754db><a href="about.html" class="" data-v-637754db>About us</a></li>
                              <li data-v-637754db><a href="contact.html" class="" data-v-637754db>Contact Us</a></li>
                              <li data-v-637754db><a href="donation.html" class="" data-v-637754db>Donations</a></li>
                              <li data-v-637754db><a href="events.html" class="" data-v-637754db>Events</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms" data-v-637754db>
                        <div class="non-profile-container site-footer__widget" data-v-637754db>
                           <h3 class="site-footer__widget__title" data-v-637754db>Non Profit</h3>
                           <ul class="list-unstyled site-footer__widget__links" data-v-637754db>
                              <li data-v-637754db><a href="donations-details.html" class="" data-v-637754db>Differently abled kids</a></li>
                              <li data-v-637754db><a href="donations-details.html" class="" data-v-637754db>Help child cancer</a></li>
                              <li data-v-637754db><a href="donations-details.html" class="" data-v-637754db>Clean pure water</a></li>
                              <li data-v-637754db><a href="donations-details.html" class="" data-v-637754db>Give them education</a></li>
                              <li data-v-637754db><a href="donations-details.html" class="" data-v-637754db>Start a fundraising</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms" data-v-637754db>
                        <div class="site-footer__widget" data-v-637754db>
                           <h3 class="site-footer__widget__title" data-v-637754db>Contact</h3>
                           <ul class="list-unstyled site-footer__widget__contact" data-v-637754db>
                              <li data-v-637754db><i class="fa fa-envelope-open" data-v-637754db></i><a href="mailto:needhelp@company.com" data-v-637754db>needhelp@company.com</a></li>
                              <li data-v-637754db><i class="fa fa-mobile" data-v-637754db></i><a href="tel:+234990099900" data-v-637754db>+234990099900</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms" data-v-637754db>
                        <div class="site-footer__widget site-footer__widget__cta" data-v-637754db>
                           <h3 class="site-footer__widget__title" data-v-637754db><span data-v-637754db>Raise Money and help them</span></h3>
                           <a href="donations-details.html" class="thm-btn thm-btn--two thm-btn--light" data-v-637754db><span data-v-637754db>Donate Now</span><i class="fa fa-heart" data-v-637754db></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="site-footer__bottom" data-v-637754db>
               <div class="container" data-v-637754db>
                  <div class="site-footer__bottom__inner" data-v-637754db>
                     <p class="site-footer__bottom__text" data-v-637754db> © Copyright <span class="dynamic-year" data-v-637754db>2024</span> by Paroti NuxtJS Template. </p>
                     <div class="site-footer__social" data-v-637754db><a href="#" data-v-637754db><i class="fab fa-twitter" data-v-637754db></i></a><a href="#" data-v-637754db><i class="fab fa-facebook" data-v-637754db></i></a><a href="#" data-v-637754db><i class="fab fa-pinterest" data-v-637754db></i></a><a href="#" data-v-637754db><i class="fab fa-instagram" data-v-637754db></i></a></div>
                  </div>
               </div>
            </div>
            <!---->
         </footer>
         <div class="mobile-nav__wrapper" data-v-4d305a09>
            <div class="mobile-nav__overlay mobile-nav__toggler" data-v-4d305a09></div>
            <div class="mobile-nav__content" data-v-4d305a09>
               <a href="#" class="mobile-nav__close mobile-nav__toggler" data-v-4d305a09><span data-v-4d305a09></span><span data-v-4d305a09></span></a>
               <div class="logo-box" data-v-4d305a09><a aria-current="page" href="index.html" class="router-link-active router-link-exact-active" aria-label="logo image" data-v-4d305a09>
                <img src="{{asset('images/logo-white.png')}}" width="250" height="49" alt="KAT Foundation" data-v-4d305a09></a></div>
               <div class="mobile-nav__container" data-v-4d305a09>
                  <ul class="mobile-menu__list" data-v-4d305a09>
                     <!--[-->
                     <li class="menu-item-has-children" data-v-4d305a09>
                        <a href="#" data-v-4d305a09>Home <button data-v-4d305a09><i class="fa fa-angle-down" data-v-4d305a09></i></button></a>
                        <ul class="sub-menu" data-v-4d305a09>
                           <!--[-->
                           <li data-v-4d305a09>
                              <a aria-current="page" href="index.html" class="router-link-active router-link-exact-active" data-v-4d305a09>
                                 Home 01 <!---->
                              </a>
                              <!---->
                           </li>
                           <li data-v-4d305a09>
                              <a href="index-2.html" class="" data-v-4d305a09>
                                 Home 02 <!---->
                              </a>
                              <!---->
                           </li>
                           <li data-v-4d305a09>
                              <a href="index-3.html" class="" data-v-4d305a09>
                                 Home 03 <!---->
                              </a>
                              <!---->
                           </li>
                           <li data-v-4d305a09>
                              <a aria-current="page" href="index.html#" class="router-link-active router-link-exact-active" data-v-4d305a09>Header Styles <button data-v-4d305a09><i class="fa fa-angle-down" data-v-4d305a09></i></button></a>
                              <ul class="sub-menu" data-v-4d305a09>
                                 <!--[-->
                                 <li data-v-4d305a09><a aria-current="page" href="index.html" class="router-link-active router-link-exact-active" data-v-4d305a09>Header 01</a></li>
                                 <li data-v-4d305a09><a href="index-2.html" class="" data-v-4d305a09>Header 02</a></li>
                                 <li data-v-4d305a09><a href="index-3.html" class="" data-v-4d305a09>Header 03</a></li>
                                 <!--]-->
                              </ul>
                           </li>
                           <!--]-->
                        </ul>
                     </li>
                     <li class="menu-item-has-children" data-v-4d305a09>
                        <a href="#" data-v-4d305a09>Pages <button data-v-4d305a09><i class="fa fa-angle-down" data-v-4d305a09></i></button></a>
                        <ul class="sub-menu" data-v-4d305a09>
                           <!--[-->
                           <li data-v-4d305a09>
                              <a href="about.html" class="" data-v-4d305a09>
                                 About <!---->
                              </a>
                              <!---->
                           </li>
                           <li data-v-4d305a09>
                              <a href="volunteers.html" class="" data-v-4d305a09>
                                 Our volunteers <!---->
                              </a>
                              <!---->
                           </li>
                           <!--]-->
                        </ul>
                     </li>
                     <li class="menu-item-has-children" data-v-4d305a09>
                        <a href="#" data-v-4d305a09>Donations <button data-v-4d305a09><i class="fa fa-angle-down" data-v-4d305a09></i></button></a>
                        <ul class="sub-menu" data-v-4d305a09>
                           <!--[-->
                           <li data-v-4d305a09>
                              <a href="donations.html" class="" data-v-4d305a09>
                                 Donations <!---->
                              </a>
                              <!---->
                           </li>
                           <li data-v-4d305a09>
                              <a href="donations-details.html" class="" data-v-4d305a09>
                                 Donations Details <!---->
                              </a>
                              <!---->
                           </li>
                           <!--]-->
                        </ul>
                     </li>
                     <li class="menu-item-has-children" data-v-4d305a09>
                        <a href="#" data-v-4d305a09>Events <button data-v-4d305a09><i class="fa fa-angle-down" data-v-4d305a09></i></button></a>
                        <ul class="sub-menu" data-v-4d305a09>
                           <!--[-->
                           <li data-v-4d305a09>
                              <a href="events.html" class="" data-v-4d305a09>
                                 Events <!---->
                              </a>
                              <!---->
                           </li>
                           <li data-v-4d305a09>
                              <a href="events-details.html" class="" data-v-4d305a09>
                                 Events Details <!---->
                              </a>
                              <!---->
                           </li>
                           <!--]-->
                        </ul>
                     </li>
                     <li class="menu-item-has-children" data-v-4d305a09>
                        <a href="#" data-v-4d305a09>Blogs <button data-v-4d305a09><i class="fa fa-angle-down" data-v-4d305a09></i></button></a>
                        <ul class="sub-menu" data-v-4d305a09>
                           <!--[-->
                           <li data-v-4d305a09>
                              <a href="blogs.html" class="" data-v-4d305a09>
                                 Blogs <!---->
                              </a>
                              <!---->
                           </li>
                           <li data-v-4d305a09>
                              <a href="blog-details.html" class="" data-v-4d305a09>
                                 Blog Details <!---->
                              </a>
                              <!---->
                           </li>
                           <!--]-->
                        </ul>
                     </li>
                     <li class="" data-v-4d305a09>
                        <a href="#" data-v-4d305a09>
                           Contact <!---->
                        </a>
                        <!---->
                     </li>
                     <!--]-->
                  </ul>
               </div>
               <ul class="mobile-nav__contact list-unstyled" data-v-4d305a09>
                  <li data-v-4d305a09><i class="fa fa-phone" data-v-4d305a09></i><a href="tel:+8898006802" data-v-4d305a09>+ 88 ( 9800 ) 6802</a></li>
                  <li data-v-4d305a09><i class="fa fa-envelope" data-v-4d305a09></i><a href="mailto:needhelp@company.com" data-v-4d305a09>needhelp@company.com</a></li>
                  <li data-v-4d305a09><i class="fa fa-map-marker-alt" data-v-4d305a09></i> 88 Broklyn Golden Road Street <br data-v-4d305a09> New York. USA </li>
               </ul>
               <ul class="mobile-nav__social" data-v-4d305a09>
                  <li data-v-4d305a09><a href="#" data-v-4d305a09><i class="fab fa-twitter" data-v-4d305a09></i></a></li>
                  <li data-v-4d305a09><a href="#" data-v-4d305a09><i class="fab fa-facebook-f" data-v-4d305a09></i></a></li>
                  <li data-v-4d305a09><a href="#" data-v-4d305a09><i class="fab fa-pinterest-p" data-v-4d305a09></i></a></li>
                  <li data-v-4d305a09><a href="#" data-v-4d305a09><i class="fab fa-instagram" data-v-4d305a09></i></a></li>
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
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->
<script>

window.addEventListener('load', function () {
    // Select the preloader element
    const preloader = document.getElementById('preloader');
    const main = document.getElementById('main');

    // Hide or remove the preloader once the page is loaded
    if (preloader) {
        console.log('preloader');
document.querySelector('#preloader').style.display = 'none!important';
        console.log('preloader2');
        main.style.display =  'flex';
    }
});

const swiper = new Swiper('.swiper', {
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

autoplay: {
delay: 5000,
},
});


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



</script>
@stack('scripts')
<!-- Mirrored from paroti-nuxtjs.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Sep 2024 21:28:47 GMT -->
</html>


<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startPush('styles'); ?>
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
        height: 408px;
        width: auto;
    }
    .pre-amnesty .swiper-slide {
    display: none;
    }

    .pre-amnesty .swiper-slide-active {
    display: block;
    }

    .media-flex-container {
        display: flex;
        justify-content: space-between; /* Distributes space between the items */
        gap: 20px; /* Adds space between columns */
        max-width: 1200px; /* Optional: Set a max width for the layout */
        margin: 0 auto; /* Center the container */
    }

    .media-item {
        flex: 1; /* Makes all media items take equal space */
        max-width: 23%; /* Each item takes about 1/4 of the container, accounting for gaps */
    }

    .media-item video,
    .media-item img {
        width: 100%;
        height: 400px; /* Set height for video and images */
        object-fit: cover; /* Ensures the media scales proportionally */
    }
    .events-card__title a{
        font-size: 14px!important;
        line-height: 0!important;
    }
</style>
<?php $__env->stopPush(); ?>
    <section class="page-header" style="background-image: url(<?php echo e(asset('_nuxt/page-header-1-1.BAD7W5SW.jpg')); ?>); padding-bottom: 5.375rem; padding-top: 5.375rem;">
        <div class="container">
           <ul class="list-unstyled breadcrumb-one">
              <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
              <li><span>Events</span></li>
           </ul>
           <h2 class="page-header__title">Visit To Schools In Niger Delta Region,
            Rivers State</h2>
        </div>
    </section>

    <section class="my-container sec-pad-top sec-pad-bottom about-one">
        <div class="about-one__shape-1 float-bob-y"><img src="<?php echo e(asset('_nuxt/about-1-1.BzIvtQQI.png')); ?>" alt=""></div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6" style="overflow: hidden;">
                            <div class="edu-event-amnesty" style="width:100%">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/1.jpg')); ?>" alt="Image 1">
                                    </div>
                                    <div  class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/2.jpg')); ?>" alt="Image 2">
                                    </div>
                                    <div  class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/3.jpg')); ?>" alt="Image 3">
                                    </div>

                                    <div  class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/4.jpg')); ?>" alt="Image 3">
                                    </div>


                                    <div class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/5.jpg')); ?>" alt="Image 5">
                                    </div>

                                    <div class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/6.jpg')); ?>" alt="Image 6">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/7.jpg')); ?>" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/8.jpg')); ?>" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/9.jpg')); ?>" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/10.jpg')); ?>" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/11.jpg')); ?>" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/12.jpg')); ?>" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/13.jpg')); ?>" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/14.jpg')); ?>" alt="Image 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/15.jpg')); ?>" alt="Image 7">
                                    </div><div class="swiper-slide">
                                        <img class="my-img" src="<?php echo e(asset('images/edu_program/16.jpg')); ?>" alt="Image 7">
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

    <?php $__env->startPush('scripts'); ?>
    <script>
        const toggleBtn = document.getElementById('toggle-content');
    const content = document.getElementById('dropdown-content');

       var eduEvent = new Swiper('.edu-event-amnesty', {
         // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 1500, // Change this to the desired delay in milliseconds
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

     </script>
    <?php $__env->stopPush(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php /**PATH /home/pemsaknw/kingateketomfoundation.org/resources/views/events/previous/two-school-visit-2024.blade.php ENDPATH**/ ?>
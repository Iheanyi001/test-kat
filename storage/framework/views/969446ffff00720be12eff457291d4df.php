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


    .swiper-slide {
        display: flex;
        justify-content: center; /* Center the image horizontally */
        align-items: center;    /* Center the image vertically */
    }

    .swiper-slide img {
        width: 100%;        /* Ensures the image takes the full width of the container */
        height: 400px;      /* Set a fixed height (adjust as needed) */
        object-fit: cover;  /* Ensures the image covers the container without distortion */
        object-position: center; /* Center the image within the container */
    }

    </style>
    <?php $__env->stopPush(); ?>
    <section class="page-header" style="background-image: url(<?php echo e(asset('_nuxt/page-header-1-1.BAD7W5SW.jpg')); ?>); padding-bottom: 5.375rem; padding-top: 5.375rem;">
        <div class="container">
           <ul class="list-unstyled breadcrumb-one">
              <li><a href="/">Home</a></li>
              <li><span>Support</span></li>
           </ul>
           <h2 class="page-header__title">Educational Support</h2>
        </div>
    </section>

    <section class="sec-pad-top sec-pad-bottom about-one">
        <div class="about-one__shape-1 float-bob-y"><img src="<?php echo e(asset('_nuxt/about-1-1.BzIvtQQI.png')); ?>" alt=""></div>
        <div class="about-one__shape-2 float-bob-x"><img src="<?php echo e(asset('_nuxt/about-1-2.D_jGqYhl.png')); ?>" alt=""></div>
        <div class="container">
           <div class="row">

              <div class="col-lg-6">
                 <div class="about-one__content" style="padding-left:0">
                    <div class="sec-title">

                       <h2 class="sec-title__title" style="font-size: 1.5rem;">Educational Support Outreach</h2>
                    </div>

                    <p class="about-one__text">
                        <h3><strong>Description:</strong></h3><br/>
                        The King Ateke Tom Foundation carried out an educational outreach in the Niger Delta region, specifically in Rivers State. On April 26th, two schools were visited, followed by two additional schools on April 27th. The foundation distributed educational materials, including textbooks, notebooks, writing tools, and backpacks, to over 500 students. Additionally, motivational talks were delivered by foundation members to encourage students to remain focused and dedicated to their education.
                    </p>
                    <p>
                        <h3><strong>Impact:</strong></h3><br/>
                        This initiative provided critical learning resources, significantly boosting student morale and participation. Teachers observed a noticeable increase in student enthusiasm and engagement following the outreach. Furthermore, the foundation awarded full scholarships to 20 pupils from the four schools visited, underscoring its dedication to supporting education and fostering community development in the region.
                    </p>

                 </div>
              </div>

            <div class="col-lg-6" style="overflow: hidden;">
                    <div class="pre-amnesty" style="width:100%">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/1.jpg')); ?>" alt="Image 1">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/2.jpg')); ?>" alt="Image 2">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/3.jpg')); ?>" alt="Image 3">
                            </div>

                            <div class="swiper-slide">
                              <img src="<?php echo e(asset('images/edu_1/4.jpg')); ?>" alt="Image 3">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/5.jpg')); ?>" alt="Image 5">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/6.jpg')); ?>" alt="Image 6">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/7.jpg')); ?>" alt="Image 7">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/8.jpg')); ?>" alt="Image 7">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/9.jpg')); ?>" alt="Image 7">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/10.jpg')); ?>" alt="Image 7">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/11.jpg')); ?>" alt="Image 7">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/12.jpg')); ?>" alt="Image 7">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/13.jpg')); ?>" alt="Image 7">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/14.jpg')); ?>" alt="Image 7">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/15.jpg')); ?>" alt="Image 7">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/16.jpg')); ?>" alt="Image 7">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/edu_1/17.jpg')); ?>" alt="Image 7">
                            </div>

                        </div>
                    </div>
                </div>
           </div>

        </div>
    </section>


     <?php $__env->startPush('scripts'); ?>
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
<?php /**PATH /home/pemsaknw/kingateketomfoundation.org/resources/views/support/education.blade.php ENDPATH**/ ?>
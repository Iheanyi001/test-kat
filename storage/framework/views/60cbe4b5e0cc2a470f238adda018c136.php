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


        .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        }

    </style>
    <?php $__env->stopPush(); ?>
    <section class="page-header" style="background-image: url(<?php echo e(asset('_nuxt/page-header-1-1.BAD7W5SW.jpg')); ?>); padding-bottom: 5.375rem; padding-top: 5.375rem;">
        <div class="container">
           <ul class="list-unstyled breadcrumb-one">
              <li><a href="/">Home</a></li>
              <li><span>Support</span></li>
           </ul>
           <h2 class="page-header__title">Medical Outreach</h2>
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

                       <h2 class="sec-title__title" style="font-size: 1.5rem;">Medical Outreach</h2>
                    </div>

                    <p class="about-one__text">
                        At the King Ateke Tom Foundation, we are committed to bridging the gap in healthcare access for underserved communities. Through our medical support programs, we provide essential healthcare services, free medications, and life-saving treatments. Our mobile clinics and outreach initiatives bring doctors and health professionals directly to those in need, offering both critical care and preventive health education. We believe in empowering individuals with the knowledge to take control of their well-being, ensuring that everyone, regardless of their circumstances, has access to the care they deserve
                    </p>

                 </div>
              </div>

            <div class="col-lg-6" style="overflow: hidden; height: 300px">
                    <div class="pre-amnesty" style="width:100%">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/med_program/img1.jpg')); ?>" alt="Image 1">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/med_program/img2.jpg')); ?>" alt="Image 2">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/med_program/img3.jpg')); ?>" alt="Image 3">
                            </div>

                            <div class="swiper-slide">
                              <img src="<?php echo e(asset('images/med_program/img4.jpg')); ?>" alt="Image 3">
                          </div>


                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('images/med_program/img5.jpg')); ?>" alt="Image 5">
                                </div>

                                <div class="swiper-slide">
                                <img src="<?php echo e(asset('images/med_program/img6.jpeg')); ?>" alt="Image 6">
                            </div>
                            <div class="swiper-slide">
                            <img src="<?php echo e(asset('images/med_program/img7.jpg')); ?>" alt="Image 7">
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
<?php /**PATH /home/pemsaknw/kingateketomfoundation.org/resources/views/support/medical.blade.php ENDPATH**/ ?>
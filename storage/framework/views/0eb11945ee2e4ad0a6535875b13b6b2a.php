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
    }
    .show {
        max-height: 400px;
        padding: 10px 20px;
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
        justify-content: space-between;
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }
    .media-item {
        flex: 1;
        max-width: 23%;
    }
    .media-item video,
    .media-item img {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }
    .events-card__title a{
        font-size: 14px!important;
        line-height: 0!important;
    }
    </style>
    <?php $__env->stopPush(); ?>

    <!-- Page Header -->
    <section class="page-header" style="background-image: url(<?php echo e(asset('_nuxt/page-header-1-1.BAD7W5SW.jpg')); ?>); padding-bottom: 5.375rem; padding-top: 5.375rem;">
        <div class="container">
           <ul class="list-unstyled breadcrumb-one">
              <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
              <li><span>Events</span></li>
           </ul>
           <h2 class="page-header__title">Events</h2>
        </div>
    </section>

    <!-- Previous Events -->
    <section class="my-container sec-pad-top sec-pad-bottom" style="padding-bottom:0!important">
        <div class="sec-title text-center">
            <h2 class="sec-title__title">Previous Events</h2>
         </div>
        <div class="container">
           <div class="row gutter-y-30">
              <div class="col-md-12 col-lg-4">
                 <div class="events-card">
                    <div class="events-card__image">
                        <img style="height: 426px;" src="<?php echo e(asset('images/bese/7.jpg')); ?>" alt="">
                        <img style="height: 426px;" src="<?php echo e(asset('images/bese/7.jpg')); ?>" class="events-card__image--hover" alt="">
                    </div>
                    <div class="events-card__content">
                       <div class="events-card__date">28 Dec. 2024</div>
                       <ul class="events-card__meta list-unstyled">
                          <li><i class="fa fa-clock"></i><a href="#">10:00 am</a></li>
                          <li><i class="fa fa-map-marker-alt"></i><a href="#">Rivers State</a></li>
                       </ul>
                       <h3 class="events-card__title">
                           <a href="<?php echo e(route('events.previous.bese.2024')); ?>" class="">
                               King Ateke Tom Foundation Annual Bese Puko Children’s Fiesta
                           </a>
                       </h3>
                    </div>
                 </div>
              </div>
              <div class="col-md-12 col-lg-4">
                 <div class="events-card">
                    <div class="events-card__image">
                        <img style="height: 426px;" src="<?php echo e(asset('images/edu_program/3.jpg')); ?>" alt="">
                        <img style="height: 426px;" src="<?php echo e(asset('images/edu_program/3.jpg')); ?>" class="events-card__image--hover" alt="">
                    </div>
                    <div class="events-card__content">
                       <div class="events-card__date">April 26th - April 27th</div>
                       <ul class="events-card__meta list-unstyled">
                          <li><i class="fa fa-clock"></i><a href="#">10:00 am</a></li>
                          <li><i class="fa fa-map-marker-alt"></i><a href="#">Niger Delta Region</a></li>
                       </ul>
                       <h3 class="events-card__title">
                           <a href="<?php echo e(route('events.previous.two-school-visit-2024')); ?>" class="">
                               Visit To Two Schools In Niger Delta Region
                           </a>
                       </h3>
                    </div>
                 </div>
              </div>
              <div class="col-md-12 col-lg-4">
                 <div class="events-card">
                    <div class="events-card__image">
                        <img style="height: 426px;" src="<?php echo e(asset('images/courtesy_visit/2.jpg')); ?>" alt="">
                        <img style="height: 426px;" src="<?php echo e(asset('images/courtesy_visit/2.jpg')); ?>" class="events-card__image--hover" alt="">
                    </div>
                    <div class="events-card__content">
                       <div class="events-card__date">2024</div>
                       <ul class="events-card__meta list-unstyled">
                          <li><i class="fa fa-clock"></i><a href="#">8:00 pm</a></li>
                          <li><i class="fa fa-map-marker-alt"></i><a href="#">Niger Delta States</a></li>
                       </ul>
                       <h3 class="events-card__title">
                           <a href="<?php echo e(route('events.previous.courtesy-visit-2024')); ?>" class="">
                               Courtesy visit to HRH King Dr. Ateke Michael Tom, Chairman Board of Trustees KAT-FOUNDATION
                           </a>
                       </h3>
                    </div>
                 </div>
              </div>
           </div>
        </div>
    </section>

    <!-- Upcoming Events / 2025 Program Schedule -->
    <section class="my-container sec-pad-top sec-pad-bottom">
        <div class="sec-title text-center mb-4" style="padding-bottom:20px">
            <h2 class="sec-title__title">Upcoming Events</h2>
            <p class="h3 text-black">2025 Program Schedule</p>
        </div>
        <div class="min-vh-100 pb-5">
            <div class="container">

                <div class="row">
                    <!-- January - March -->
                    <div class="col-md-6 mb-4">
                        <div class="card text-white" style="background: linear-gradient(to right, #dc143c, #ff7f50);">
                            <div class="card-body">
                                <h2 class="card-title">January - March</h2>
                                <ul class="list-unstyled">
                                    <li>
                                        <h3 class="h5">New Year Outreach & Reflection Session (January 5)</h3>
                                        <p class="fst-italic">Theme: "Setting the Pace for Impact"</p>
                                        <p>Activities: Staff reflection meeting, strategy alignment, and goal setting.</p>
                                    </li>
                                    <li>
                                        <h3 class="h5">Free Medical Check-up & Health Awareness Campaign (February)</h3>
                                        <p>Focus: General health screenings, malaria awareness, and maternal health education.</p>
                                    </li>
                                    <li>
                                        <h3 class="h5">Green Rivers Initiative Tree-Planting Campaign (March)</h3>
                                        <p>Goal: Plant 1,000 trees in Okochiri Kingdom and surrounding areas.</p>
                                    </li>
                                    <li>
                                        <h3 class="h5">Educational Support Program Launch (March)</h3>
                                        <p>Focus: Scholarship distribution, provision of learning materials, and mentorship for underprivileged students.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- April - June -->
                    <div class="col-md-6 mb-4">
                        <div class="card text-white" style="background: linear-gradient(to right, #0071bc, #28a745);">
                            <div class="card-body">
                                <h2 class="card-title">April - June</h2>
                                <ul class="list-unstyled">
                                    <li>
                                        <h3 class="h5">Youth Digital Skills Bootcamp (April)</h3>
                                        <p>Focus: Basic IT training, introduction to coding, and digital entrepreneurship.</p>
                                    </li>
                                    <li>
                                        <h3 class="h5">Food Drive & Agricultural Support Program (May)</h3>
                                        <p>Focus: Distribution of food items to vulnerable families and training on sustainable farming techniques.</p>
                                    </li>
                                    <li>
                                        <h3 class="h5">Women Empowerment Workshops (June)</h3>
                                        <p>Programs: Bead-making classes, income-generating craft workshops, and entrepreneurship training.</p>
                                    </li>
                                    <li>
                                        <h3 class="h5">Back-to-School Educational Support Drive (June)</h3>
                                        <p>Focus: Distribution of school supplies, uniforms, and support for educational fees for disadvantaged children.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- July - September -->
                    <div class="col-md-6 mb-4">
                        <div class="card text-white" style="background: linear-gradient(to right, #6a0dad, #4b0082);">
                            <div class="card-body">
                                <h2 class="card-title">July - September</h2>
                                <ul class="list-unstyled">
                                    <li>
                                        <h3 class="h5">Annual Youth Mentorship Summit (July)</h3>
                                        <p class="fst-italic">Theme: "Building Leaders of Tomorrow"</p>
                                        <p>Activities: Leadership talks, career guidance, and networking sessions.</p>
                                    </li>
                                    <li>
                                        <h3 class="h5">Community Renovation Project (August)</h3>
                                        <p>Focus: Renovation of community centers and homes for the elderly and vulnerable families.</p>
                                    </li>
                                    <li>
                                        <h3 class="h5">Waste Management & Coastal Conservation Workshop (September)</h3>
                                        <p>Activities: Clean-up drives, recycling awareness, and sustainable waste management training.</p>
                                    </li>
                                    <li>
                                        <h3 class="h5">Literacy Enhancement Program (September)</h3>
                                        <p>Focus: Adult literacy classes and after-school tutoring programs for children.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- October - December -->
                    <div class="col-md-6 mb-4">
                        <div class="card text-white" style="background: linear-gradient(to right, #ff69b4, #ff0000);">
                            <div class="card-body">
                                <h2 class="card-title">October - December</h2>
                                <ul class="list-unstyled">
                                    <li>
                                        <h3 class="h5">King Ateke Tom Annual Bese Puko Children's Fiesta (December)</h3>
                                        <p class="fst-italic">Theme: "The Gift of Togetherness"</p>
                                        <p>Activities: Christmas party for less privileged children, gift distribution, cultural performances.</p>
                                    </li>
                                    <li>
                                        <h3 class="h5">Emergency Relief Program (Ongoing)</h3>
                                        <p>Focus: Disaster response support, especially during flood seasons.</p>
                                    </li>
                                    <li>
                                        <h3 class="h5">End-of-Year Review & Appreciation Ceremony (December 29)</h3>
                                        <p>Focus: Reflection on achievements, staff and volunteer recognition, strategic planning for 2026.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Ongoing Initiatives -->
                <div class="mt-5 bg-warning p-4 rounded shadow">
                    <h2 class="text-center" style="color: #144047;">Ongoing Initiatives (All Year Round)</h2>
                    <ul class="list-unstyled" style="color: #144047; font-size: 1.125rem;">
                        <li>Monthly Support for Orphanages</li>
                        <li>Regular Free Medical Outreach</li>
                        <li>Widows Empowerment Programs</li>
                        <li>Livestock Development Training & Pet Care Subscriptions</li>
                        <li>Advocacy Campaigns: Gender Equality, Anti-Drug Awareness, Climate Change Awareness</li>
                        <li>Continuous Educational Support: Scholarships, Mentorship, and Provision of Educational Materials</li>
                    </ul>
                    <p class="text-center fw-bold" style="color: #144047;">
                        Note: Dates are tentative and subject to adjustments based on logistical and funding considerations.
                    </p>
                </div>
            </div>
        </div>
    </section>
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
<?php /**PATH F:\downloads\acopy\resources\views/events.blade.php ENDPATH**/ ?>
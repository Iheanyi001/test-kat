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

        h1 {
            text-align: center;
            color: #4CAF50; /* Green color for the heading */
        }

        .content {
            margin: 20px 0;
            line-height: 1.6;
            color: #333;
        }

        .images-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Four equal columns */
            gap: 20px; /* Space between images */
        }

        .image-item {
            background-color: #fff; /* White background for images */
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .image-item img {
            width: 100%;
            height: 200px; /* Set a fixed height */
            object-fit: cover; /* Ensure the image covers the space */
        }

        .caption {
            padding: 10px;
            text-align: center;
            font-size: 14px;
            color: #555; /* Darker grey for captions */
        }

    </style>
    <?php $__env->stopPush(); ?>
    <section class="page-header" style="background-image: url(<?php echo e(asset('_nuxt/page-header-1-1.BAD7W5SW.jpg')); ?>); padding-bottom: 5.375rem; padding-top: 5.375rem;">
        <div class="container">
           <ul class="list-unstyled breadcrumb-one">
              <li><a href="/">Home</a></li>
              <li><span>Support</span></li>
           </ul>
           <h2 class="page-header__title">Environmental Sustainability</h2>
        </div>
    </section>

    <section class="sec-pad-top sec-pad-bottom about-one">
        <div class="about-one__shape-1 float-bob-y"><img src="<?php echo e(asset('_nuxt/about-1-1.BzIvtQQI.png')); ?>" alt=""></div>
        <div class="about-one__shape-2 float-bob-x"><img src="<?php echo e(asset('_nuxt/about-1-2.D_jGqYhl.png')); ?>" alt=""></div>
        <div class="container">
           <div class="row">

            <div class="container">
                <h1>Environmental Sustainability</h1>
                <div class="content">
                    <p>The King Ateke Tom Foundation is dedicated to preserving the environment for future generations. Through reforestation projects, clean energy initiatives, and educational programs, we promote sustainable practices that protect natural resources. We support local farmers with eco-friendly farming techniques and advocate for waste reduction and recycling efforts within our communities. Our goal is to create a healthier, greener planet while empowering and educating individuals to adopt environmentally responsible lifestyles.</p>

                    <p>The King Ateke Tom Foundation believes in a proactive approach to environmental sustainability. Through reforestation, we can restore vibrant green space, reduce the greenhouse effect, and control soil runoffs as well as preserve wildlife for future generations. The best time is now.</p>
                </div>

                <div class="images-container">
                    <!-- Image 1 -->
                    <div class="image-item">
                        <img src="<?php echo e(asset('images/environment/8.jpg')); ?>" alt="Reforestation Project">
                        <div class="caption">Reforestation Project</div>
                    </div>
                    <!-- Image 2 -->
                    <div class="image-item">
                        <img src="<?php echo e(asset('images/environment/5.jpg')); ?>" alt="Clean Energy Initiative">
                        <div class="caption">Clean Energy Initiative</div>
                    </div>
                    <!-- Image 3 -->
                    <div class="image-item">
                        <img src="<?php echo e(asset('images/environment/9.jpg')); ?>" alt="Eco-Friendly Farming">
                        <div class="caption">Eco-Friendly Farming</div>
                    </div>
                    <!-- Image 4 -->
                    <div class="image-item">
                        <img src="<?php echo e(asset('images/environment/recycle.webp')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">Community Recycling Efforts</div>
                    </div>



                    <div class="image-item">
                        <img src="<?php echo e(asset('images/environment/new/1.jpg')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">Protect Our Rivers: This pollution highlights the urgency to take action. Join us in restoring our water ways and protecting our environment for us and our future generations</div>
                    </div>


                    <div class="image-item">
                        <img src="<?php echo e(asset('images/environment/new/2.jpg')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">Oil Spills, Broken Lives: Farmlands destroyed, futures at risk. Join us in restoring livelihoods and protecting our environment</div>
                    </div>

                    <div class="image-item">
                        <img src="<?php echo e(asset('images/environment/new/3.jpg')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">Bushfires Ravage Our Land: Destroying habitats, homes, and livelihoods. Let's work together to prevent and protect.</div>
                    </div>

                    <div class="image-item">
                        <img src="<?php echo e(asset('images/environment/new/4.jpg')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">Oil-Contaminated Waters: Once a source of life, now toxic and threatening aquatic ecosystems. Let's restore these waters and protect marine life</div>
                    </div>

                    <div class="image-item">
                        <img src="<?php echo e(asset('images/environment/new/5.jpg')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">Flooded Homes, Displaced Lives: Climate change and poor environmental practices leave communities vulnerable. Let's take action to build resilient, sustainable futures</div>
                    </div>

                    <div class="image-item">
                        <img src="<?php echo e(asset('images/environment/new/6.jpg')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">Cracked Earth, Dying Land: A stark reminder of drought and environmental degradation. It's time to heal our planet and safeguard our future.</div>
                    </div>

                    <div class="image-item">
                        <img src="<?php echo e(asset('images/environment/new/7.jpg')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">The Earth Weeps: Our planet is in distress from pollution, deforestation, and climate change. It's time to listen and take action to heal our world</div>
                    </div>


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


<?php /**PATH /home/pemsaknw/kingateketomfoundation.org/resources/views/support/environment.blade.php ENDPATH**/ ?>
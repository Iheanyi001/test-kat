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
           <h2 class="page-header__title">Courtesy visit to HRH King Dr. Ateke Michael Tom</h2>
        </div>
    </section>


<section class="my-container sec-pad-top sec-pad-bottom about-one">
    <div class="sec-title text-center">
        <h2 class="sec-title__title">An official courtesy visit to HRH King Dr. Ateke Michael Tom, Chairman Board of Trustees KAT-FOUNDATION</h2>
    </div>
    <div class="container">
            <div class="row">
               <div class="col-lg-12" style="overflow: hidden;">

                    <div class="media-flex-container" style="display: flex">
                        <!-- Video in the first column -->
                        <div class="media-item">
                            <video controls>
                                <source src="<?php echo e(asset('images/courtesy_visit/vid.mp4')); ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <!-- Images in the next three columns -->
                        <div class="media-item">
                            <img src="<?php echo e(asset('images/courtesy_visit/1.jpg')); ?>" alt="Courtesy Visit 1" />
                        </div>
                        <div class="media-item">
                            <img src="<?php echo e(asset('images/courtesy_visit/2.jpg')); ?>" alt="Courtesy Visit 2" />
                        </div>
                        <div class="media-item">
                            <img src="<?php echo e(asset('images/courtesy_visit/3.jpg')); ?>" alt="Courtesy Visit 3" />
                        </div>
                    </div>

                </div>
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
<?php /**PATH /home/pemsaknw/kingateketomfoundation.org/resources/views/events/previous/courtesy-visit-2024.blade.php ENDPATH**/ ?>
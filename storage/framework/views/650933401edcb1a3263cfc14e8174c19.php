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

    .video-wrapper {
      position: relative;
      width: 100%; /* Set the desired width */
      height: 450px; /* Set the desired height */
    }

    .video-placeholder {
      width: 100%;
      height: 100%;
      cursor: pointer;
      background-image: url(<?php echo e(asset('images/youth/1.png')); ?>); /* Replace with your image */
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .play-button {
      width: 100px;
      height: 100px;
      background: rgba(0, 0, 0, 0.6);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .play-button:before {
      content: '';
      display: block;
      border-style: solid;
      border-width: 15px 0 15px 25px;
      border-color: transparent transparent transparent white;
      margin-left: 10px;
    }

    </style>
    <?php $__env->stopPush(); ?>
    <section class="page-header" style="background-image: url(<?php echo e(asset('_nuxt/page-header-1-1.BAD7W5SW.jpg')); ?>); padding-bottom: 5.375rem; padding-top: 5.375rem;">
        <div class="container">
           <ul class="list-unstyled breadcrumb-one">
              <li><a href="/">Home</a></li>
              <li><span>Support</span></li>
           </ul>
           <h2 class="page-header__title">Youth Empowerment and Skill Acquisition</h2>
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

                       <h2 class="sec-title__title" style="font-size: 1.5rem;">Empowering the Next Generation through Skill Development</h2>
                    </div>

                    <p class="about-one__text">
                        "At the King Ateke Tom Foundation, we believe that the future lies in the hands of our youth. Through our Youth Empowerment and Skill Acquisition programs, we are committed to equipping young individuals with the practical skills and knowledge they need to thrive in today’s competitive world. Our initiatives focus on fostering self-reliance, entrepreneurship, and innovation."
                        1000-Capacity Skill Acquisition Center "Our soon-to-be-established, state-of-the-art skill acquisition center will accommodate up to 1000 individuals, offering them the opportunity to learn a variety of trades and vocations. From technical skills like carpentry, tailoring, and computer programming to creative fields such as graphic design and photography, participants will have access to a wide range of learning opportunities tailored to their interests and career goals.
                    </p>

                 </div>
              </div>

            <div class="col-lg-6" style="overflow: hidden; height: 450px">
                <div class="video-wrapper">
                    <div id="video-placeholder" class="video-placeholder">
                      <div class="play-button"></div>
                    </div>
                  </div>
            </div>

        </div>
    </section>

    <?php $__env->startPush('scripts'); ?>
    <script>
        document.getElementById('video-placeholder').addEventListener('click', function () {
          const videoIframe = document.createElement('iframe');
          videoIframe.setAttribute('width', '100%'); // Same width as the container
          videoIframe.setAttribute('height', '450'); // Same height as the container
          videoIframe.setAttribute('src', 'https://www.youtube.com/embed/21Oicd5usjk'); // Replace with your video URL
          videoIframe.setAttribute('frameborder', '0');
          videoIframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
          videoIframe.setAttribute('allowfullscreen', '');

          const placeholder = document.getElementById('video-placeholder');
          placeholder.parentNode.replaceChild(videoIframe, placeholder);
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
<?php /**PATH /home/pemsaknw/kingateketomfoundation.org/resources/views/support/youth.blade.php ENDPATH**/ ?>
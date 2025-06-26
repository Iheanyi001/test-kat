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


        /* styles.css (or inside a <style> block) */

.image-item img {

  transition: transform .2s;
}
.image-item:hover img {
  transform: scale(1.05);
}

/* Modal backdrop */
.modal {
  display: none;
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.8);
  align-items: center;
  justify-content: center;
  z-index: 9999;
}
.modal img {
  max-width: 90%;
  max-height: 90%;
  box-shadow: 0 0 20px rgba(0,0,0,0.5);
}
.modal.show {
  display: flex;
}

/* close “×” */
.modal-close {
  position: absolute;
  top: 1rem;
  right: 1.5rem;
  font-size: 2rem;
  color: #fff;
  cursor: pointer;
  user-select: none;
}

@media (max-width: 768px) {
    .images-container {
        grid-template-columns: none; /* Two columns on smaller screens */
    }
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

            <div class="container mb-5">
                <h1>Green Rivers Initiative</h1>
                <div class="content">
                    <p>The Green Rivers Initiative is King Ateke Tom Foundation’s flagship environmental project focused on restoring and preserving the natural ecosystem of Rivers State. Through this initiative, we are planting 10,000 trees across the 23 LGA"s of Rivers State to combat deforestation, reduce carbon emissions, restore biodiversity and land degradation, combat erosion and promote climate resilience. The project also includes awareness campaigns, school-based environmental education, and community involvement to foster a culture of environmental responsibility and sustainability.
                    This 10,000 trees by King Ateke Tom launched on the 5th of June 2025 (World Environment Day)</p>
                </div>


                <div class="images-container">
                    <!-- Image 1 -->
                    <?php $__currentLoopData = [['img'=> 'images/rivers_green/2.jpg', 'title'=>''], ['img'=> 'images/rivers_green/3.jpg', 'title'=>''], ['img'=> 'images/rivers_green/4.jpg', 'title'=>''], ['img'=> 'images/rivers_green/5.jpg', 'title'=>'']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="image-item" data-src="<?php echo e(asset($image['img'])); ?>">
                            <img src="<?php echo e(asset($image['img'])); ?>"  alt="<?php echo e($image['title']); ?>">
                            <div class="caption"><?php echo e($image['title']); ?></div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>

            <div class="container">
                <h1>Environmental Sustainability</h1>
                <div class="content">
                    <p>The King Ateke Tom Foundation is dedicated to preserving the environment for future generations. Through reforestation projects, clean energy initiatives, and educational programs, we promote sustainable practices that protect natural resources. We support local farmers with eco-friendly farming techniques and advocate for waste reduction and recycling efforts within our communities. Our goal is to create a healthier, greener planet while empowering and educating individuals to adopt environmentally responsible lifestyles.</p>

                    <p>The King Ateke Tom Foundation believes in a proactive approach to environmental sustainability. Through reforestation, we can restore vibrant green space, reduce the greenhouse effect, and control soil runoffs as well as preserve wildlife for future generations. The best time is now.</p>
                </div>

                <div class="images-container">
                    <!-- Image 1 -->
                    <div class="image-item" data-src="<?php echo e(asset('images/environment/8.jpg')); ?>">
                        <img src="<?php echo e(asset('images/environment/8.jpg')); ?>" alt="Reforestation Project">
                        <div class="caption">Reforestation Project</div>
                    </div>
                    <!-- Image 2 -->
                    <div class="image-item" data-src="<?php echo e(asset('images/environment/5.jpg')); ?>">
                        <img src="<?php echo e(asset('images/environment/5.jpg')); ?>" alt="Clean Energy Initiative">
                        <div class="caption">Clean Energy Initiative</div>
                    </div>
                    <!-- Image 3 -->
                    <div class="image-item" data-src="<?php echo e(asset('images/environment/9.jpg')); ?>">
                        <img src="<?php echo e(asset('images/environment/9.jpg')); ?>" alt="Eco-Friendly Farming">
                        <div class="caption">Eco-Friendly Farming</div>
                    </div>
                    <!-- Image 4 -->
                    <div class="image-item" data-src="<?php echo e(asset('images/environment/recycle.webp')); ?>">
                        <img src="<?php echo e(asset('images/environment/recycle.webp')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">Community Recycling Efforts</div>
                    </div>



                    <div class="image-item" data-src="<?php echo e(asset('images/environment/new/1.jpg')); ?>">
                        <img src="<?php echo e(asset('images/environment/new/1.jpg')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">Protect Our Rivers: This pollution highlights the urgency to take action. Join us in restoring our water ways and protecting our environment for us and our future generations</div>
                    </div>


                    <div class="image-item" data-src="<?php echo e(asset('images/environment/new/2.jpg')); ?>">
                        <img src="<?php echo e(asset('images/environment/new/2.jpg')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">Oil Spills, Broken Lives: Farmlands destroyed, futures at risk. Join us in restoring livelihoods and protecting our environment</div>
                    </div>

                    <div class="image-item" data-src="<?php echo e(asset('images/environment/new/3.jpg')); ?>">
                        <img src="<?php echo e(asset('images/environment/new/3.jpg')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">Bushfires Ravage Our Land: Destroying habitats, homes, and livelihoods. Let's work together to prevent and protect.</div>
                    </div>

                    <div class="image-item" data-src="<?php echo e(asset('images/environment/new/4.jpg')); ?>">
                        <img src="<?php echo e(asset('images/environment/new/4.jpg')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">Oil-Contaminated Waters: Once a source of life, now toxic and threatening aquatic ecosystems. Let's restore these waters and protect marine life</div>
                    </div>

                    <div class="image-item" data-src="<?php echo e(asset('images/environment/new/5.jpg')); ?>">
                        <img src="<?php echo e(asset('images/environment/new/5.jpg')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">Flooded Homes, Displaced Lives: Climate change and poor environmental practices leave communities vulnerable. Let's take action to build resilient, sustainable futures</div>
                    </div>

                    <div class="image-item" data-src="<?php echo e(asset('images/environment/new/6.jpg')); ?>">
                        <img src="<?php echo e(asset('images/environment/new/6.jpg')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">Cracked Earth, Dying Land: A stark reminder of drought and environmental degradation. It's time to heal our planet and safeguard our future.</div>
                    </div>

                    <div class="image-item" data-src="<?php echo e(asset('images/environment/new/7.jpg')); ?>">
                        <img src="<?php echo e(asset('images/environment/new/7.jpg')); ?>" alt="Community Recycling Efforts">
                        <div class="caption">The Earth Weeps: Our planet is in distress from pollution, deforestation, and climate change. It's time to listen and take action to heal our world</div>
                    </div>


                </div>
            </div>

        </div>
    </section>

    <!-- Modal -->
<div id="image-modal" class="modal">
    <span id="modal-close" class="modal-close">&times;</span>
  <img id="modal-img" src="" alt="Preview">
</div>

    <?php $__env->startPush('scripts'); ?>
    <!-- scripts.js (or inside a <script> block) -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('image-modal');
    const modalImg = document.getElementById('modal-img');
    const closeBtn  = document.getElementById('modal-close');

    // When you hover over any .image-item, show the modal
    document.querySelectorAll('.image-item').forEach(item => {
    item.addEventListener('click', () => {
      modalImg.src = item.dataset.src;
      modal.classList.add('show');
    });
  });

    // When your mouse leaves the modal area, hide it
    modal.addEventListener('mouseleave', () => {
      modal.classList.remove('show');
      modalImg.src = '';
    });

    // Close when clicking the ×
    closeBtn.addEventListener('click', () => {
      modal.classList.remove('show');
      modalImg.src = '';
    });

    // Also close if clicking outside the image
    modal.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.classList.remove('show');
        modalImg.src = '';
      }
    });
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


<?php /**PATH F:\downloads\acopy\resources\views/support/environment.blade.php ENDPATH**/ ?>
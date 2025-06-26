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
    <section class="page-header" style="background-image: url(<?php echo e(asset('_nuxt/page-header-1-1.BAD7W5SW.jpg')); ?>); padding-bottom: 5.375rem; padding-top: 5.375rem;">
        <div class="container">
           <ul class="list-unstyled breadcrumb-one">
              <li><a href="/">Home</a></li>
              <li><span>Executive</span></li>
           </ul>
           <h2 class="page-header__title">Executive Brief</h2>
        </div>
    </section>

    <section class="sec-pad-top sec-pad-bottom events-details">
       <div class="container">
          <div class="row gutter-y-60">
            <div class="col-lg-4">
                <div class="about-two__image" >
                    <div class="about-two__image__shape-1" ></div>
                    <div class="" ></div>
                    <div class="" ></div>
                    <img src="<?php echo e(asset('images/king2.png')); ?>" class="wow fadeInLeft" data-wow-duration="1500ms" alt="" >
                    <div style="position: absolute;left:0;bottom: 0;height: 50px;width:100%;background-color: #df5311;padding: 5px; padding-top:10px">
                        <h1 style="text-transform: uppercase; font-size: 14px; color: white;font-weight: bold;">
                            His Royal Majesty <br/> King (Dr) Ateke Michael Tom, JP
                        </h1>
                    </div>
                    <div style="display:none" class="about-two__image__caption" >
                       <!--<div >
                          <h3 class="about-two__image__caption__count count-box d-flex justify-content-center" >
                             <div class="countup-wrap" >
                                <span></span>
                             </div>
                             +
                          </h3>
                       </div>-->
                       <!--<p class="about-two__image__caption__text" >Years of work experience</p>-->
                    </div>
                 </div>
               <!-- <div class="events-details__sidebar">
                   <div class="events-details__sidebar__single">
                      <div class="events-details__sidebar__info">
                         <p><span>Starting time:</span> 8:00 am to 2:00 pm</p>
                         <p><span>Date:</span> 20 August, 2022</p>
                         <p>
                            <span>Category:</span><span><a href="#">Health</a><span>, </span></span>
                            <span>
                               <a href="#">Charity</a>
                            </span>
                         </p>
                         <p><span>Website:</span> <a href="www.example.com">www.example.com</a></p>
                         <p><span>Location:</span> 8 Street, San Marcos London D29, UK</p>
                      </div>
                   </div>
                   <div class="events-details__sidebar__single"><iframe src="https://www.google.com/maps/embed?..." class="events-details__sidebar__map" allowfullscreen=""></iframe></div>
                   <div class="events-details__sidebar__single">
                      <div class="events-details__sidebar__social"><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-pinterest"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                   </div>
                </div>-->

            </div>

             <div class="col-lg-8">
                <div class="events-details__content">
                   <h3 class="events-card__title">FROM THE DESK OF THE CHAIRMAN BOARD OF TRUSTEES, KING ATEKETOM FOUNDATION</h3>
                   <p style="text-align: justify;">The King AtekeTom Foundation stands as a beacon of hope and resilience, born from a journey of transformation and selflessness. Our foundation was established to uplift the downtrodden, empower the disenfranchised, and create opportunities where none existed before. This mission is deeply rooted in our history, a history of overcoming adversity and striving for a better future for all.</p>

                   <p style="text-align: justify;">As a foundation, we believe that every life has value, and it is our duty to ensure that no one is left behind. Our work focuses on providing tangible support whether through skill acquisition, medical outreach, poverty alleviation, or youth empowerment to those who need it most. We understand that the challenges our people face are vast, but so too is our resolve to address them.</p>

                   <p style="text-align: justify;">Our vision extends beyond immediate relief; we aim to build a society where every individual, regardless of background, has the chance to thrive. We are committed to fostering an environment where education, opportunity, and dignity are accessible to all. Through our initiatives, we strive to restore hope, instill pride, and create lasting change in the Niger Delta and beyond.</p>

                   <p style="text-align: justify;">
                    This is not just charity; it is a movement for social transformation. It is a call to action for all who believe in the potential of our people. The King AtekeTom Foundation is dedicated to turning despair into opportunity, darkness into light, and isolation into community.
                   </p>

                   <p style="text-align: justify;">
                    As we look to the future, we are guided by the principle that true leadership is measured by the positive impact we have on the lives of others. We invite you to join us on this journey, as we work together to build a better, more inclusive society for generations to come.
                   </p>

                   <div class="about-one__meta clearfix">
                    <h3 class="about-one__name">His Royal Majesty, King (Dr) Ateke Michael Tom, JP</h3>
                    <h3>Amayanabo of Okochiri Kingdom  </h3>
                    <p class="about-one__designation">Chairman, Board of Trustees, King AtekeTom Foundation</p>
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
<?php /**PATH /home/pemsaknw/kingateketomfoundation.org/resources/views/brief.blade.php ENDPATH**/ ?>
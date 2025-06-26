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
              <li><span>Donations</span></li>
           </ul>
           <h2 class="page-header__title">Donate</h2>
        </div>
    </section>

    <section class="container" style="margin-top: 2.75rem; margin-bottom :3.75rem">
        <div class="">
            <div class="sec-title text-center ">
               <h2 class="sec-title__title" style="font-size: 1.5rem;">Send your donations to support our mission </h2>
               <p class="my-container" style="color: #000; margin-top:20px">Our commitment remains steadfast as we continue to forge pathways of empowerment. Through strategic collaborations and alliances, we strive to empower both youths and women, paving the way for them to take charge of their destinies.</p>
            </div>
            <div class="row">

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                            <img style="width: 100px" src="<?php echo e(asset('images/naira.png')); ?>" alt="">
                            <div style="display: flex; justify-content: center;align-items: center;flex-direction: column;">
                                <h5>Naira Account Transfer</h5>
                                <p style="justify-content: center;display: flex; flex-direction: column;align-items: center;">
                                    Account Name:<br/> <strong> King Ateke Tom Foundation</strong></p>
                                <p>Account No: <strong>1312044777</strong></p>
                                <p>Bank: <strong>Zenith Bank PLC</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                            <img style="width: 100px" src="<?php echo e(asset('images/dollar.png')); ?>" alt="">
                            <div style="display: flex; justify-content: center;align-items: center;flex-direction: column;">
                                <h5>Dollar Account Transfer</h5>
                                <p style="justify-content: center;display: flex; flex-direction: column;align-items: center;">
                                    Account Name:<br/> <strong> King Ateke Tom Foundation</strong></p>
                                <p>Account No: <strong>5074829430</strong></p>
                                <p style="visibility: hidden">Bank: <strong>Zenith Bank PLC</strong></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                            <img style="width: 100px" src="<?php echo e(asset('images/pound.png')); ?>" alt="">
                            <div style="display: flex; justify-content: center;align-items: center;flex-direction: column;">
                                <h5>Pound Account Transfer</h5>
                                <p style="justify-content: center;display: flex; flex-direction: column;align-items: center;">
                                    Account Name:<br/> <strong> King Ateke Tom Foundation</strong></p>
                                <p>Account No: <strong>5061468486 </strong></p>
                                <p style="visibility: hidden">Bank: <strong>Zenith Bank PLC</strong></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                            <img style="width: 100px" src="<?php echo e(asset('images/euro.png')); ?>" alt="">
                            <div style="display: flex; justify-content: center;align-items: center;flex-direction: column;">
                                <h5>Euro Account Transfer</h5>
                                <p style="justify-content: center;display: flex; flex-direction: column;align-items: center;">
                                    Account Name:<br/> <strong> King Ateke Tom Foundation</strong></p>
                                <p>Account No: <strong>5081188746</strong></p>
                                <p style="visibility: hidden">Bank: <strong>Zenith Bank PLC</strong></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
     </section>


     <section class="container" style="margin-top: 2.75rem; margin-bottom :3.75rem">
        <div class="">
            <div class="sec-title text-center ">
               <h2 class="sec-title__title" style="font-size: 1.5rem;"> Contact Us</h2>
            </div>
        </div>
        <div class="row">
            <form data-v-88e22ab5="" class="contact-one__form contact-form-validated">
                <div data-v-88e22ab5="" class="row">
                    <div data-v-88e22ab5="" class="col-md-6">
                        <input data-v-88e22ab5="" type="text" placeholder="Your name" name="name"><!---->
                    </div>
                    <div data-v-88e22ab5="" class="col-md-6">
                        <input data-v-88e22ab5="" type="text" placeholder="Email address" name="email"><!---->
                    </div>
                    <div data-v-88e22ab5="" class="col-md-12">
                        <textarea data-v-88e22ab5="" name="message" placeholder="Write a message"></textarea><!---->
                    </div>
                    <div data-v-88e22ab5="" class="col-md-12">
                        <button data-v-88e22ab5="" type="submit" class="thm-btn contact-one__btn">
                            <span data-v-88e22ab5="">Send message</span>
                        </button><!---->
                    </div>
                </div>
            </form>
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
<?php /**PATH /home/pemsaknw/kingateketomfoundation.org/resources/views/donate.blade.php ENDPATH**/ ?>
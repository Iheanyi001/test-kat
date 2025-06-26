<section class="sec-pad-top sec-pad-bottom contact-one">
    <div class="container">
       <div class="row gutter-y-60">
          <div class="col-lg-4">
             <div class="sec-title">
                <p class="sec-title__tagline">Contact with us</p>
                <h2 class="sec-title__title">Love to hear from you</h2>
             </div>
             <p class="contact-one__text">Your support and feedback are invaluable in helping us make a difference. Whether you have questions, suggestions, or would like to get involved, feel free to reach out. Together, we can continue to create positive change!</p>
             <div class="contact-one__social"><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-pinterest"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
          </div>
          <div class="col-lg-8">
             <form wire:submit.prevent="save" class="contact-one__form contact-form-validated">

                <div class="row">
                   <div class="col-md-6">
                      <input type="text" placeholder="Your name" wire:model.blur="name"><!---->
                      <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                   </div>
                   <div class="col-md-6">
                      <input type="text" placeholder="Email address" wire:model.blur="email"><!---->
                      <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                   </div>
                   <div class="col-md-12">
                      <textarea wire:model.blur="message" placeholder="Write a message"></textarea>
                      <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                      <!---->
                   </div>
                   <div class="col-md-12">
                      <button type="submit" class="thm-btn contact-one__btn">
                        <span wire:loading.remove>Send message
                        </span>
                        <span wire:loading>
                            Sending message...
                        </span>
                    </button><!---->
                   </div>
                </div>
             </form>
             <!---->
          </div>
       </div>
    </div>
 </section>
<?php /**PATH F:\downloads\acopy\resources\views/livewire/contact-form.blade.php ENDPATH**/ ?>
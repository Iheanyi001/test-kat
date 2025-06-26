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
              <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
              <li><span>Contact</span></li>
           </ul>
           <h2 class="page-header__title">Contact Us</h2>
        </div>
    </section>


    <section data-v-a4453301="" class="contact-info"><div data-v-a4453301="" class="container"><div data-v-a4453301="" class="contact-info__inner wow fadeInUp" data-wow-duration="1500ms" style="background-image: url(<?php echo e(asset('_nuxt/contact-info-bg-1-1.Cqh3yH9B.jpg')); ?>); visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;"><div data-v-a4453301="" class="row gutter-y-30"><div data-v-a4453301="" class="col-lg-4 col-md-12"><div data-v-a4453301="" class="contact-info__item"><div data-v-a4453301="" class="contact-info__icon"><i data-v-a4453301="" class="fas fa-envelope-open"></i></div><p data-v-a4453301="" class="contact-info__text"><a data-v-a4453301="" href="mailto:support@kingatekefoundation.org">support@kingatekefoundation.org</a><a data-v-a4453301="" href="mailto:info@kingatekefoundation.org">info@kingatekefoundation.org</a><!----><!----></p></div></div><div data-v-a4453301="" class="col-lg-4 col-md-12"><div data-v-a4453301="" class="contact-info__item"><div data-v-a4453301="" class="contact-info__icon"><i data-v-a4453301="" class="fa fa-mobile"></i></div><p data-v-a4453301="" class="contact-info__text"><!----><!----><a data-v-a4453301="" href="tel:(+234) 7085892686">(+234) 7085892686</a><a data-v-a4453301="" href="tel:(+234) 7085892686 ">(+234) 7085892686 </a></p></div></div><div data-v-a4453301="" class="col-lg-4 col-md-12"><div data-v-a4453301="" class="contact-info__item"><div data-v-a4453301="" class="contact-info__icon"><i data-v-a4453301="" class="fa fa-map"></i></div><p data-v-a4453301="" class="contact-info__text"><!----><span data-v-a4453301="">No.4 Hospital road Portharcourt, </span><span data-v-a4453301="">Rivers State, Nigeria</span><!----></p></div></div></div></div></div></section>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('ContactForm');

$__html = app('livewire')->mount($__name, $__params, 'lw-2126323272-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=4%20Hospital%20road%20Portharcourt,%20Rivers%20State+(King%20AtekeTom%20Foundation)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps systems</a></iframe>
    </div>
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
<?php /**PATH /home/pemsaknw/kingateketomfoundation.org/resources/views/contact.blade.php ENDPATH**/ ?>
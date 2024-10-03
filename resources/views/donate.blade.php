<x-guest-layout>
    @push('styles')
        <link rel="stylesheet" href="{{asset('css/donate.css')}}">
    @endpush

    <section class="page-header" style="background-image: url({{asset('_nuxt/page-header-1-1.BAD7W5SW.jpg')}}); padding-bottom: 5.375rem; padding-top: 5.375rem;">
        <div class="container row">
           <ul class="list-unstyled breadcrumb-one">
              <li><a href="/">Home</a></li>
              <li><span>Donations</span></li>
           </ul>
           <h2 class="page-header__title">Donate</h2>
        </div>
    </section>

    <section class="container" style="margin-top: 1.75rem; margin-bottom: 1.75rem;">
        <div class="middle_content entry">
           <div id="cmsmasters_row_" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_donation_form_wrapper cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
              <div class="cmsmasters_row_outer_parent">
                 <div class="cmsmasters_row_outer">
                    <div class="cmsmasters_row_inner">
                       <div class="cmsmasters_row_margin cmsmasters_11">
                          <div class="cmsmasters_column one_first">
                             @livewire('donate-form')
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="cl"></div>
        </div>
     </section>
</x-guest-layout>

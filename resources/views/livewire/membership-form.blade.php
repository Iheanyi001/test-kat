<form wire:submit='save' class="contact-one__form video-one__form">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
   <div class="row" >
      <div class="col-md-6" >
         <input wire:model.live='name' type="text" placeholder="Your name" value="" ><!---->
         @error('name') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="col-md-6" >
         <input wire:model.live='phone' type="text" placeholder="Your phone" value="" ><!---->
         @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="col-md-12" >
         <input wire:model.live='email' type="email" placeholder="Email address" value="" ><!---->
         @error('email') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="col-md-12" >
         <input wire:model.live='location' type="text" placeholder="Location" value="" ><!---->
         @error('location') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="col-md-12" >
         <textarea wire:model.live='message' placeholder="Message" ></textarea>
         @error('message') <span class="text-danger">{{ $message }}</span> @enderror
         <!---->
      </div>
      <div class="col-md-12" >
         <button type="submit" class="thm-btn contact-one__btn" ><span >Join now</span></button><!---->
      </div>
      <!---->
   </div>
</form>

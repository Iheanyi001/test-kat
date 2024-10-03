<form wire:submit.prevent="submitDonation" enctype="multipart/form-data">
    <div class="cmsmasters_donation_fields">
       <h2 class="cmsmasters_donation_form_title">Donation details</h2>

       <!-- Donation Amount -->
       <div class="cmsmasters_donation_field donation-donation_amount">
          <label for="donation_amount">Donation Amount *</label>
          <div class="field_inner">
             <label><input type="radio" value="5" wire:model="donation_amount"> $5.00</label>
             <label><input type="radio" value="10" wire:model="donation_amount"> $10.00</label>
             <label><input type="radio" value="20" wire:model="donation_amount"> $20.00</label>
             <label><input type="radio" value="50" wire:model="donation_amount"> $50.00</label>
             <label><input type="radio" value="100" wire:model="donation_amount"> $100.00</label>
             <input type="text" wire:model="donation_amount" placeholder="or enter your own amount">
          </div>
          @error('donation_amount') <span class="error">{{ $message }}</span> @enderror
       </div>

       <!-- Recurrence -->
       <div class="cmsmasters_donation_field donation-recurring_donation">
          <label for="recurring_donation">Recurrence *</label>
          <div class="field_inner">
             <select wire:model="recurring_donation">
                <option value="one-time">One-time</option>
                <option value="weekly">Weekly</option>
                <option value="monthly">Monthly</option>
                <option value="yearly">Yearly</option>
             </select>
          </div>
       </div>

       <!-- Campaigns -->
       <div class="cmsmasters_donation_field donation-donation_campaign">
          <label for="donation_campaign">Campaigns</label>
          <div class="field_inner">
             <select wire:model="donation_campaign">
                <option value="" default>No specific campaign</option>
                <option value="Education to Every Child">Education to Every Child</option>
                <option value="Donate to our Good Causes">Donate to our Good Causes</option>
                <option value="Burundian Refugees">Burundian Refugees in the DR Congo</option>
                <option value="American Refugees">Preparing to Help American Refugees</option>
                <option value="Shelter and Clean Water">Desperate for Shelter and Clean Water</option>
                <option value="Refugees in Serbia">Refugees and Migrants in Serbia</option>
                <option value="Syrian Refugee Crisis">Syrian Refugee Crisis</option>
             </select>
          </div>
       </div>

       <!-- Message -->
       <div class="cmsmasters_donation_field donation-donation_message">
          <label for="donation_message">Message</label>
          <div class="field_inner">
             <textarea wire:model="donation_message" placeholder="Your custom message"></textarea>
          </div>
       </div>

       <!-- Anonymous Donation -->
       <div class="cmsmasters_donation_field donation-anonymous_donation">
          <label for="anonymous_donation">Anonymous donation?</label>
          <div class="field_inner">
             <input type="checkbox" wire:model="anonymous_donation"> Check this box to hide your personal info
          </div>
       </div>
    </div>

    <!-- Donator Details -->
    <div class="cmsmasters_donator_fields">
       <h2 class="cmsmasters_donation_form_title">Donator details</h2>

       <!-- First Name -->
       <div class="cmsmasters_donator_field donator-donator_firstname">
          <label for="donator_firstname">First name *</label>
          <div class="field_inner">
             <input type="text" wire:model="donator_firstname" placeholder="">
          </div>
          @error('donator_firstname') <span class="error">{{ $message }}</span> @enderror
       </div>

       <!-- Last Name -->
       <div class="cmsmasters_donator_field donator-donator_lastname">
          <label for="donator_lastname">Last name *</label>
          <div class="field_inner">
             <input type="text" wire:model="donator_lastname" placeholder="">
          </div>
          @error('donator_lastname') <span class="error">{{ $message }}</span> @enderror
       </div>

       <!-- Email -->
       <div class="cmsmasters_donator_field donator-donator_email">
          <label for="donator_email">Email *</label>
          <div class="field_inner">
             <input type="text" wire:model="donator_email" placeholder="email@website.com">
          </div>
          @error('donator_email') <span class="error">{{ $message }}</span> @enderror
       </div>

       <!-- Phone -->
       <div class="cmsmasters_donator_field donator-donator_email">
        <label for="donator_email">Phone Number</label>
        <div class="field_inner">
           <input type="text" wire:model="donator_phone" placeholder="email@website.com">
        </div>
        @error('donator_phone') <span class="error">{{ $message }}</span> @enderror
     </div>

       <!-- Address -->
       <div class="cmsmasters_donator_field donator-donator_address">
          <label for="donator_address">Address</label>
          <div class="field_inner">
             <input type="text" wire:model="donator_address" placeholder="Street address, P.O. box, etc.">
          </div>
       </div>

       <!-- Zip -->
       <div class="cmsmasters_donator_field donator-donator_zip">
          <label for="donator_zip">Zip/Postal code</label>
          <div class="field_inner">
             <input type="text" wire:model="donator_zip" placeholder="">
          </div>
       </div>
    </div>

    <div class="form-submit">
       <button type="submit" class="cmsmasters_button">Submit Donation</button>
    </div>
</form>

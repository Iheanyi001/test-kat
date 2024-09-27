<form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="site_name">Site Name</label>
    <input type="text" name="site_name" value="{{ old('site_name', site_setting('site_name')) }}" required>

    <label for="site_logo">Site Logo</label>
    <input type="file" name="site_logo" accept="image/*">
    <img src="{{ asset('storage/' . site_setting('site_logo')) }}" alt="Site Logo" width="100">

    <label for="contact_email">Contact Email</label>
    <input type="email" name="contact_email" value="{{ old('contact_email', site_setting('contact_email')) }}" required>

    <button type="submit">Save Settings</button>
</form>

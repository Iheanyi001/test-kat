<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;

class SiteSettingController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::all();
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_name' => 'required',
            'site_logo' => 'nullable|image|max:2048',
            'contact_email' => 'required|email',
        ]);

        // Update or create each setting
        SiteSetting::updateOrCreate(['key' => 'site_name'], ['value' => $request->site_name]);

        if ($request->hasFile('site_logo')) {
            $logoPath = $request->file('site_logo')->store('logos', 'public');
            SiteSetting::updateOrCreate(['key' => 'site_logo'], ['value' => $logoPath]);
        }

        SiteSetting::updateOrCreate(['key' => 'contact_email'], ['value' => $request->contact_email]);

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }

    public function destroy($id)
    {
        SiteSetting::destroy($id);
        return redirect()->route('site-settings.index')->with('success', 'Site setting deleted successfully');
    }
}


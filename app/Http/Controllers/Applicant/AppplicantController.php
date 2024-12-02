<?php

namespace App\Http\Controllers\Applicant;

use App\Models\Resume;
use App\Models\JobListing;
use App\Models\Application;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\UserJobPreferences;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AppplicantController extends Controller
{
    public function index()
    {

        $resumes = Resume::with('user')
            ->where('user_id', '=', Auth::id())
            ->get();

        $resumes = Resume::with('user')
            ->where('user_id', '=', Auth::id())
            ->get();

        $announcements = Announcement::where('status', '=', 'Active')
            ->latest()->take(5)->get(); // Limit to the latest 5

        $applications = Application::where('user_id', Auth::id())
            ->with(['job.company', 'resume'])
            ->get();

        $matched_jobs = JobListing::matchUserPreference(Auth::user())
            ->with(['company', 'my_application'])
            ->doesntHave('my_application')
            ->get();

        return view('dashboard', [
            'applications' => $applications,
            'matched_jobs' => $matched_jobs,
            'announcements' => $announcements,
            'resumes' => $resumes,

        ]);
    }

    public function updateProfilePhoto(Request $request)
    {

        $user = Auth::user();
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);


        if ($user->profile_photo && Storage::exists('public/' . $user->profile_photo)) {
            // If the user has an old photo, delete it
            Storage::delete('public/' . $user->profile_photo);
        }

        
        if ($request->hasFile('profile_photo')) {
            $photo = $request->file('profile_photo');
            $image_name = time() . '_' . $photo->getClientOriginalName();
            $path = $photo->storeAs('images/profile_photo', $image_name, 'public');
        }

        $user->update([
            'photo_url' => $path,
        ]);

        // Redirect the user back with a success message
        return redirect()->back()->with('success', 'Profile photo updated successfully!');

    }

    public function profile()
    {
        UserJobPreferences::firstOrCreate(['user_id' => Auth::id()]);

        $user = Auth::user()->loadMissing(['educations', 'skills', 'work_experiences', 'job_preference']);

        return view('applicant.profile.index', [
            'user' => $user,
            'editable' => true,
        ]);
    }

}

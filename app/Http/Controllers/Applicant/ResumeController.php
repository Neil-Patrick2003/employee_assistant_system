<?php

namespace App\Http\Controllers\Applicant;

use App\Models\JobListing;
use App\Models\Resume;
use App\Models\UserEducation;
use Illuminate\Http\Request;
use App\Models\UserJobPreferences;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Auth::user()->resumes()->get();

        return view('resumes.index', ['resumes' => $resumes]);
    }

    public function create(Request $request)
    {
        $user = Auth::user()->load(['educations', 'skills', 'work_experiences']);

        $template = $request->input('template', 'basic');

        return view('resumes.create', ['user' => $user, 'template' => $template]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'template' => 'required|in:basic,two-columns'
        ]);

        Resume::create([
            'user_id' => Auth::id(),
            ...$data
        ]);

        return redirect('/resumes');
    }


    public function show(Resume $resume)
    {
        $resume->loadMissing(['user' => ['educations', 'skills', 'work_experiences']]);

        return view('resumes.show', ['resume' => $resume]);
    }
}

<?php

namespace App\Http\Controllers\Applicant;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::where('user_id', Auth::id())
            ->with(['job.company', 'resume'])
            ->get();

        return view('applicant.applications.index', ['applications' => $applications]);
    }

    public function store(Request $request)
    {

        $data=  $request->validate([
            'job_id' => 'required|exists:job_listings,id',
            'resume_id' => 'required|exists:resumes,id'
        ]);

        Application::create(
           [
               ...$data,
               'status' => 'Submitted',
               'user_id' => Auth::id()
           ]
        );

        return redirect()->back();
    }
}

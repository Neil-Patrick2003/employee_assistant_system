<?php

namespace App\Http\Controllers\Applicant;

use App\Models\JobListing;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index(Request $request)
    {

        $query = JobListing::query();


        if ($request->has('job') && $request->job) {
            $query->where('title', 'like', '%' . $request->job . '%');
        }

        if ($request->has('location') && $request->location) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        if ($request->has('salary') && $request->salary) {
            $query->where('salary', '>=', $request->salary); // Assuming you're looking for jobs offering at least the entered salary
        }

        if ($request->has('work_experience') && $request->work_experience) {
            $query->where('requierd_work_experience', '>=', $request->work_experience); // Assuming you're looking for jobs requiring at least the entered years of experience
        }

        if ($request->has('work_policy') && $request->work_policy) {
            $query->where('work_policy', $request->work_policy);
        }

        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }


        

        $jobs = $query->with(['company', 'my_application'])->get();
        $count = $jobs->count();

        dump($count);

        return view('applicant.jobs.index', [
            'jobs' => $jobs,
            'count' => $count
        ]);

    }

    public function show($id)
    {
        $job = JobListing::with(['company', 'my_application'])->findOrFail($id);

        $resumes = Resume::with('user')
            ->where('user_id', '=', Auth::id())
            ->get();

        $resumes = Resume::with('user')
            ->where('user_id', '=', Auth::id())
            ->get();

        return view('applicant.jobs.show', [
            'job' => $job,
            'resumes' => $resumes,
        ]);

    }
}

<?php

namespace App\Http\Controllers\Employer;

use App\Models\Company;
use App\Models\JobEducation;
use App\Models\JobListing;
use App\Models\JobSkill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class JobListingController extends Controller
{
    public function index()
    {

        //FETCH
        $company = Company::with('jobs')
            ->where('user_id', '=', Auth::id())
            ->first();

        return view('employer/job_listing/index', [
            'company' => $company,
        ]);
    }

    public function create()
    {
        return view('employer/job_listing/create');
    }

    public function store(Request $request)
    {
        $user = User::with('company')
            ->where('id', '=', Auth::id())
            ->first();

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'salary' => 'required|numeric|min:1',
            'location' => 'required',
            'work_policy' => 'required|string|in:Hybrid,Remote,Onsite',
            'category' => 'required|string|max:255',
            'min_age' => 'required|integer|min:18|max:60',
            'max_age' => 'required|integer|min:18|max:60|gte:min_age',
            'work_experience' => 'required|integer|min:0',
            'scope' => 'required',
            'level' => 'required',
            'education_description' => 'required',
        ]);

        $job = JobListing::create([
            'company_id' => $user->company->id,
            'title' => $request->title,
            'description' => $request->description,
            'salary' => $request->salary,
            'location' => $request->location,
            'work_policy' => $request->work_policy,
            'scope' => $request->scope,
            'requierd_work_experience' => $request->work_experience,
            'minimum_age' => $request->min_age,
            'maximum_age' => $request->max_age,
            'category' => $request->category,
        ]);

        foreach ($request->job_skills as $job_skill) {
            $skill = JobSkill::create([
                'job_listing_id' => $job->id,
                'name' => $job_skill,

            ]);

        }

        JobEducation::create([
            'level' => $request->level,
            'description' => $request->education_description,
            'job_listing_id' => $job->id,
        ]);

        return redirect('/employer/jobs')->with('success', 'Posted Sucessfully');
    }

    public function edit(Request $request, $id)
    {

        $job = JobListing::with('job_skills', 'job_education')
            ->find($id);

        return view('employer.job_listing.edit', [
            'job' => $job,
        ]);
    }

    public function update(JobListing $job, Request $request)
    {
        $job_education = JobEducation::where('job_listing_id', '=', $job->id)->first();

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'salary' => 'required|numeric|min:1',
            'location' => 'required',
            'work_policy' => 'required|string|in:Hybrid,Remote,Onsite',
            'category' => 'required|string|max:255',
            'min_age' => 'required|integer|min:18|max:60',
            'max_age' => 'required|integer|min:18|max:60|gte:min_age',
            'work_experience' => 'required|integer|min:0',
            'scope' => 'required',
            'level' => 'required',
            'education_description' => 'required',
        ]);

        $job->update([
            'title' => $request->title,
            'description' => $request->description,
            'salary' => $request->salary,
            'location' => $request->location,
            'work_policy' => $request->work_policy,
            'scope' => $request->scope,
            'requierd_work_experience' => $request->work_experience,
            'minimum_age' => $request->min_age,
            'maximum_age' => $request->max_age,
            'category' => $request->category,
        ]);

        foreach ($request->job_skills as $job_skill) {
            // Check if the job skill is not null or empty
            if (!empty($job_skill)) {
                // Create a new JobSkill entry
                $skill = JobSkill::create([
                    'job_listing_id' => $job->id,
                    'name' => $job_skill,
                ]);
            }
        }

        $job_education->level = $request->level;
        $job_education->description = $request->education_description;
        $job_education->save();

        return redirect()->back();
    }

    public function delete()
    {
        $skillId = request('id');


        // Find the specific skill to delete
        $skill = JobSkill::findOrFail($skillId);

        $skill->delete();

        return redirect()->back();
    }

    
}

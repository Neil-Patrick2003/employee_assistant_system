<?php

namespace App\Http\Controllers\Employer;

use App\Models\Application;
use App\Models\Company;
use App\Models\JobListing;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $company = Company::where('user_id', '=', Auth::id())->first();
        $totalActiveJobListings = JobListing::where('company_id', '=', $company->id)
            ->where('status', '=', 'Active')->count();
        $allJobs = JobListing::where('company_id', '=', $company->id)->count();
        $applications = Application::whereHas('job', function (Builder $builder) {
            $builder->whereHas('company', function (Builder $query) {
                $query->where('user_id', Auth::id());
            });
        })
            ->with(['job.company', 'resume', 'user'])
            ->get();

        $allApplicant = $applications->count();



        return view('employer.index', [
            'all_jobs' => $allJobs,
            'active_jobs' => $totalActiveJobListings,
            'all_applicants' => $allApplicant,
            'company' => $company
        ]);
    }

    public function announcement(){
        return view('employer.announcement.index');
    }

}

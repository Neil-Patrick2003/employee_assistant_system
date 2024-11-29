<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    public function index()
    {
        $applications = Application::whereHas('job', function (Builder $builder) {
            $builder->whereHas('company', function (Builder $query) {
                $query->where('user_id', Auth::id());
            });
        })
            ->with(['job.company', 'resume', 'user'])
            ->get();


        return view('employer.applications.index', ['applications' => $applications]);

    }
}

<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Notification;
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

            $all_count = $applications->count();
            $submitted_count = $applications->where('status', '=', 'Submitted')->count();
            $screening_count = $applications->where('status', '=', 'Screening')->count();
            $hired_count = $applications->where('status', '=', 'Hired')->count();


        return view('employer.applications.index',
            [
                'applications' => $applications,
                'all_count' => $all_count,
                'submitted_count' => $submitted_count,
                'screening_count' => $screening_count,
                'hired_count' => $hired_count
            ]);

    }

    public function update(Request $request, $id)
    {
        $application = Application::find($id);

        $application->status = $request->status;

        $application->save();

        Notification::create([
            'user_id' => $application->user_id,
            'application_id' => $application->id,
            'message' => 'Your application has been marked as ' . $request->status,
        ]);

        return redirect()->back()->with('status', 'Application status updated successfully!');

    }

}

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


        return view('employer.applications.index', ['applications' => $applications]);

    }

    public function update(Request $request, $id){
        $application = Application::find($id);

        $application->status = $request->status;

        $application->save();

        Notification::create([
            'user_id' => $application->user_id,
            'application_id' => $application->id,
            'message' => 'Your application has been marked as ' . $request->status
        ]);

        return redirect()->back()->with('status', 'Application status updated successfully!');

    }


}

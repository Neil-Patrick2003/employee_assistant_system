<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkExperienceController extends Controller
{
    public function store(Request $request)
    {

        $data = $request->validate([
            'job_title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|string',
        ]);

        WorkExperience::create([
            ...$data,
            'user_id' => Auth::id()
        ]);

        return redirect()->back();
    }

    public function update(Request $request, WorkExperience $workExperience)
    {
        $data = $request->validate([
            'job_title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|string',
        ]);

        $workExperience->update($data);

        return redirect()->back();
    }

    public function destroy(WorkExperience $workExperience)
    {
        $workExperience->delete();

        return redirect()->back();
    }
}

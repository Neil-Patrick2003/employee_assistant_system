<?php

namespace App\Http\Controllers\Applicant;

use App\Models\UserJobPreferences;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class JobPreferencesController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'salary_expectations' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/', // Regex for valid decimal values with up to 2 decimal places
                'work_experience' => 'required|integer|min:0',
            'category' => 'required|string|max:255',
            'work_policy' => 'required|string|in:remote,onsite,hybrid',
            'location' => 'required|string|max:255',
            'scope' => 'required|string|max:255',
        ]);

        $jobPreferences = UserJobPreferences::create([
            'user_id' => Auth::id(),
            'min_salary' => $request->salary_expectation,
            'work_experience' => $request->work_experience,
            'category' => $request->category,
            'work_policy' => $request->work_policy,
            'location' => $request->location,
            'scope' => $request->scope,
        ]);

        return redirect()->back()->with([
            'jobPreferences' => $jobPreferences,
        ]);
    }
}

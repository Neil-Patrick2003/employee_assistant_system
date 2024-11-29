<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\UserJobPreferences;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobPreferenceController extends Controller
{
    public function store(Request $request)
    {
        $jobPreference= UserJobPreferences::firstOrCreate(['user_id' => Auth::id()]);

        $data = $request->validate([
            'min_salary'      => 'sometimes|numeric',
            'work_experience' => 'sometimes|numeric',
            'category'        => 'sometimes|string',
            'work_policy'     => 'sometimes|string',
            'scope'           => 'sometimes|string',
            'location'        => 'sometimes|string',
        ]);

        $jobPreference->update($data);

        return redirect()->back();
    }
}

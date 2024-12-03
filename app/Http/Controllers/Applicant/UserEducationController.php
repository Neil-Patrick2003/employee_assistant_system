<?php

namespace App\Http\Controllers\Applicant;

use Illuminate\Http\Request;
use App\Models\UserEducation;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class UserEducationController extends Controller
{
    public function store(Request $request)
    {
       $data= $request->validate([
            'level' => 'required|in:Elementary,High-School,Vocational,College,Course,Masteral,Doctoral',
            'year' => 'nullable|integer|min:1900|max:2024',
            'institution' => 'required|string|max:255',
            'description' => 'nullable|max:255'
        ]);

        UserEducation::create([
            'user_id' => Auth::id(),
            ...$data
        ]);

        return redirect()->back()->with('success', 'Education Added Successfully.');
    }

    public function update(Request $request, UserEducation $education)
    {
        $data= $request->validate([
            'level' => 'required|in:Elementary,High-School,Vocational,College,Course,Masteral,Doctoral',
            'year' => 'nullable|integer|min:1900|max:2024',
            'institution' => 'required|string|max:255',
            'description' => 'nullable|max:255'
        ]);

        $education->update($data);

        return redirect()->back()->with('success', 'Education Updated Successfully.');
    }

    public function destroy(Request $request, UserEducation $education)
    {
        $education->delete();

        return redirect()->back()->with('success', 'Education Deleted Successfully.');
    }
}

<?php

namespace App\Http\Controllers\Employer;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::with('user')
        ->where('user_id', '=', Auth::id())
        ->first();


        return view('employer/company/index', [
            'company' => $company
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employer.company.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //validate
        $request->validate([
            'file_upload' => 'required|file|mimes:jpg,jpeg,png,gif|max:10240', // Validate file type and size (10MB max)
        ]);

        // Check if a file was uploaded
        if ($request->hasFile('file_upload')) {
            $photo = $request->file('file_upload');
            $image_name = time() . '_' . $photo->getClientOriginalName();
            $path = $photo->storeAs('images/logo', $image_name, 'public');
        }

        $companies = Company::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'logo_url' => $path,
            'details' => $request->details
        ]);

        return view('employer.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

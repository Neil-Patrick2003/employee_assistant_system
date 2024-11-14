<?php

namespace App\Http\Controllers\Employer;

use App\Models\Company;
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
        return view('employer/company/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'file_upload' => 'required|file|mimes:jpg,jpeg,png,gif|max:10240', // Validate file type and size (10MB max)
        ]);

        // Check if a file was uploaded
        if ($request->hasFile('file_upload')) {
            // Get the uploaded file
            $photo = $request->file('file_upload');

            // Generate a unique file name and store it in the 'public' disk
            $image_name = time() . '_' . $photo->getClientOriginalName();
            $path = $photo->storeAs('public/images/logo', $image_name);
        }

        $companies = Company::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'logo_url' => $path,
            'details' => $request->details
        ]);

        return redirect()->back();

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
        //
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

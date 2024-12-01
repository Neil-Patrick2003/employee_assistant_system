<?php

namespace App\Http\Controllers\Admin;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::paginate();

        return view('admin.announcement.index',
            ['announcements' => $announcements]);
    }

    public function store(Request $request)
    {

      $data=  $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'status' => 'required|string|in:Active,Inactive',
        ]);

        Announcement::create($data);

        return redirect()->back();
    }

    public function update(Request $request, Announcement $announcement)
    {
        $data=  $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'status' => 'required|string|in:Active,Inactive',
        ]);

       $announcement->update($data);

        return redirect()->back();
    }

    public function destroy( Announcement $announcement)
    {

        $announcement->delete();

        return redirect()->back();
    }


}

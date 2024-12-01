<?php

namespace App\Http\Controllers\Admin;

use App\Models\Application;
use App\Models\JobListing;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller

{
    public function index()
    {
        $totalActiveJobListings = JobListing::count();
        $totalInactiveJobListings = JobListing::count();
        $totalRegisteredJobSeekers = User::where('role', 'Applicant')->count();
        $totalRegisteredEmployers = User::where('role', 'Employer')->count();
        $totalFilledApplication = Application::count();

        $startDate = Carbon::now()->subDays(30)->startOfDay();
        $endDate = Carbon::now()->addDays(30)->endOfDay();

        $registeredJobSeekersCountPerDay = $this->getRegisteredJobSeekersCountPerDay($startDate, $endDate);
        $addedJobsCountPerDay = $this->getAddedJobsCountPerDay($startDate, $endDate);
        $submittedApplicationsCountPerDay = $this->getSubmittedApplicationsCountPerDay($startDate, $endDate);


        return view('admin.index', [
            'totalActiveJobListings' => $totalActiveJobListings,
            'totalInactiveJobListings' => $totalInactiveJobListings,
            'totalRegisteredJobSeekers' => $totalRegisteredJobSeekers,
            'totalRegisteredEmployers' => $totalRegisteredEmployers,
            'totalFilledApplication' => $totalFilledApplication,
            'registeredJobSeekersCountPerDay' => $registeredJobSeekersCountPerDay,
            'addedJobsCountPerDay' => $addedJobsCountPerDay,
            'submittedApplicationsCountPerDay' => $submittedApplicationsCountPerDay
        ]);
    }

    public function getRegisteredJobSeekersCountPerDay($startDate, $endDate)
    {
        $records = DB::table('users')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->where('role', 'Applicant')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        return $this->formatDailyCountRecords($records, $startDate, $endDate);
    }

    public function getAddedJobsCountPerDay($startDate, $endDate)
    {
        $records = DB::table('job_listings')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        return $this->formatDailyCountRecords($records, $startDate, $endDate);
    }

    public function getSubmittedApplicationsCountPerDay($startDate, $endDate)
    {
        $records = DB::table('applications')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        return $this->formatDailyCountRecords($records, $startDate, $endDate);
    }

    public function formatDailyCountRecords($records, $startDate, $endDate)
    {
        $chartData = collect();

        $period = new \DatePeriod(
            $startDate,
            new \DateInterval('P1D'),
            $endDate
        );

        foreach ($period as $date) {
            $dateString = $date->format('Y-m-d');
            $count = $records->firstWhere('date', $dateString)->count ?? 0;

            $chartData->push([
                'date' => $dateString,
                'count' => $count
            ]);
        }

        $labels = $chartData->pluck('date')->toArray();
        $data = $chartData->pluck('count')->toArray();

        return [
            'data' => $data,
            'labels' => $labels
        ];

    }
}

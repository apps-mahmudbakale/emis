<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $studentsCount = 0;
        $schoolsCount = 0;
        $teachersCount = 0;
        $lgaschools = [];
        $schools = School::with('lga')->get();

        $groupedData = $schools->groupBy('lga.name')->map(function ($group, $lgaName) {
            $totalSchools = $group->count();

            return [
                'name' => $lgaName,
                'y' => $totalSchools,
                'drilldown' => $lgaName,
            ];
        })->values()->all();
        // dd($groupedData);
        $lgaschools = $groupedData;
        return view('dashboard', compact('lgaschools', 'studentsCount', 'schoolsCount', 'teachersCount'));
    }
}

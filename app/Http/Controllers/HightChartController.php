<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class HightChartController extends Controller
{
    public function donutChart()
    {
        $students = Student::select('course',\DB::raw("COUNT(id) as count"))
                    ->groupBy('course')
                    ->get();

        return view('donutChart',compact('students'));
    }
}

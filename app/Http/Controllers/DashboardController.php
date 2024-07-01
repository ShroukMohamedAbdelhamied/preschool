<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Course;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function main()
    {
        $title = "Kider Preschool Website";
        return view('main', compact('title'));
    }

    public function Teachers()
    {
        $title = "Teachers";
        $teachers = Teacher::all();
        return view('teachers', compact('title', 'teachers'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        return view('teachers', compact('teachers'));
    }

    public function course()
    {
        $course = Course::all(); 
        $title = "Classes";
        return view('course', compact('title', 'course'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
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
        $title = "Teachers Dashboard";
        $teachers = Teacher::all();
        return view('Teachers', compact('title', 'teachers'));
    }

    public function create()
    {
        $teachers = Teacher::all(); // Fetch all teachers
        return view('Teachers', compact('teachers'));
    }
}

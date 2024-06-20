<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontpages extends Controller
{
    public function home(){
        $title = "Kider Preschool Website";
        return view('home', compact('title'));
    }

    public function about(){
        $title = "About Kider Preschool";
        $title2 = "About Us";
        return view('about', compact('title', 'title2'));
    }

    public function class(){
        $title = "Classes of Kider Preschool";
        $title2 = "Classes";
        return view('class', compact('title', 'title2'));
    }


    public function page(){
        $title = "Pages of Kider Preschool";
        $title2 = "Pages";
        return view('page', compact('title', 'title2'));
    }

    public function contact(){
        $title = "Contact whith Kider Preschool";
        $title2 = "Contact Us";
        return view('contact', compact('title', 'title2'));
    }

    public function facilities(){
        $title = "School Facilities of Kider Preschool";
        $title2 = "Facilities";
        return view('facilities', compact('title', 'title2'));
    }

    public function error(){
        $title = "404 Error";
        $title2 = "error";
        return view('error', compact('title', 'title2'));
    }

    public function appointment(){
        $title = "Make Appointment with Kider Preschool";
        $title2 = "Appointment";
        return view('appointment', compact('title', 'title2'));
    }

    public function teacher(){
        $title = "Become A Teacher in Kider Preschool";
        $title2 = "Become A Teacher";
        return view('teacher', compact('title', 'title2'));
    }

    public function popular(){
        $title = "Popular Teachers of Kider Preschool";
        $title2 = "Teachers";
        return view('popular', compact('title', 'title2'));
    }
    public function testimonial(){
        $title = "testimonial of Kider Preschool";
        $title2 = "Testimonial";
        return view('testimonial', compact('title', 'title2'));
    }

    public function main()
    {
        $title = "Kider Preschool Website";
        return view('dashboard.layouts.main', compact('title'));

    }

    public function join()
    {
        $title = "Registration";
        return view('join', compact('title'));

    }
}



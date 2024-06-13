<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function main(){
        $title = "Kider Preschool Website";
        return view('main', compact('title'));
    }
}

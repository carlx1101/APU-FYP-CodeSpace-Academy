<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function studentDashboard(): View
    {
        return view('student.dashboard');
    }

    public function tutorDashboard(): View
    {
        return view('tutor.dashboard');
    }

    public function administratorDashboard(): View
    {
        return view('administrator.dashboard');
    }
}

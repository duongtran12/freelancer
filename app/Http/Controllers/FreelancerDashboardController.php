<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreelancerDashboardController extends Controller
{
    public function index()
    {
        return view('freelancer.dashboard'); // Tạo view này sau
    } 
}

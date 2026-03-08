<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        $totalUsers = \App\Models\User::count();
        
        return view('admin.dashboard', compact('totalUsers'));
    }
}
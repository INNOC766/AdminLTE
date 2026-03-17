<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Dashboard v1 — main landing page after login.
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Dashboard v2.
     */
    public function v2()
    {
        return view('dashboard.index2');
    }

    /**
     * Dashboard v3.
     */
    public function v3()
    {
        return view('dashboard.index3');
    }
}

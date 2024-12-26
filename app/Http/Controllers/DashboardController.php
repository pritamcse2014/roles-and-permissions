<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function panelDashboard() {
        return view('panel.dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;

class DashboardGuruController extends Controller
{
    public function index()
    {
        return Inertia::render('guru/Dashboard');
    }
}


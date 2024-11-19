<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('Admin/Dashboard');
    }

    public function category()
    {
        return Inertia::render('Admin/Category');
    }

    public function tables()
    {
        return Inertia::render('Admin/Tables');
    }
}

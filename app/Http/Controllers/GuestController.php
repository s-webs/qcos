<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class GuestController extends Controller
{
    public function terminal()
    {
        return Inertia::render('Guest/Qr');
    }

    public function monitoring()
    {
        return Inertia::render('Guest/Monitoring');
    }
}

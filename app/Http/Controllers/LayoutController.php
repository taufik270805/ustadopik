<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index()
    {
        return view('dashboard.home');
    }

    public function iyey()
    {
        return view('dashboard.iyey');
    }
}

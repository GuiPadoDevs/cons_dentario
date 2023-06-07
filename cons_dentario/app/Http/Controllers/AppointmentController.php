<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard/appointment/index');
    }

    public function create()
    {
        return view('dashboard/appointment/create');
    }
}

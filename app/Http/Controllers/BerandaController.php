<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{

    public function index()
    {
        return view('Dashboard.hal-admin');
    }

    public function home_user()
    {
        return view('home');
    }

    public function kontak_admin()
    {
        return view('Dashboard.kontak-admin');
    }
}

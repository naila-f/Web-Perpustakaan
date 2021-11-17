<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function logout_admin()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login-admin');
    }
}

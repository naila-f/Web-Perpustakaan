<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{

    protected $redirectTo = '/home';


    public function halamanlogin(){
        return view('Login_admin.login-admin');
    }

    public function halamanregistrasi(){
        return view('Login_admin.registrasi-admin');
    }

    public function postlogin(Request $request){
        // dd($request->all());
        // if(Auth::attempt($request->only('email','password'))){
        //     return redirect('/beranda');
        // }
        // return redirect('/home');

        if(Auth::attempt($request->only('email','password')))
        {
            if (auth()->user()->ceklevel == 1) {
                return redirect()->route('home_user');
            }else{
                return redirect()->route('hal-admin');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect('/login-admin');
    }

    public function registrasi(){
        return view('Login_admin.registrasi-admin');
    }

    public function simpanregistrasi(Request $request){
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'level' => 'user',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);

        return view('Login_admin.login-admin');
    }
}

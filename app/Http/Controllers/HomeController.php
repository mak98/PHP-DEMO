<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        //Auth::logout();
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate(["email" => "email|exists:users"]);
        // dd($request);
        Auth::attempt($request->only("email","password"));
        // dd(Auth::user());
        return redirect()->route("dashboard");
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}

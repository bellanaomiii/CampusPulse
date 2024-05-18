<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SesiController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],
        [
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]
        );

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect()->route('dashboard.admin');
            }elseif (Auth::user()->role == 'user') {
                return redirect()->route('dashboard.user');
            }

        }else {
            return redirect('/login')->withErrors('Username dan Password tidak sesuai')->withInput();

        }
    }

    function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    function showRegistrationForm()
    {
        return view('auth.register');
    }

    function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ],
        [
            'name.required' => 'Name wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Password konfirmasi tidak cocok',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),  // Hash the password before saving
            'role' => 'user',  // Assign default role as 'user'
        ]);

        Auth::login($user);

        return redirect()->back()->with('success', 'Registrasi berhasil dilakukan! Silahkan login.');



    }
}

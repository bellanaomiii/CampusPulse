<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        echo "Halo, selamat datang di halaman Admin!";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'> Logout </a>";
    }
    function user()
    {
        echo "Halo, selamat datang di halaman User!";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'> Logout </a>";
    }
}

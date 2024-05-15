<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashAdminController extends Controller
{
    public function index()
    {
        $title = 'Dashboard Admin'; 

        return view('events.index', compact('title'));
        // Fungsi view() digunakan untuk memanggil tampilan (view) dengan nama 'dashboard.index'.
        // Data 'title' akan dilewatkan ke tampilan menggunakan fungsi compact().
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Acara;
use App\Models\Kategori;
use App\Models\Partnership;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $title = "Admin Dashboard";
        $user = auth()->user();
        $users = User::where('role', 'user')->count();
        $kategoris = Kategori::count();
        $acaras = Acara::count();
        $partnerships = Partnership::count();

        return view('AdminDashboard.utama', compact('title', 'user', 'users', 'kategoris', 'acaras', 'partnerships'));
    }

    public function members()
    {
        $title = "Members";
        $user = auth()->user();
        $users = User::where('role', 'user')->get();

        return view('AdminDashboard.members', compact('title', 'user', 'users'));
    }

    public function categories()
    {
        $title = "Categories";
        $user = auth()->user();
        $kategoris = Kategori::all();

        return view('AdminDashboard.kategori.index', compact('title', 'user', 'kategoris'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('AdminDashboard.page', [
            'title' => 'Members CampusPulse',
            'users' => $users
        ]);
    }

    public function utama()
    {
        $users = User::all();
        $usersCount = $users->count();
        return view('AdminDashboard.utama', [
            'title' => 'Main Page',
            'usersCount' => $usersCount
        ]);
    }

    public function sidebar()
    {
        $users = User::all();
        $usersCount = $users->count();
        $currentUser = Auth::user(); // Mengambil pengguna yang sedang login
        return view('UserDashboard.sidebar', [
            'title' => 'Main Page',
            'usersCount' => $usersCount,
            'currentUser' => $currentUser // Pass the current user to the view
        ]);
    }
}

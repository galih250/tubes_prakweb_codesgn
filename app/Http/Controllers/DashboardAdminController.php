<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;


class DashboardAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: isAdmin');
    }

    public function index()
    {
        return view('dashboard-admin.posts.index', [
            'posts' => Post::all()
        ]);
        // if (Auth::user()->role == 'admin') {
        //     return view('dashboard-admin.index', [
        //         'posts' => Post::all()
        //     ]);
        // } else {
        //     abort(403);
        // }
    }
}

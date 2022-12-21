<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: isAdmin');
    }

    public function index()
    {
        if (Auth::user()->role == 'admin') {
            return view('dashboard-admin.index');
        } else {
            abort(403);
        }
    }
}

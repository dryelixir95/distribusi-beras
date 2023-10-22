<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $user = User::all();
        return view('superadmin.dashboard', compact('user'));
    }

    public function stock()
    {
        return view('admin.stock.index');
    }
}

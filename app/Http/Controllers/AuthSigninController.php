<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthSigninController extends Controller
{
    public function index()
    {
        return view('admin.auth-signin');
    }
}

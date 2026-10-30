<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsCalanderController extends Controller
{
    public function index()
    {
    return view('admin.apps-calander');
    }
}

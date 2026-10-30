<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiSweetalert2Controller extends Controller
{
    public function index()
    {
        return view('admin.ui-sweetalert2');
    }
}

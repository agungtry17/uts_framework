<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiFormElementsController extends Controller
{
    public function index()
    {
        return view('admin.ui-form-elements');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiTablesDatatablesController extends Controller
{
    public function index()
    {
        return view('admin.ui-tables-datatables');
    }
}

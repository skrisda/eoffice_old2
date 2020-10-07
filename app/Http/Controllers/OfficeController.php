<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function home(Request $request)
    {
        return view('office.pages.home');
    }
}

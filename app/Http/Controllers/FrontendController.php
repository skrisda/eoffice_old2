<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }

    public function login(){
        return view('frontend.pages.login');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }
}

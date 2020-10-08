<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class OfficeController extends Controller
{
    public function home(Request $request)
    {
        $ipass = session('ipass');
        $person = Person::where('ipass','=', $ipass)->first();
        return view('office.pages.home')
            ->with(compact('person'));
    }
}

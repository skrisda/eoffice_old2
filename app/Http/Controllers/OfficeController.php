<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use PDF;

class OfficeController extends Controller
{
    public function home(Request $request)
    {
        $ipass = session('ipass');
        $person = Person::where('ipass','=', $ipass)->first();
        return view('office.pages.home')
            ->with(compact('person'));
    }

    public function pdf_index(){
        $data = ["a" => "...", "b" => "..."  ];
        $pdf = PDF::loadView('office.pages.test_pdf',$data);
        return $pdf->stream('test.pdf');
    }
}

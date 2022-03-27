<?php

namespace App\Http\Controllers;

use App\Models\Lloguers;
use Illuminate\Http\Request;
use PDF;

class ControladorLloguers extends Controller
{
    public function index()
    {
        $lloguer = Lloguers::all();
        return view('llistarLloguers', compact('lloguer'));
    }
}

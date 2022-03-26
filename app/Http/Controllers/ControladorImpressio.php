<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ControladorImpressio extends Controller
{
    public function usuaris()
    {
        $pdf = PDF::loadView('llistarUsuaris');
        return $pdf->download('usuaris.pdf');
    }
    public function clients()
    {
        $pdf = PDF::loadView('llistarClients');
        return $pdf->download('clients.pdf');
    }
    public function apartaments()
    {
        $pdf = PDF::loadView('llistarApartaments');
        return $pdf->download('apartaments.pdf');
    }
    public function lloguers()
    {
        $pdf = PDF::loadView('llistarLloguers');
        return $pdf->download('lloguers.pdf');
    }
}

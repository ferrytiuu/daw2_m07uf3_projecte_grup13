<?php

namespace App\Http\Controllers;

use App\Models\Lloguers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ControladorLloguers extends Controller
{
    public function index()
    {
        $lloguer = Lloguers::all();
        return view('llistarLloguers', compact('lloguer'));
    }

    public function show($lloguers)
    {
        $lloguers = Lloguers::all();
        $pdf = PDF::loadView('lloguersPdf', array('lloguer' => $lloguers));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('lloguers.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('afegirLloguer');
    }

    public function store(Request $request)
    {
        $nouLloguer = $request->validate([
            'dniClient' => 'required|max:255',
            'codiApartament' => 'required|max:255',
            'dataInici' => 'required|max:255',
            'horaInici' => 'required|max:255',
            'dataFinal' => 'required|max:255',
            'horaFinal' => 'required|max:255',
            'llocLliurament' => 'required|max:255',
            'llocDevolucio' => 'required|max:255',
            'preuDia' => 'required|max:255',
            'diposit' => 'required|max:255',
            'quantitatDiposit' => 'max:255',
            'tipusAsseguranca' => 'required|max:255',
        ]);
        $lloguer = Lloguers::create($nouLloguer);
        return redirect('/lloguers')->with('completed', 'Lloguer creat!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Apartaments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class ControladorApartaments extends Controller
{
    public function index()
    {
        $apartament = Apartaments::all();
        return view('llistarApartaments', compact('apartament'));
    }

    public function show($apartaments)
    {
        $apartamaments = Apartaments::all();
        $pdf = PDF::loadView('apartamentsPdf', array('apartament' => $apartamaments));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('apartaments.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('afegirApartament');
    }

    public function store(Request $request)
    {
        $nouApartament = $request->validate([
            'codiApartament' => 'required|max:255',
            'refCatastral' => 'required|max:255',
            'ciutat' => 'required|max:255',
            'barri' => 'required|max:255',
            'nomCarrer' => 'required|max:255',
            'numCarrer' => 'required|max:255',
            'pis' => 'required|max:255',
            'numLlits' => 'required|max:255',
            'numHabitacions' => 'required|max:255',
            'ascensor' => 'required|max:255',
            'calefaccio' => 'required|max:255',
            'aireAcondicionat' => 'required|max:255',
        ]);
        $apartament = Apartaments::create($nouApartament);
        return redirect('/apartaments')->with('completed', 'Apartament creat!');
    }

    public function edit($codiApartament)
    {
        $apartament = DB::table('apartaments')->where('codiApartament', $codiApartament)->first();
        return view('modificarApartament', compact('apartament'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $codiApartament
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $codiApartament)
    {
        $dades = $request->validate([
            'codiApartament' => 'required|max:255',
            'refCatastral' => 'required|max:255',
            'ciutat' => 'required|max:255',
            'barri' => 'required|max:255',
            'nomCarrer' => 'required|max:255',
            'numCarrer' => 'required|max:255',
            'pis' => 'required|max:255',
            'numLlits' => 'required|max:255',
            'numHabitacions' => 'required|max:255',
            'ascensor' => 'required|max:255',
            'calefaccio' => 'required|max:255',
            'aireAcondicionat' => 'required|max:255',
        ]);
        Apartaments::whereCodiapartament($codiApartament)->update($dades);
        return redirect('/apartaments')->with('completed', 'Apartament actualitzat');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $codiApartament
     * @return \Illuminate\Http\Response
     */

    public function destroy($codiApartament)
    {
        $apartament = Apartaments::findOrFail($codiApartament);
        $apartament->delete();
        return redirect('/apartaments')->with('completed', 'Apartament esborrat');
    }
}

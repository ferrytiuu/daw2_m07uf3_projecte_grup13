<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use DB;

class ControladorClients extends Controller
{
    public function index()
    {
        $client = Clients::all();
        return view('llistarClients', compact('client'));
    }

    public function create()
    {
        return view('afegirClient');
    }

    public function store(Request $request)
    {
        $nouClient = $request->validate([
            'dni' => 'required|max:9',
            'nomCognoms' => 'required|max:255',
            'edat' => 'required|max:3',
            'telefon' => 'required|max:13',
            'adreca' => 'required|max:255',
            'ciutat' => 'required|max:255',
            'pais' => 'required|max:255',
            'email' => 'required|max:255',
            'tipusTargeta' => 'required|max:255',
            'numTargeta' => 'required|max:255',
        ]);
        $client = Clients::create($nouClient);
        return redirect('/clients')->with('completed', 'Client creat!');
    }

    public function edit($dni)
    {
        $client = DB::table('clients')->where('dni', $dni)->first();
        return view('modificarClients', compact('client'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $codiApartament
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $dni)
    {
        $dades = $request->validate([
            'dni' => 'required|max:9',
            'nomCognoms' => 'required|max:255',
            'edat' => 'required|max:3',
            'telefon' => 'required|max:13',
            'adreca' => 'required|max:255',
            'ciutat' => 'required|max:255',
            'pais' => 'required|max:255',
            'email' => 'required|max:255',
            'tipusTargeta' => 'required|max:255',
            'numTargeta' => 'required|max:255',
        ]);
        Clients::whereDni($dni)->update($dades);
        return redirect('/clients')->with('completed', 'Client actualitzat');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $dni
     * @return \Illuminate\Http\Response
     */

    public function destroy($dni)
    {
        $client = Clients::findOrFail($dni);
        $client->delete();
        return redirect('/clients')->with('completed', 'Client esborrat');
    }
}

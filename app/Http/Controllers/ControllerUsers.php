<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class ControllerUsers extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('llistarUsuaris', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $email
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('afegirUsuari');
    }

    public function store(Request $request)
    {
        $nouUser = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required',
            'tipusTreballador' => ['required', 'string', 'max:1'],
        ]);
        $user = User::create($nouUser);
        return redirect('/users')->with('completed', 'Usuari creat!');
    }

    public function edit($email)
    {
        $user = DB::table('users')->where('email', $email)->first();
        /*$user = User::findOrFail($email);*/
        return view('modificarUsuari', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $email
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $email)
    {
        $dades = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required',
            'tipusTreballador' => ['required', 'string', 'max:1'],
        ]);
        User::whereEmail($email)->update($dades);
        return redirect('/users')->with('completed', 'Usuari actualitzat');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $email
     * @return \Illuminate\Http\Response
     */

    public function destroy($email)
    {
        $user = User::findOrFail($email);
        $user->delete();
        return redirect('/users')->with('completed', 'Usuari esborrat');
    }
}

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
     * @param  int  $email
     * @return \Illuminate\Http\Response
     */

    public function edit($email)
    {
        $user = DB::table('users')->where('email', $email)->first();
        /*$user = User::findOrFail($email);*/
        return view('modificarUsuari', compact('user'));
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

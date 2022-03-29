<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $email = auth()->user()->email;
        date_default_timezone_set('Europe/Paris');
        $time = date("H:i:s");
        User::where('email', $email)->update(array('horaEntrada' => $time));

        if (auth()->user()->tipusTreballador == 'N') {
            $details = [
                'usuari' => $email,
                'data' => $time,
            ];

            Mail::to('provesgrup13@gmail.com')->send(new \App\Mail\loginMail($details));
        }

        return redirect('menu');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {

        $email = auth()->user()->email;
        date_default_timezone_set('Europe/Paris');
        $time = date("H:i:s");
        User::where('email', $email)->update(array('horaSortida' => $time));

        if (auth()->user()->tipusTreballador == 'N') {
            $details = [
                'usuari' => $email,
                'data' => $time,
            ];

            Mail::to('provesgrup13@gmail.com')->send(new \App\Mail\logoutMail($details));
        }

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

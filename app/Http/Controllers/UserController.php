<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function login(Request $request)
    {

        $tab = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($tab, $request->all())) {
            session()->regenerate();
            $user = Auth::user();
            if ($user->profil == 'traiteur') {
                return redirect()->route();
            } else if ($user->profil == 'employes') {
                return redirect('/employes');
            } else if ($user->profil == 'admin') {
                return redirect('/admin');
            }
        }
    }

}

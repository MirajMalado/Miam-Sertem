<?php

namespace App\Http\Controllers;

use App\Models\Traiteur;
use App\Models\User;
use Illuminate\Http\Request;

class TraiteurController extends Controller
{
    public function index()
    {
        $traiteurs = Traiteur::all();
        return view('traiteur.index');
    }
    public function create()
    {
        return view('traiteur.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        dd($input);
        $user = User::create([
            'nom' => $input['nom'],
            'prenom' => $input['prenom'],
            'password' => $input['password'],
            'email' => $input['email'],
            'profil' => "traiteur",
        ]);
        Traiteur::create([
            'user_id' => $user->id
        ]);
        return redirect('/traiteur')->with('flash-message', 'Votre inscription à été bien enregistré');
    }
}



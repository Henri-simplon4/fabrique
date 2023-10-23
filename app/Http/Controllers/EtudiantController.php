<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function create(Etudiant $etudiant, Request $request)
    {
        $etudiant = new Etudiant;
        $etudiant->nom = $request['nom'];
        $etudiant->prenom = $request['prenom'];
        $etudiant->telephone = $request['telephone'];
        $etudiant->save();
        return response()->json([
            "status"=>1,
            "message"=>"Merci de vous inscrire en tant que vendeur. Nous confirmerons par e-mail une fois votre compte approuvé."
         ]);
    }

    public function list()
    {
        $etudiant = Etudiant::all();
        return response()->json($etudiant);
        return view('listeetudiant');
    }

}

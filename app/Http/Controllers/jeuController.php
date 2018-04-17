<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jeu;

class jeuController extends Controller
{
    public function index()
    {
        $jeus=jeu::all();
        return view('jeu', compact('jeus')); 

    }


    public function destroy($id)
    {
        return Jeu::destroy($id);
    }

   public function store(Request $request)
    {
            $jeu = new Jeu();
            $jeu->nomDuJeu = $request->nomDuJeu;
            $jeu->urlImage = $request->urlImage;
            $jeu->nbrPersonneMini = $request->nbrPersonneMini;
            $jeu->nbrPersonneMax = $request->nbrPersonneMax;
            $jeu->descriptionJeu = $request->descriptionJeu;
            $jeu->save();
            return redirect()->route('home')->with('message', 'Jeu ajouté, vous le verrez dorénavant visible, merci');   
    }

    public function update(Request $request, $id)
    {
    	$jeu = Jeu::find($id);
        $jeu->nomDuJeu = $request->nomDuJeu;
        $jeu->nbrPersonneMini = $request->nbrPersonneMini;
        $jeu->nbrPersonneMax = $request->nbrPersonneMax;
        $jeu->descriptionJeu = $request->descriptionJeu;
        $jeu->save();
        return $jeu;
    }
}
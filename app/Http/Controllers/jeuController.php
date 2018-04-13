<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jeu;

class jeuController extends Controller
{
    public function index()
    {
    	return view('jeu');
    }


    public function show($id)
    {
    	return Jeu::find($id);
    }

    public function destroy($id)
    {
        return Jeu::destroy($id);
    }

   public function store(Request $request)
    {
            $jeu = new Jeu();
            $jeu->nomDuJeu = $request->nomDuJeu;
            $jeu->nbrPersonneMini = $request->nbrPersonneMini;
            $jeu->nbPersMax = $request->nbPersMax;
            $jeu->descriptionJeu = $request->descriptionJeu;
            $jeu->save();
            return Jeu::find($evenement->id);       
    }

    public function update(Request $request, $id)
    {
    	$jeu = Jeu::find($id);
        $jeu->nomDuJeu = $request->nomDuJeu;
        $jeu->nbrPersonneMini = $request->nbrPersonneMini;
        $jeu->nbPersMax = $request->nbPersMax;
        $jeu->descriptionJeu = $request->descriptionJeu;
        $jeu->save();
        return $jeu;
    }
}
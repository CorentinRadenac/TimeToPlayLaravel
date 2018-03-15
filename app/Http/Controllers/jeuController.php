<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jeu;

class jeuController extends Controller
{
    public function index()
    {
    	return Jeu::all();
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
            $jeu->nbPersMax = $request->nbPersMax;
            $jeu->libelle = $request->libelle;
            $jeu->save();
            return Jeu::find($evenement->id);       
    }

    public function update(Request $request, $id)
    {
    	$jeu = Jeu::find($id);
        $jeu->nbPersMax = $request->nbPersMax;
        $jeu->libelle = $request->libelle;
        $jeu->save();
        return $jeu;
    }
}
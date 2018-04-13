<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenements;
use App\Organisation;

class evenementController extends Controller
{
    public function index()
    {
    	return Evenements::all();
    }


    public function show($id)
    {
    	return Evenements::find($id);
    }

    public function destroy($id)
    {
        return Evenements::destroy($id);
    }

   public function store(Request $request) // reussire a passer en paramétre l'id Orga 
    {
            $evenement = new Evenements();
            $evenement->nbPersMini = $request->nbPersMini;
            $evenement->nbPersMax = $request->nbPersMax;
            $evenement->jeu = $request->jeu;
            $evenement->descriptionEvent = $request->descriptionEvent;
            $evenement->idOrga =$request->idOrga;
            $evenement->save();
            return Evenements::all();       
    }

    public function update(Request $request, $id)
    {
    	$evenement = Evenements::find($id);
        $evenement->nbPersMini = $request->nbPersMini;
        $evenement->nbPersMax = $request->nbPersMax;
        $evenement->jeu = $request->jeu;
        $evenement->description = $request->description;
        $evenement->save();
        return $evenement;
    }
}
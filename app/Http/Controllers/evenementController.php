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


    public function destroy($id)
    {
        return Evenements::destroy($id);
    }
    public function show($id)
    {
        /*$evenements = Evenements::table("evenements")
        ->where('idOrga', $id)
        ->get(); Retourner l'evenement selectionner avec idOrga */
        return view('infoEvenements'); 
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
            return redirect()->route('home')->with('message', 'Evenement crée. Retrouvez le dans votre rubrique pour le modifier');      
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
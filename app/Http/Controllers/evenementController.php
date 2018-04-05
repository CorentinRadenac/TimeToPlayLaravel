<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenements;

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

   public function store(Request $request)
    {
            $evenement = new Evenements();
            $evenement->nbPersMax = $request->nbPersMax;
            $evenement->jeu = $request->jeu;
            $evenement->description = $request->description;
            $evenement->save();
            return Evenements::find($evenement->id);       
    }

    public function update(Request $request, $id)
    {
    	$evenement = Evenements::find($id);
        $evenement->nbPersMax = $request->nbPersMax;
        $evenement->jeu = $request->jeu;
        $evenement->description = $request->description;
        $evenement->save();
        return $evenement;
    }
}
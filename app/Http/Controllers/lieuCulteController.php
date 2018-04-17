<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lieu_Culte;

class lieuCulteController extends Controller
{
    public function index()
    {
    	return Lieu_Culte::all();
    }

    public function destroy($id)
    {
        return Lieu_Culte::destroy($id);
    }

   public function store(Request $request)
    {
            $lieu_culte = new Lieu_Culte();
            $lieu_culte->adresse = $request->adresse;
            $lieu_culte->prochaineDate = $request->prochaineDate;
            $lieu_culte->NomVille = $request->NomVille;
            $lieu_culte->CodePostal = $request->CodePostal;
            $lieu_culte->save();
            return Lieu_Culte::find($lieu_culte->id);       
    }

    public function update(Request $request, $id)
    {
    	$lieu_culte = Lieu_Culte::find($id);
        $lieu_culte->adresse = $request->adresse;
        $lieu_culte->prochaineDate = $request->prochaineDate;
        $lieu_culte->NomVille = $request->NomVille;
		$lieu_culte->CodePostal = $request->CodePostal;
        $lieu_culte->save();
        return $lieu_culte;
    }
}
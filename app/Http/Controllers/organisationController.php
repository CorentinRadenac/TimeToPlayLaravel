<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Organisation;
use App\User;

class organisationController extends Controller
{
    public function index()
    {
        return view('ajoutEvent');
    	//return Organisation::all();
    }


    public function show($id)
    {
    	return Organisation::find($id);
    }

    public function destroy($id)
    {
        return Organisation::destroy($id);
    }

   public function store(Request $request)
    {
            $organisation = new Organisation();
            $user = Auth::user();
            $organisation->dateEtHeures = $request->dateEtHeures;
            $organisation->adresse = $request->adresse;
            $organisation->NomVille = $request->NomVille;
            $organisation->CodePostal = $request->CodePostal;
            $organisation->idUser = $user->id;
            $organisation->save();
            return view('creeEvent', ['organisation' => $organisation]);  // return l'id organisation 
    }

    public function update(Request $request, $id)
    {
    	$organisation = Organisation::find($id);
        $organisation->dateEtHeures = $request->dateEtHeures;
        $organisation->adresse = $request->adresse;
        $organisation->NomVille = $request->NomVille;
		$organisation->CodePostal = $request->CodePostal;
        $organisation->save();
        return $organisation;
    }
}
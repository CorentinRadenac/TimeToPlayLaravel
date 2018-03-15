<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisation;

class organisationController extends Controller
{
    public function index()
    {
    	return Organisation::all();
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
            $organisation->dateEtHeures = $request->dateEtHeures;
            $organisation->lieu = $request->lieu;
            $organisation->NomVille = $request->NomVille;
            $organisation->CodePostal = $request->CodePostal;
            $organisation->save();
            return Organisation::find($organisation->id);       
    }

    public function update(Request $request, $id)
    {
    	$organisation = Organisation::find($id);
        $organisation->dateEtHeures = $request->dateEtHeures;
        $organisation->lieu = $request->lieu;
        $organisation->NomVille = $request->NomVille;
		$organisation->CodePostal = $request->CodePostal;
        $organisation->save();
        return $organisation;
    }
}
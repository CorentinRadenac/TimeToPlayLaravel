<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Organisation;
use App\User;
use App\Evenements;

class organisationController extends Controller
{
    public function index()
    {
        //return view('ajoutEvent');
    	$organisations = Organisation::where('idUser', Auth::user()->id)->get();
        return view('vosEvenements', compact('organisations'));
    }
    public function indexall()
    {
        $organisations = Organisation::all();
        return view('toutLesEvenements', compact('organisations'));
    }


    public function destroy($id)
    {

        Organisation::destroy($id);
        //$organisation->delete();

        return redirect()->route('home')->with('message', 'Evenement Supprimé.'); 

    }

   public function store(Request $request)
    {
            $organisation = new Organisation();
            $user = Auth::user();
            $organisation->dateEtHeures = $request->dateEtHeures;
            $organisation->adresse = $request->adresse;
            $organisation->NomVille = $request->NomVille;
            $organisation->codePostal = $request->CodePostal;
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
		$organisation->codePostal = $request->CodePostal;
        $organisation->save();
        return $organisation;
    }
}
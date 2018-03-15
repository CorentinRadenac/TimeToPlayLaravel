<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personne;

class personneController extends Controller
{
    public function index()
    {
    	return Personne::all();
    }


     public function show($id)
    {
    	return Personne::find($id);
    }

    public function destroy($id)
    {
        return Personne::destroy($id);
    }

   public function store(Request $request)
    {
        if((Personne::where('email',$request->email)->count()) > 0 )
        {
            //mail deja utilisé
            return abort(400, 'Mail indisponible');
        }
        else
        {
            $personne = new Personne();
            $personne->nom = $request->nom;
            $personne->prenom = $request->prenom;
            $personne->age = $request->age;
            $personne->email = $request->email;
            $personne->motDePasse = $request->motDePasse;
            $personne->save();
            return Personne::find($personne->id);
        }       
    }

    public function update(Request $request, $id)
    {
    	$personne = Personne::find($id);
    	$personne->nom = $request->nom;
        $personne->prenom = $request->prenom;
		$personne->age = $request->age;
		$personne->email = $request->email;
        $personne->motDePasse = $request->motDePasse;
        $personne->save();
        return $personne;
    } 
}

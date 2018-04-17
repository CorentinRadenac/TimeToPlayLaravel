<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    public function index()
    {
    	return User::all();
    }


    public function destroy($id)
    {
        return User::destroy($id);
    }

   public function store(Request $request)
    {
        if((User::where('email',$request->email)->count()) > 0 )
        {
            //mail deja utilisé
            return abort(400, 'Mail indisponible');
        }
        else
        {
            $personne = new User();
            $personne->nom = $request->nom;
            $personne->prenom = $request->prenom;
            $personne->age = $request->age;
            $personne->email = $request->email;
            $personne->password = $request->password;
            $personne->save();
            return User::find($personne->id);
        }       
    }

    public function update(Request $request, $id)
    {
    	$personne = User::find($id);
    	$personne->nom = $request->nom;
        $personne->prenom = $request->prenom;
		$personne->age = $request->age;
		$personne->email = $request->email;
        $personne->password = $request->password;
        $personne->save();
        return $personne;
    } 
}

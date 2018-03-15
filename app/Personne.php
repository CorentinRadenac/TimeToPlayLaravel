<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
	protected $fillable = [
	'nom', 'prenom', 'age', 'email', 'motDePasse'
];
}

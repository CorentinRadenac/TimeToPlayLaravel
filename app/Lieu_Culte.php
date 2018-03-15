<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lieu_Culte extends Model
{
	protected $fillable = [
	'adresse', 'prochaineDate', 'NomVille', 'CodePostal'
];
}

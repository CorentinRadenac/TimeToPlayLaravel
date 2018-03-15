<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
	protected $fillable = [
	 'nbrPersonneMax', 'libelle'
];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenements extends Model
{
	protected $fillable = [
	 'nbPersMax', 'jeu', 'description'
];
}

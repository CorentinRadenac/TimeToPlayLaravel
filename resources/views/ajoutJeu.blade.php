@extends('layouts.app')

@section('content')

<div class="form-group">
        {!! Form::open(['url' => 'jeu'] ) !!}
        
      <div class='form-group'>
        <label for="nomDuJeu">Nom de jeu</label>
        <input class="form-control" type="text" name="nomDuJeu" required>
    </div>
        <div class='form-group'>
        <label for="urlImage">Copier ici l'url de l'image du jeu</label>
        <input class="form-control" type="text" name="urlImage" required>
    </div>
    <div class='form-group'>
        <label for="nbrPersonneMini">Nombre de personnes minimum</label>
        <input class="form-control" type="number" name="nbrPersonneMini" required>
    </div>
    <div class='form-group'>
      <label for="nbrPersonneMax">Nombre de personnes maximum</label>
      <input class="form-control" type="number" name="nbrPersonneMax" required>
    </div>
    <div class='form-group'>
      <textarea class="form-control" name="descriptionJeu" cols="35" wrap="soft" required> Description du jeu</textarea>
    </div>
    <div class='form-group'>
        <input class="btn btn-success" type="submit" value="Ajouter">
    </div>

    {!! Form::close() !!}

</div>


@endsection
@extends('layouts.app')

@section('content')

<div class="form-group">
       {!! Form::open(['url' => 'evenement'] ) !!}
    <div class='form-group'>
         <label for="nbPersMini">Nombre de personne Mini?</label>
         <input class="form-control" type="number" name="nbPersMini" required>
    </div>
    <div class='form-group'>
         <label for="nbPersMax">ombre de personne maxi?</label>
         <input class="form-control" type="number" name="nbPersMax" required>
    </div>
    <div class='form-group'>
         <label for="jeu">Jeu principale proposée?</label>
         <input class="form-control" type="text" name="jeu" required>
    </div>
    <div class='form-group'>
         <label for="descriptionEvent">Description si d'autre jeux ou info a passer</label>
         <textarea class="form-control" name="descriptionEvent" cols="40" wrap="soft" required> Description ici</textarea>
    </div>
        <input type="hidden" value={{ $organisation->id }} name=idOrga >
        <input class="btn btn-success" type="submit" value="Terminer">
    {!! Form::close() !!}

</div>
<!--
        {!! Form::label('title', 'Nombre de personne Mini?') !!}
        {!! Form::number('nbPersMini') !!}
        {!! Form::label('title', 'Nombre de personne maxi?') !!}
        {!! Form::number('nbPersMax') !!}
        {!! Form::label('title', 'Jeu principale proposée?') !!}
        {!! Form::text('jeu') !!}
        {!! Form::label('title', 'Description si d autre jeux ou info a passer') !!}
        {!! Form::textarea('descriptionEvent') !!}
    -->
@endsection

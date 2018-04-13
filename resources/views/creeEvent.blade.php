@extends('layouts.app')

@section('content')

<div class="form-group">
       {!! Form::open(['url' => 'evenement'] ) !!}


        {!! Form::label('title', 'Nombre de personne Mini?') !!}
        {!! Form::number('nbPersMini') !!}
        {!! Form::label('title', 'Nombre de personne maxi?') !!}
        {!! Form::number('nbPersMax') !!}
        {!! Form::label('title', 'Jeu principale proposée?') !!}
        {!! Form::text('jeu') !!}
        {!! Form::label('title', 'Description si d autre jeux ou info a passer') !!}
        {!! Form::textarea('descriptionEvent') !!}
        <input value={{ $organisation->id }} name=idOrga >
        {!! Form::submit('Terminer') !!}

    {!! Form::close() !!}
</div>
</div>


@endsection

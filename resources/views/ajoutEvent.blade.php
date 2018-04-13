@extends('layouts.app')

@section('content')

<div class="form-group">
      {!! Form::open(['url' => 'organisation']) !!}
      <div class='form-group'>
        {!! Form::label('title', 'Selection de l heures et la date') !!}
        {!! Form::date('dateEtHeures', \Carbon\Carbon::now() , ['required' => true, 'class' => 'form-control']) !!}
    </div>
    <div class='form-group'>
        {!! Form::label('title', 'Selection de l adresse') !!}
        {!! Form::text('adresse' ,null, ['required' => true])!!}
    </div>
    <div class='form-group'>
        {!! Form::label('title', 'Selection de la ville') !!}
        {!! Form::text('NomVille' ,null, ['required' => true])!!}
    </div>
    <div class='form-group'>
        {!! Form::label('title', 'Code postal') !!}
        {!! Form::number('CodePostal' ,null, ['required' => true])!!}
    </div>
    <div class='form-group'>
        {!! Form::submit('Passer a l étape 2 !') !!}
    </div>

    {!! Form::close() !!}
</div>


@endsection

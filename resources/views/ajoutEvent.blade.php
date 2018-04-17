@extends('layouts.app')

@section('content')

<div class="form-group">
      {!! Form::open(['url' => 'organisation']) !!}
      <div class='form-group'>
        <label for="dateEtHeures">Selection de l'heures et de la date</label>
        <!-- {!! Form::label('title', 'Selection de l heures et la date') !!}  -->
        <input class="form-control" type="date" name="dateEtHeures" required>
        <!-- {!! Form::date('dateEtHeures', \Carbon\Carbon::now() , ['required' => true, 'class' => 'form-control']) !!} -->
    </div>
    <div class='form-group'>
        <label for="adresse">Selection de l'adresse</label>
      <!--  {!! Form::label('title', 'Selection de l adresse') !!} -->
        <input class="form-control" type="text" name="adresse" required>
       <!-- {!! Form::text('adresse' ,null, ['required' => true])!!} -->
    </div>
    <div class='form-group'>
      <label for="NomVille">Selection de la ville</label>
        <!-- {!! Form::label('title', 'Selection de la ville') !!}
        {!! Form::text('NomVille' ,null, ['required' => true])!!} -->
      <input class="form-control" type="text" name="NomVille" required>
    </div>
    <div class='form-group'>
      <label for="CodePostal">Code Postal</label>
       <!-- {!! Form::label('title', 'Code postal') !!}
        {!! Form::number('CodePostal' ,null, ['required' => true])!!} -->
      <input class="form-control" type="number" name="CodePostal" required>
    </div>
    <div class='form-group'>
        <input class="btn btn-success" type="submit" value="Passer a l'etape 2">
       <!-- {!! Form::submit('Passer a l étape 2 !') !!} -->
    </div>

    {!! Form::close() !!}
</div>


@endsection

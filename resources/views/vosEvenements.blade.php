@extends('layouts.app')

@section('content')

      @foreach($organisations as $organisation)

<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <tr>
      <div class="form-group">
           		<p align="center"> Date : {{$organisation->dateEtHeures}} </p>
      <div class="form-group">
                <p align="center"> Adresse : {{$organisation->adresse}} </p>
      </div>
      <div class="form-group">
                <p align="center"> Ville : {{$organisation->NomVille}} </p>
      </div>
      <div class="form-group">
                <p align="center"> Code Postal : {{$organisation->codePostal}} </p>
      <center><a class="btn btn-danger" href="{{Route('organisation.destroy',['id' => $organisation->id])}}">Supprimer</a></center>
      </div>
      </tr>
        </div>
    </div>
</div>

      @endforeach

@endsection

 
@extends('layouts.app')

@section('content')

      @foreach($organisations as $organisation)


<center><a class="btn btn-info" href="{{Route('evenement.info',['id' => $organisation->id])}}">Information supplémentaire</a></center>


<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
           	<tr>
      <div class="form-group">
                <p align="center"> {{$organisation->dateEtHeures}} </p>
            </div>
      <div class="form-group">
                <p align="center"> {{$organisation->NomVille}} </p>
            </div>
            </tr>
          </div>
        </div>
      </div>
           
<!--      		<a class="btn btn-danger" href="{{Route('organisation.destroy',['id' => $organisation->id])}}">Supprimer</a> -->


      @endforeach

@endsection
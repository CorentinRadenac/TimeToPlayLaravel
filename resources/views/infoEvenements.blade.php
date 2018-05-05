@extends('layouts.app')

@section('content')


      @foreach($evenements as $evenement)

<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <tr>
      <div class="form-group">
         <p align="center"> <u>Nombre de personnes minimum :</u> </br> <center>{{$evenement->nbPersMini}} </p></center>
      </div>
     <div class="form-group">
         <p align="center"> <u>Nombre de personnes maximum :</u> </br> <center>{{$evenement->nbPersMax}}</p></center>
     </div>
     <div class="form-group">
         <p align="center"> <u>Jeu principale proposé :</u> </br> <center>{{$evenement->jeu}}</p></center>
     </div>
     <div class="form-group">
         <p align="center"> <u>Description supplémentaire :</u> </br> <center>{{$evenement->descriptionEvent}}</p></center>
     </div>
     <center><a class="btn btn-success">Inscription a l'évenement</a>
     <a class="btn btn-danger" href ="{{ URL::previous() }}" >Retour</a></center>
    </div>
  </div>
</div>


      @endforeach


@endsection
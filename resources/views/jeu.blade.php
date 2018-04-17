@extends('layouts.app')

@section('content')

<center><td><button type="button" class="btn btn-success" onclick="location.href='{{ url('ajoutJeu') }}'">Ajouter un jeu</button></td></center>


      @foreach($jeus as $jeu)
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="form-group">
         <h3 align="center">{{ $jeu->nomDuJeu }} </h3>
     </div>
      <div class="form-group">
        <p align="center"><img src={{ $jeu->urlImage }} /></p>
      </div>
     <div class="form-group">
         <p align="center"> Nombre de personnes mini : {{ $jeu->nbrPersonneMini }}</p>
     </div>
     <div class="form-group">
         <p align="center"> Nombre de personnes maxi : {{ $jeu->nbrPersonneMax }}</p>
     </div>
     <div class="form-group">
         <p align="center"> Description du jeu : {{ $jeu->descriptionJeu }}</p>
      </div>
    </div>
  </div>
</div>

      @endforeach

@endsection

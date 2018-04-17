@extends('layouts.app')

@section('content')

      @foreach($organisations as $organisation)

		<div>
           	<tr>
            <div>
                <p align="center"> {{$organisation->adresse}} </p>
            </div>
            <div>
                <p align="center"> {{$organisation->NomVille}} </p>
            </div>
            <div>
                <p align="center"> {{$organisation->codePostal}} </p>
        	</div>
            </tr>
           
      		<a class="btn btn-danger" href="{{Route('organisation.destroy',['id' => $organisation->id])}}">Supprimer</a>
        </div>

      @endforeach

@endsection
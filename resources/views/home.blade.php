@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }} 
                    </div>
                    @endif
                    <td><button class="btn btn-primary" onclick="location.href='{{ url('ajoutEvent') }}'">Organiser un evenement</button></td>
                    <td><button class="btn btn-primary" onclick="location.href='{{ url('jeu') }}'">Le brocabrac des jeux</button></td>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

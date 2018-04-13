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
                    <td><button onclick="location.href='{{ url('organisation') }}'">Organiser un evenement</button></td>
                    <td><button onclick="location.href='{{ url('jeu') }}'">Le brocabrac des jeux</button></td>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('task.layout')

@section('content')


<div class="jumbotron container">

    <p> Stauts is open by default.</p>

    <a class="btn btn-light" href="{{ route('tasks.create')}}" role="button">Close task  </a>
    <a class="btn btn-light" href="{{ route('tasks.create')}}" role="button">Reopen task  </a>
    <a class="btn btn-light" href="{{ route('tasks.create')}}" role="button">Resolve  </a>




  </div>

@endsection

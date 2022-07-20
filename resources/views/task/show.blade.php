@extends('task.layout')

@section('content')

<div class="container"   style="padding-top: 12%">



    <div class="card" style="width: 18rem; ">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Title : {{ $task->title }}</li>
                  <li class="list-group-item">Description : {{ $task->description }}</li>

                </ul>


            <a href="{{ route('tasks.index')}}"> back</a>
        </div>
      </div>




@endsection

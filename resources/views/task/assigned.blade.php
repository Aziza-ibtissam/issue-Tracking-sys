@extends('task.layout')

@section('content')

<div class="container"   style="padding-top: 12%">

    <div class="container">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col" style="width:400px">user</th>
                <th scope="col" style="width:100px">developer</th>
                <th scope="col" style="width:100">task_title</th>
              </tr>
            </thead>
            <thead>
                <tr>
                <td>{{ $task->ownerUser->name}}</td>
                <td>{{ $task->userassigned->name }}</td>
                <td>{{ $task->title }}</td>
                </tr>
            </thead>

        </table>



            <a href="{{ route('tasks.index')}}" role="button"> back</a>
        </div>
      </div>




@endsection

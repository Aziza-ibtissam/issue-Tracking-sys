@extends('task.layout')

@section('content')


<div class="jumbotron container">

    <p>Desplay Task</p>
    <a class="btn btn-info" href="{{ route('tasks.index')}}" role="button">Home  </a>


  </div>


  <div class="container">
      @if ($message = Session::get('success'))
      <div class="alert alert-primary" role="alert">
        {{$message}}
        </div>
      @endif

  </div>


  <div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">owner_id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col" style="width: 400px">Actions</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($tasks as $item)
            <tr>
                <th scope="row">{{$item->owner_id}}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}   </td>
                <td>{{ $item->status }}</td>




                <td>
                    <div class="row">
                    <div class="col-sm">
                        <a  class="btn btn-primary" href="{{ route('task.back.from.trash',$item->id)}}"> Back</a>
                        <a  class="btn btn-danger" href="{{ route('task.delete.from.trash',$item->id)}}"> Delete</a>


                    </div>



                      </div>


                </td>
              </tr>
            @endforeach

        </tbody>
      </table>

     {!! $tasks->links() !!}
  </div>

@endsection

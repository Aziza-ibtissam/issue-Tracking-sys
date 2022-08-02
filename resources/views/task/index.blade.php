@extends('task.layout')

@section('content')


<div class="jumbotron container">

@if (Auth :: user()->user_type =='admin')
  <h4>Admin Page</h4>
    <a class="btn btn-info" href="{{ url('/home')}}" role="button">Home </a>
    <a class="btn btn-light" href="{{ route('tasks.index')}}" role="button">All Task </a>
    <a class="btn btn-light" href="{{ route('users.index')}}" role="button">All Users </a>


    @elseif (Auth :: user()->user_type =='user')
    <h4>All TASKS</h4>
    <a class="btn btn-light" href="{{ url('/home')}}" role="button">Home </a>

    <a class="btn btn-info" href="{{ route('tasks.create')}}" role="button">Add Task  </a>
    <a class="btn btn-info" href="" role="button">Assing task  </a>
    @else
    <a class="btn btn-light" href="{{ url('/home')}}" role="button">Home </a>
    <a class="btn btn-info" href="{{ route('assigned')}}" role="button">Assigned  </a>
    <a class="btn btn-info" href="{{ route('tasks.index')}}" role="button">All Task </a>
    @endif

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
            <th scope="col" style="width: 50px">Name</th>
            <th scope="col" style="width: 300px">Title</th>
            <th scope="col">Status</th>

            <th scope="col" style="width: 500px">Actions</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($tasks as $item)
            <tr>


                <th scope="row">{{$item->ownerUser->name}}

                </th>
                <td>{{ $item->title }}</td>

                <td>{{ $item->status }}</td>



                <td>
                    <div class="row">
                         <div class="col-sm">
                           <a  class="btn btn-primary" href="{{ route('tasks.show',$item->id)}}"> Display  </a>

                        </div>


                        <div class="col-sm">
                            <a  class="btn btn-success" href="{{ route('tasks.edit',$item->id)}}"> Edit  </a>

                        </div>


                        <div class="col-sm">
                             @if ($item ->owner_id == Auth::id()|| Auth :: user()->user_type =='admin')
                            &nbsp;&nbsp;
                            <a  class="btn btn-danger" href="{{ route('soft.delete',$item->id)}}"> Delete </a>
                             @endif
                        </div>

                        {{--   @if ($item ->status =='open'  )
                           <div class="col-sm">
                           <a class="btn btn-light" href="{{ route('reSloveTask',$item->id)}}" >Reslove   </a>
                           </div>

                           @elseif ($item ->status =='close')
                           <div class="col-sm">
                           <a class="btn btn-light" href="{{ route('reOpenTask' , $item->id)}}" >Reopen   </a>
                          </div>
                           @elseif ($item ->status =='reslove')
                           <div class="col-sm">

                            <a class="btn btn-light" href="{{ route('closeTask' , $item->id)}}" >Close   </a>
                        </div>
                            <div class="col-sm">
                           <a class="btn btn-light" href="{{ route('reOpenTask' , $item->id)}}" >Reopen  </a>
                           </div>

                           @endif
                           --}}




                    </div>


                </td>
              </tr>
            @endforeach

        </tbody>
      </table>

     {!! $tasks->links() !!}
  </div>

@endsection

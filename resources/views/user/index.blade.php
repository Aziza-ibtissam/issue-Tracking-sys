@extends('user.layout')

@section('content')


<div class="jumbotron container">

    <h4>All Users</h4>
    <a class="btn btn-info" href="{{ route('users.create')}}" role="button">Add Users  </a>


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
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">User type</th>
            <th scope="col">E-Mail</th>
            <th scope="col" style="width: 400px">Actions</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($users as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->user_type }}   </td>
                <td>{{ $item->email }}</td>



                <td>
                    <div class="row">



                        <div class="col-sm">
                            <a  class="btn btn-success" href="{{ route('users.edit',$item->id)}}"> Edit  </a>

                        </div>


                        <div class="col-sm">

                            <a  class="btn btn-danger" href="{{ route('soft.delete',$item->id)}}"> Delete </a>

                        </div>


                      </div>


                </td>
              </tr>
            @endforeach

        </tbody>
      </table>

     {!! $users->links() !!}
  </div>

@endsection

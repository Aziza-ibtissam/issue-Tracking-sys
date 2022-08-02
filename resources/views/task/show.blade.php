@extends('task.layout')

@section('content')

<div class="container"   style="padding-top: 12%">

    <div class="container">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col" style="width:400px">Description</th>
                <th scope="col" style="width:100px">Status</th>
                <th scope="col" style="width:100">seen</th>
                <th scope="col" style="width:400">Action</th>
              </tr>
            </thead>
            <thead>
                <tr>
                <td>{{ $task->description }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->seen }}</td>
                <td>
                    <div class="row">
                      @if ($task ->owner_id == Auth::id())
                            @if ($task ->status =='open')
                              <div class="col-sm">
                                <a class="btn btn-light" href="{{ route('reSloveTask',$task->id)}}" >Reslove   </a>
                              </div>

                            @elseif ($task ->status =='close')
                              <div class="col-sm">
                                <a class="btn btn-light" href="{{ route('reOpenTask' , $task->id)}}" >Reopen   </a>
                               </div>
                            @elseif ($task->status =='reslove')
                               <div class="col-sm">

                                 <a class="btn btn-light" href="{{ route('closeTask' , $task->id)}}" >Close   </a>
                               </div>
                               <div class="col-sm">
                                 <a class="btn btn-light" href="{{ route('reOpenTask' , $task->id)}}" >Reopen  </a>
                                </div>

                           @endif
                            <div class="col-sm">
                                <a class="btn btn-light" href="{{ route('assignto' , $task->id)}}">Assignto</a>
                            </div>



                         @endif


                    </div>


                </td>
              </tr>

        </table>



            <a href="{{ route('tasks.index')}}" role="button"> back</a>
        </div>
      </div>




@endsection

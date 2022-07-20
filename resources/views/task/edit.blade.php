@extends('task.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">

          <p class="card-text">  <span><a href="{{ route('tasks.index')}}"> back</a> </span>     Title : {{ $task->title }}  </p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">
<form action="{{ route('tasks.update', $task->id)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
          <label for="exampleFormControlInput1">  Title</label>
          <input type="text" name="title" value="{{ $task->title  }} " class="form-control"  placeholder="Title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">  Description</label>
            <input type="text" name="description" value="{{ $task->description  }} "  class="form-control"  placeholder="Description">
          </div>



        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>

        </div>



    </form>
</div>
@endsection

@extends('task.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">
          <p class="card-text">Create Task</p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">
<form action="{{ route('tasks.store')}}" method="POST">
    @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1"> Title</label>
          <input type="text" name="title" class="form-control"  placeholder="">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">  Description</label>
            <textarea class="form-control" name="description"   rows="3"></textarea>
          </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>

        </div>



    </form>
</div>





@endsection

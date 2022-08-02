@extends('task.layout')

@section('content')
<div class="container"   style="padding-top: 12%">


      <div class="container">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Assign To</th>
                <th scope="col">Name</th>
                <th scope="col">E-Mail</th>
              </tr>
            </thead>
-
            <tbody>

                @foreach ($users as $item)
                <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"  name ="assignto"value="id" id="flexCheckDefault">
                    </th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <tr>
                </tbody>
                @endforeach


   </div>

   <div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>

</div>
</div>

@endsection

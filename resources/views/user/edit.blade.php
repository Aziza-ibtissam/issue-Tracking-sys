@extends('user.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">

          <p class="card-text">  <span><a href="{{ route('users.index')}}"> back</a> </span> </p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">
<form action="{{ route('users.update', $user->id)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
          <label for="exampleFormControlInput1">  name</label>
          <input type="text" name="name" value="{{ $user->name  }} " class="form-control"  placeholder="Title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">  email</label>
            <input type="email" name="email" value="{{ $user->email  }} "  class="form-control"  placeholder="Description">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">  password</label>
            <input type="password" name="password" value="{{ $user->password  }} "  class="form-control"  placeholder="Description">
        </div>
        <div>
            <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

        </div>
        <div class="contact100-form-select">

            <label  for="user_type"> </label>
                <select name="user_type">
                    <option value="user_type">user_type</option>
                    <option value="user">user</option>
                    <option value="developer">developer</option>
                    <option value="admin">admin</option>
                </select>

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>

        </div>



    </form>
</div>
@endsection

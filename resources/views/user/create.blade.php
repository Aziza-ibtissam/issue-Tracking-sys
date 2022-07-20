@extends('user.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">
          <p class="card-text">Create a user.</p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">
<form action="{{ route('users.store')}}" method="POST">
    @csrf
        <div class="form-group">
            <div class="wrap-input100 validate-input">

                <input id="name" type="text" class="input100" @error('name') is-invalid @enderror placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

        </div>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100"  @error('email') is-invalid @enderror type="email" name="email" placeholder="E-Mail Address">
            <span class="focus-input100" data-placeholder="&#9993;"></span>
     @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
             @enderror
        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100"  @error('password') is-invalid @enderror type="password" name="password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="wrap-input100 validate-input">
            <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>

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
            <button type="submit" class="btn btn-primary">Save</button>

        </div>



    </form>
</div>





@endsection

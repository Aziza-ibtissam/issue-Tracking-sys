@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="col text-center" style="center">
                    <a class="btn btn-info" href="{{ route('tasks.index')}}" role="button">go  </a>

                </div>






            </div>
        </div>
    </div>
</div>
@endsection


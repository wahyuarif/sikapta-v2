@extends('layouts.app')

@section('content')

<h3>Welcome to Sikapta</h3>

@if(session('msg'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<form action="{{ route('auth.login') }}" method="POST">
    <!-- ---- -->

    {{ csrf_field() }}

    <!-- ----- -->

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="email" aria-describedby="email">
    <small id="email" class="form-text text-muted">We'l share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection


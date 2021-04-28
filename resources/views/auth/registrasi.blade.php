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


<form action="{{ route('auth.store') }}" method="POST">
    <!-- ---- -->

    {{ csrf_field() }}

    <!-- ----- -->

  <div class="form-group">
  <label for="nim">nim</label>
    <input 
      type="text" 
      name="nim" 
      value="{{ old('nim') }}" 
      class="form-control @if($errors->has('nim')) is-invalid @endif" 
      id="nim" 
      aria-describedby="nim">
      @if($errors->has('nim'))
      <div id="validationServer05Feedback" class="invalid-feedback">
        {{ $errors->first('nim') }}
      </div>
      @endif
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input 
      type="text" 
      name="email" 
      value="{{ old('email') }}" 
      class="form-control @if($errors->has('email')) is-invalid @endif" 
      id="email" 
      aria-describedby="email">
      @if($errors->has('email'))
      <div id="validationServer05Feedback" class="invalid-feedback">
        {{ $errors->first('email') }}
      </div>
      @endif
  </div>

  <div class="form-group">
    <label for="prodi">Prosi</label>
    <select 
      class="custom-select"
      name="prodi"
      >
      @foreach($prodi as $p)
        <option value="{{ $p->kode_prodi }}">{{ $p->kode_prodi }} . {{ $p->prodi }} </option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="password1">Password</label>
    <input 
      type="password"
      name="password1"
      class="form-control @if($errors->has('email')) is-invalid @endif"
      id="password1">
      @if($errors->has('password1'))
      <div id="validationServer05Feedback" class="invalid-feedback">
        {{ $errors->first('password1') }}
      </div>
      @endif
  </div>
  
  <div class="form-group">
    <label for="password2">Konfirmasi Password</label>
    <input 
      type="password"
      name="password2" 
      class="form-control @if($errors->has('email')) is-invalid @endif" 
      id="password2">
      @if($errors->has('password2'))
      <div id="validationServer05Feedback" class="invalid-feedback">
        {{ $errors->first('password2') }}
      </div>
      @endif
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection


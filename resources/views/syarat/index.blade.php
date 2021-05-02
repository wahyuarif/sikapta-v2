
@extends('apps.layout')
@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Sikapta.</h1>
        <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>
    <form action="{{ route('syarat.store') }}" method="post" enctype="multipart/form-data">
    {{  csrf_field() }}
    <!-- ------- -->
    <div class="form-group row">
        <label for="upload_krs" class="col-sm-4 col-form-label float-right">Upload Krs</label>
        <div class="col-sm-8">
        <input 
            type="file"
            name="transkrip"
            class="form-control @if($errors->has('transkrip')) is-invalid @endif" 
            id="upload_krs" 
            placeholder="Upload krs"
            >
            @if($errors->has('transkrip'))
            <div id="validationServer05Feedback" class="invalid-feedback">
                {{ $errors->first('transkrip') }}
            </div>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="slip_pembayaran" class="col-sm-4 col-form-label float-right">Slip pembayaran</label>
        <div class="col-sm-8">
        <input 
            type="file"
            name="slip_pembayaran" 
            class="form-control" 
            id="slip_pembayaran" 
            placeholder="Upload slip pembayaran"
            >
            @if($errors->has('slip_pembayaran'))
            <div id="validationServer05Feedback" class="invalid-feedback">
                {{ $errors->first('slip_pembayaran') }}
            </div>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="surat_ijin_survey" class="col-sm-4 col-form-label float-right">Surat Ijin Survey</label>
        <div class="col-sm-8">
        <input 
            type="file"
            name="surat_ijin_survey" 
            class="form-control" 
            id="surat_ijin_survey" 
            placeholder="Upload Surat Ijin Survey"
            >
            @if($errors->has('surat_ijin_survey'))
            <div id="validationServer05Feedback" class="invalid-feedback">
                {{ $errors->first('surat_ijin_survey') }}
            </div>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-8">
            <button type="submit" class="btn btn-primary mb-2 float-left">Upload</button>
        </div>
    </div>
</form>
@endsection
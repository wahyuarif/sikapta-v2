@extends('apps.layout')
@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Sikapta.</h1>
        <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>
    <form>
    <div class="form-group row">
        <label for="upload_krs" class="col-sm-4 col-form-label float-right">Upload Krs</label>
        <div class="col-sm-8">
        <input type="file" class="form-control" id="upload_krs" placeholder="Upload krs">
        </div>
    </div>
    <div class="form-group row">
        <label for="slip_pembayaran" class="col-sm-4 col-form-label float-right">Slip pembayaran</label>
        <div class="col-sm-8">
        <input type="file" class="form-control" id="slip_pembayaran" placeholder="Upload slip pembayaran">
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


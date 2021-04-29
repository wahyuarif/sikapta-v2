<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>SIKAPTA UNSIQ</title>

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sikapta.css')}}" rel="stylesheet" type="text/css">

  </head>

  <body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
  <h5 class="my-0 mr-md-auto font-weight-normal">SIKAPTA</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Features</a>
    <!-- <a class="p-2 text-dark" href="#">Enterprise</a>
    <a class="p-2 text-dark" href="#">Support</a>
    <a class="p-2 text-dark" href="#">Pricing</a> -->
  </nav>
  <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>

<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Pengajuan</li>
  </ol>
</nav>
<!-- <div class="card-deck mb-3 text-center"> -->
<div class="card-deck mb-3">

    <div class="card mb-4 box-shadow">
      <!-- <div class="card-header">
        <h4 class="my-0 font-weight-normal">Pro</h4>
      </div> -->
      <div class="card-body col-sm-8 mx-auto">
        <!-- <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1> -->

        <form>
          <div class="form-group row">
              <label for="judul" class="col-sm-4 col-form-label float-right">Judul</label>
              <div class="col-sm-8">
              <input type="text" class="form-control" id="judul" placeholder="Judul">
              </div>
          </div>
          <div class="form-group row">
              <label for="bidang_pekerjaan" class="col-sm-4 col-form-label float-right">Bidang pekerjaan</label>
              <div class="col-sm-8">
              <input type="text" class="form-control" id="bidang_pekerjaan" placeholder="Bidang pekerjaan">
              </div>
          </div>
          <div class="form-group row">
              <label for="deskripsi" class="col-sm-4 col-form-label float-right">Deskripsi</label>
              <div class="col-sm-8">
              <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi">
              </div>
          </div>
          <div class="form-group row">
              <label for="jml_pegawai" class="col-sm-4 col-form-label float-right">Jumlah pegawai</label>
              <div class="col-sm-8">
              <input type="number" class="form-control" id="jml_pegawai" min="1" placeholder="Jumlah pegawai">
              <!-- <input type="number" id="replyNumber" min="0" data-bind="value:replyNumber" /> -->
              </div>
          </div>
          <div class="form-group row">
              <label for="kompleksitas" class="col-sm-4 col-form-label float-right">Kompleksitas pekerjaan</label>
              <div class="col-sm-8">
              <input type="text" class="form-control" id="kompleksitas" placeholder="Kompleksitas pekerjaan">
              </div>
          </div>
          <div class="form-group row">
              <label for="lokasi" class="col-sm-4 col-form-label float-right">Lokasi</label>
              <div class="col-sm-8">
              <input type="text" class="form-control" id="lokasi" placeholder="Lokasi">
              </div>
          </div>
          <div class="form-group row">
              <label for="nm_instansi" class="col-sm-4 col-form-label float-right">Nama instansi</label>
              <div class="col-sm-8">
              <input type="text" class="form-control" id="nm_instansi" placeholder="Nama instansi">
              </div>
          </div>
          <div class="form-group row">
              <label for="tel_instansi" class="col-sm-4 col-form-label float-right">No telp. instansi</label>
              <div class="col-sm-8">
              <input type="text" class="form-control" id="tel_instansi" placeholder="No telpon">
              </div>
          </div>
          <div class="form-group row">
              <label for="kerangka_pikir" class="col-sm-4 col-form-label float-right">Kerangka pikir</label>
              <div class="col-sm-8">
              <input type="file" class="form-control" id="kerangka_pikir" placeholder="Kernagka pikir">
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
      </div>
    </div>

  </div>
</div>

</div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
  Holder.addTheme('thumb', {
    bg: '#55595c',
    fg: '#eceeef',
    text: 'Thumbnail'
  });
</script>
</html>

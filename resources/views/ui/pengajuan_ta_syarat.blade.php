<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('icon/favicon-sikapta.png')}}">

    <title>SIKAPTA UNSIQ</title>

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sikapta.css')}}" rel="stylesheet" type="text/css">

  </head>

  <body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
<h5 class="my-0 mr-md-auto font-weight-normal"><a class="navbar-brand"><img style="	width: 104px;" src="{{ asset('icon/logo-sikapta.svg')}}" alt="Logo Sikapta"></a></h5>
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
<div class="card-deck mb-3">

    <div class="card mb-4 box-shadow">
      <div class="card-body col-sm-8 mx-auto">
        <h2 class="card-title pricing-card-title mb-4 text-muted"><small  style="font-weight:bold;">Upload syarat pengajuan TA</small></h2>
        <form>
          <div class="form-group row">
              <label for="transkrip_nilai" class="col-sm-4 col-form-label float-right">Transkrip nilai</label>
              <div class="col-sm-8">
              <input type="text" class="form-control" id="transkrip_nilai" placeholder="Transkrip nilai">
              </div>
          </div>
          <div class="form-group row">
              <label for="slip_pembayaran" class="col-sm-4 col-form-label float-right">Slip pembayaran Ta</label>
              <div class="col-sm-8">
              <input type="text" class="form-control" id="slip_pembayaran" placeholder="Bidang pekerjaan">
              </div>
          </div>
          <div class="form-group row">
              <label for="tanggal_bayar" class="col-sm-4 col-form-label float-right">Tanggal bayar</label>
              <div class="col-sm-8">
              <input type="date" class="form-control" id="tanggal_bayar" placeholder="Tanggal pembayaran">
              </div>
          </div>
          <div class="form-group row">
              <label for="proposal" class="col-sm-4 col-form-label float-right">Upload proposal</label>
              <div class="col-sm-8">
              <input type="file" class="form-control" id="proposal" placeholder="Upload proposal">
              </div>
          </div>
          <div class="form-group row">
              <label for="judul_ta" class="col-sm-4 col-form-label float-right">Judul tugas akhir</label>
              <div class="col-sm-8">
              <input type="text" class="form-control" id="judul_ta" placeholder="Judul tugas akhir">
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-4">
              </div>
              <div class="col-sm-8">
                  <button type="submit" class="btn btn-primary mb-2 float-left">Send</button>
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
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
  Holder.addTheme('thumb', {
    bg: '#55595c',
    fg: '#eceeef',
    text: 'Thumbnail'
  });
</script>
</html>

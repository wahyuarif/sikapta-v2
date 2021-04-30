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
    </nav>
    <a class="btn btn-outline-primary" href="#">Sign up</a>
  </div>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <!-- <h1 class="display-4">Sikapta.</h1> -->
  </div>

  <div class="container"> <!-- start container -->
    <div class="card-deck mb-3">
      <div class="card mb-4 box-shadow">
        <div class="card-body col-sm-8 mx-auto">
          <!-- content here -->
           @yield('content')
          <!-- end content -->
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
  </div> <!--end container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
  Holder.addTheme('thumb', {
    bg: '#55595c',
    fg: '#eceeef',
    text: 'Thumbnail'
  });
</script>
</body>
</html>

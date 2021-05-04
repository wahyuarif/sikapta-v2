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
    <link href="{{ asset('css/progresbar.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/styleprogresbar.css')}}" rel="stylesheet" type="text/css">
    {{-- <link href="{{ asset('css/sikapta.css')}}" rel="stylesheet" type="text/css"> --}}

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
        <article>

            <!-- Start Multiform HTML -->
        <section class="multi_step_form">  
            <form id="msform"> 
            <!-- Tittle -->
            <div class="tittle">
                <h2>Pengajuan Tugas Akhir</h2>
                <p>Untuk melanjutkan pengajuan, kamu harus menyelesaikan syarat yang dibutuhkan.</p>
            </div>
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Upload Syarat Pengajuan</li>  
                <li>Upload Documents</li> 
                <li>Security Questions</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h3>Lengkapi dokumen dibawah</h3>
                <h6>Kamu harus memenuhi syarat untuk melanjutkan pengajuan.</h6> 
                <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <input type="tel" id="phone" class="form-control" placeholder="Transkrip nilai"> 
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="text" class="form-control" placeholder="Slip pembayaran">
                </div> 
                </div> 
                <div class="done_text"> 
                <a href="#" class="don_icon"><i class="ion-android-done"></i></a> 
                <h6>A secret code is sent to your phone. <br>Please enter it here.</h6> 
                </div>  
                <div class="code_group"> 
                <input type="text" class="form-control" placeholder="0">
                <input type="text" class="form-control" placeholder="0">
                <input type="text" class="form-control" placeholder="0">
                <input type="text" class="form-control" placeholder="0">
                </div>  
                <button type="button" class="action-button previous_button">Back</button>
                <button type="button" class="next action-button">Continue</button>  
            </fieldset>
            <fieldset>
                <h3>Verify Your Identity</h3>
                <h6>Please upload any of these documents to verify your Identity.</h6>
                <div class="passport">
                <h4>Govt. ID card <br>PassPort <br>Driving License.</h4> 
                <a href="#" class="don_icon"><i class="ion-android-done"></i></a> 
                </div>
                <div class="input-group"> 
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="upload">
                    <label class="custom-file-label" for="upload"><i class="ion-android-cloud-outline"></i>Choose file</label>
                </div>
                </div>
                <ul class="file_added">
                <li>File Added:</li>
                <li><a href="#"><i class="ion-paperclip"></i>national_id_card.png</a></li>
                <li><a href="#"><i class="ion-paperclip"></i>national_id_card_back.png</a></li>
                </ul>
                <button type="button" class="action-button previous previous_button">Back</button>
                <button type="button" class="next action-button">Continue</button>  
            </fieldset>  
            <fieldset>
                <h3>Create Security Questions</h3>
                <h6>Please update your account with security questions</h6> 
                <div class="form-group"> 
                <select class="product_select">
                    <option data-display="1. Choose A Question">1. Choose A Question</option> 
                    <option>2. Choose A Question</option>
                    <option>3. Choose A Question</option> 
                </select>
                </div> 
                <div class="form-group fg_2"> 
                <input type="text" class="form-control" placeholder="Anwser here:">
                </div> 
                <div class="form-group"> 
                <select class="product_select">
                    <option data-display="1. Choose A Question">1. Choose A Question</option> 
                    <option>2. Choose A Question</option>
                    <option>3. Choose A Question</option> 
                </select>
                </div> 
                <div class="form-group fg_3"> 
                <input type="text" class="form-control" placeholder="Anwser here:">
                </div> 
                <button type="button" class="action-button previous previous_button">Back</button> 
                <a href="#" class="action-button">Finish</a> 
            </fieldset>  
            </form>  
        </section> 
            <!-- END Multiform HTML -->
        </article>
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

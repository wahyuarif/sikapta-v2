<!--  -->

<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Bootstrap core CSS -->

		<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">


		<link href="{{ asset('css/login.css')}}" rel="stylesheet" type="text/css">
  

</head>
<body>
	<img class="wave" src="img/wave.svg" style="left: -267px;">
	@if(session('msg'))
	<div class="alert alert-danger" role="alert">
		{{ session('msg') }}
	</div>
	@endif

	<div class="container">
		<div class="img">
			<img src="">
		</div>
		<div class="login-content">
			<form action="{{ route('auth.login') }}" method="POST">
     		 {{ csrf_field() }}

      <!-- ----- -->
				<img src="img/logo-unsiq.svg">
				<h2 class="title">SIKAPTA</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" name="email" value="{{ old('email') }}" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
	<script src="{{ asset('js/login.js')}}"></script>
	
</body>
</html>



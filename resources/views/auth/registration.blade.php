<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<script
	src="https://code.jquery.com/jquery-3.6.3.min.js"
	integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
	crossorigin="anonymous">
</script>
</head>
<body>
	<main class="login-form">
	<div class="cotainer">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<div class="login100-form validate-form">
					<span class="login100-form-title">
						Admin Sign Up
					</span>

					<form action="{{ route('register.custom') }}" method="POST">
						@csrf
						<div class="form-group mb-3">
							<input type="text" placeholder="Name" id="name" class="form-control" name="name"
								required autofocus>
							@if ($errors->has('name'))
							<span class="text-danger">{{ $errors->first('name') }}</span>
							@endif
						</div>
						<div class="form-group mb-3">
							<input type="text" placeholder="Email" id="email_address" class="form-control"
								name="email" required autofocus>
							@if ($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
							@endif
						</div>
						<div class="form-group mb-3">
							<input type="password" placeholder="Password" id="password" class="form-control"
								name="password" required>
							@if ($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
							@endif
						</div>
						<div class="form-group mb-3">
							<div class="checkbox">
								<label><input type="checkbox" name="remember"> Remember Me</label>
							</div>
						</div>

						
						<div class="container-login100-form-btn">
							<button type="submit" class="login100-form-btn">
								Sign up
							</button>
						</div>

						<div class="text-center p-t-12">
							<a class="txt2" href="{{route('login')}}">
								I have account
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div>
					</form>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</div>
</main>
</body>
</html>
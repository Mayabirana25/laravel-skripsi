<!doctype html>
<html lang="en">
  <head>
  	<title>Login Dokumen Digital</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('halaman_login/css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section fw-bold" style="color: #125D72;">LOGIN UNTUK AKSES DOKUMEN DIGITAL</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5" style="background-color: #E7F6F9;">
							<form action="{{ route('login.post') }}" class="signin-form" method="post">
                                @csrf
			      		<div class="form-group mt-3">
			      			<input type="email" name="email" id="email" value= "{{ old('email') }}" class="form-control" required>
			      			<label class="form-control-placeholder" for="email" style="color: #14A2BA;">Email</label>
			      		</div>
		            <div class="form-group">
		              <input id="password-field" type="password" name="password" id="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password" style="color: #14A2BA;">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3" style="background-color: #14A2BA;">LOGIN</button>
						</a>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

    <script src="{{ asset('halaman_login/js/jquery.min.js') }}"></script>
  <script src="{{ asset('halaman_login/js/popper.js') }}"></script>
  <script src="{{ asset('halaman_login/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('halaman_login/js/main.js') }}"></script>

	</body>
</html>


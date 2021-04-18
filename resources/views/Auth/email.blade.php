<!DOCTYPE html>
<html lang="en" dir="rtl">


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/rtl/pages/examples/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 20:34:31 GMT -->

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Online Statistics</title>
	<!-- Favicon-->
	<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">

	<!-- Plugins Core Css -->
	<link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">

	<!-- Custom Css -->
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/pages/extra_pages.css')}}" rel="stylesheet" />
	<style>
		.contact100-form-checkbox .form-check .form-check-label,
		.wrap-input100 .material-icons {
			text-align: right;
		}
	</style>
</head>

<body class="login-page rtl">
	<div class="limiter">
		<div class="container-login100 page-background1">
			<div class="wrap-login100">
				<center>
					@if (count($errors) > 0)
					@foreach($errors->all() as $error)
					<div class="alert alert-danger mt-0 mb-2">
						{{ $error }}
					</div>
					@endforeach
					@endif
				</center>
				<form action="{{action('LoginController@checkEmail')}}" method="POST" class="login100-form">
					@csrf
					<span class="login100-form-logo">
						<img alt="" src="{{asset('assets/images/prof.jpg')}}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						التأكد
					</span>
					<div class="wrap-input100 " data-validate="Enter password">
						<input class="input100" type="text" name="email" placeholder="ادخل البريد الالكتروني">
						<i class="material-icons focus-input1001">email</i>
					</div>
					<div class="body">
						<div class="container-login100-form-btn">
							<button type="submit" class="btn btn-outline-primary btn-border-radius login100-form-btn" style="padding: 20px;">ارسال</button>
							<!-- <button type="button" class="btn btn-outline-primary btn-border-radius login100-form-btn">الغاء</button> -->
						</div>
						<div class="text-center p-t-50">
							<a class="txt1" href="">
								هل تحتاج لمساعده؟
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Plugins Js -->
	<script src="{{asset('assets/js/app.min.js')}}"></script>
	<!-- Extra page Js -->
	<script src="{{asset('assets/js/pages/examples/pages.js')}}"></script>
</body>

</html>
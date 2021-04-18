<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Online Statistics</title>
	<!-- Favicon-->
	<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
	<link href="{{asset('assets/js/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css')}}" rel="stylesheet" />
    <!-- Multi Select Css -->
    <link href="{{asset('assets/js/bundles/multiselect/css/multi-select.css')}}" rel="stylesheet">

	<!-- Plugins Core Css -->
	<link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/js/bundles/materialize-rtl/materialize-rtl.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/form.min.css')}}" rel="stylesheet">

	<!-- Custom Css -->
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/pages/extra_pages.css')}}" rel="stylesheet" />

	<link href="{{asset('assets/css/styles/all-themes.css')}}" rel="stylesheet" />
	<style>
		.contact100-form-checkbox .form-check .form-check-label,
		.wrap-input100 .material-icons {
			text-align: right;
		}
		.default-select option{
			color:#000;
		}
	</style>
</head>

<body class="login-page rtl">
	<div class="limiter">
		<div class="container-login100 page-background1">
			<div class="wrap-login100" style="width: 700px !important;">
            <center>
                
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block mt-3 mb-0">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                @if (count($errors) > 0)
                
                    @foreach($errors->all() as $error)
					<div class="alert alert-danger mt-0 mb-2">
					{{ $error }}
					</div>
                    @endforeach
                
                @endif

                </center>
				<form action="{{action('LoginController@checkRegister')}}" method="POST" class="login100-form validate-form">
                    @csrf

					<span class="login100-form-logo">
						<img alt="" src="{{asset('assets/images/prof.jpg')}}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						 انشاء حساب
					</span>

					<div class="row">
						<div class="col-lg-6">
							<div class="wrap-input100">
								<div class="wrap-input100 " data-validate="Enter username">
									<input class="input100" type="text" name="firstName" placeholder="الاسم الاول" value="{{ old('firstName') }}" autofocus>
									<i class="material-icons focus-input1001">person</i>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="wrap-input100 ">
								<div class="wrap-input100 " data-validate="Enter username">
									<input class="input100" type="text" name="secondName" placeholder="الاسم الثاني" value="{{ old('secondName') }}" >
									<i class="material-icons focus-input1001">person</i>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="wrap-input100 ">
								<div class="wrap-input100 " data-validate="Enter username">
									<input class="input100" type="text" name="thirdName" placeholder="الاسم الثالث" value="{{ old('thirdName') }}" >
									<i class="material-icons focus-input1001">person</i>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="wrap-input100 ">
								<div class="wrap-input100 " data-validate="Enter username">
									<input class="input100" type="text" name="fourthName" placeholder="الاسم الرابع"  value="{{ old('fourthName') }}">
									<i class="material-icons focus-input1001">person</i>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="wrap-input100 ">
								<div class="wrap-input100 " data-validate="Enter username">
									<input class="input100" type="text" name="id" placeholder="الرقم الوطني" value="{{ old('id') }}">
									<i class="material-icons focus-input1001">person</i>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							
						<div class="wrap-input100 ">
						  <div class="form-group default-select">
								<select class="form-control" name="city" style="background:transparent;color:#fff;border-bottom: 2px solid rgba(255,255,255,0.24);" >
								<option disabled selected>أختر المحافظة</option>
										<option >القدس</option>
										<option >جنين</option>
										<option >طوباس</option>
										<option >طولكرم</option>
										<option >نابلس</option>
										<option >قلقيلية</option>
										<option >سلفيت</option>
										<option >رام الله والبيرة</option>
										<option >أريحا</option>
										<option >بيت لحم</option>
										<option >الخليل</option>
								</select>
                             </div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="wrap-input100 ">
								<div class="wrap-input100" data-validate="Enter username">
									<input class="input100" type="text" name="phoneNum" placeholder="رقم الهاتف" value="{{ old('phoneNum') }}" >
									<i class="material-icons focus-input1001">call</i>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="wrap-input100 ">
								<div class="wrap-input100 " data-validate="Enter username">
									<input class="input100" type="text" name="email" placeholder="الايميل"  value="{{ old('email') }}">
									<i class="material-icons focus-input1001">email</i>
							   </div>
							</div>
						</div>
					</div>	

					<div class="row">
						<div class="col-lg-12">
							<div class="wrap-input100 ">
								<div class="wrap-input100 " data-validate="Enter password">
									<input class="input100" type="password" name="password" placeholder="كلمة المرور" value="{{ old('password') }}">
									<i class="material-icons focus-input1001">lock</i>
								</div>
							</div>
						</div>

						
					</div>	
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							حفظ
						</button>
					</div>
					<div class="text-center p-t-50">
						<a class="h3" style="color:white;" href="{{url('/login')}}">
							 تسجيل دخول
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Plugins Js -->

	<script src="{{asset('assets/js/app.min.js')}}"></script>

	<!-- Extra page Js -->
	<script src="{{asset('assets/js/pages/examples/pages.js')}}"></script>
	<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
	<script src="{{asset('assets/js/bundles/multiselect/js/jquery.multi-select.js')}}"></script>
    <script src="{{asset('assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js')}}"></script>
	<script src="{{asset('assets/js/form.min.js')}}"></script>
</body>
</html>
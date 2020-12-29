<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('public/frontend/login-signin/login/Login_v3/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/login-signin/login/Login_v3/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/login-signin/login/Login_v3/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/login-signin/login/Login_v3/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/login-signin/login/Login_v3/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/login-signin/login/Login_v3/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/login-signin/login/Login_v3/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/login-signin/login/Login_v3/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/login-signin/login/Login_v3/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/login-signin/login/Login_v3/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/login-signin/login/Login_v3/css/main.css')}}">
	<style>


        .noti-login {
            color: #ffabe1;
            font-size: 17px;

			padding-bottom: 30px;
			
        }

    </style>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" onkeyup="checkform()" action="{{URL::to('check-login-user')}}" method="POST" >
					{{ csrf_field() }}
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<?php
						$noti = Session::get('notification');
						if ($noti)
						{?>
					<?php		 echo '<h5 class="noti-login">' . $noti . '</h5>'; 
						
					?>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" id="username" placeholder="Username" value="<?php $user = Session::get('username'); echo $user;?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<?php
							Session::put('notification', null);
                			Session::put('username', null);
                			Session::put('password', null);
						}
						else
						{			
							$signup = Session::get('signupdone');
                			if($signup){
								?>
								   <script> alert ("Sign up sucssessfully")</script>       
								   <?php    
								   Session::put('signupdone', null); 
                			}	
					?>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" id="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<?php
						}	
					
                							
					?>
					{{-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> --}}

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" id="btn_confirm">
							Login
						</button>
					</div>
				
					{{-- <div class="text-center p-t-90">
						<a class="txt1" href="#">
							Sign in
						</a>
					</div> --}}
					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password ?
						</a>
						<span><a class="txt1" href="{{URL::to('/signup-user')}}">
							Sign up
						</a></span>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset('public/frontend/login-signin/login/Login_v3/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/frontend/login-signin/login/Login_v3/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/frontend/login-signin/login/Login_v3/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('public/frontend/login-signin/login/Login_v3/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/frontend/login-signin/login/Login_v3/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/frontend/login-signin/login/Login_v3/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('public/frontend/login-signin/login/Login_v3/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/frontend/login-signin/login/Login_v3/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/frontend/login-signin/login/Login_v3/js/main.js')}}"></script>
<script>
	 var checkform = function() {
        if (!document.getElementById('username').value.trim().length ||
            !document.getElementById('password').value.trim().length)
    	{
            document.getElementById("btn_confirm").disabled = true;
        } 
		else 
		{
            document.getElementById("btn_confirm").disabled = false;
        }

    }

</script>

</body>
</html>
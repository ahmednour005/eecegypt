<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V15</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href=" {{asset('login/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href=" {{asset('login/vendor/bootstrap/css/bootstrap.min.css')}} ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href=" {{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}} ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href=" {{asset('login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}} ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href=" {{asset('login/vendor/animate/animate.css')}} ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href=" {{asset('login/vendor/css-hamburgers/hamburgers.min.css')}} ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href=" {{asset('login/vendor/animsition/css/animsition.min.css')}} ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href=" {{asset('login/vendor/select2/select2.min.css')}} ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href=" {{asset('login/vendor/daterangepicker/daterangepicker.css')}} ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href=" {{asset('login/css/util.css')}} ">
    <link rel="stylesheet" type="text/css" href=" {{asset('login/css/main.css')}} ">
    <!--===============================================================================================-->
</head>
<body>
    <img class="wave"  src="{{asset('admin/assets/img/Green-Wave-PNG-Background-Image.png')}}">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="https://eecegypt.com"> <img src="{{asset('admin/assets/img/eecgroup-logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Career</a>
                </li>

              </ul>
              <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                <a class="nav-link" href="{{ url('/login-admin') }}">Dashboard</a>
                </li>

              </ul>
            </div>
          </nav>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image:url({{asset('admin/assets/img/screening.jpg')}});  background-position: bottom;">
                <span class="login100-form-title-1">
                    <img src="{{asset('admin/assets/img/eecgroup-logo.png')}}">
                </span>
            </div>
            <form class="login100-form validate-form"  method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="email" name="email" placeholder="Enter username">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Enter password">
                    <span class="focus-input100"></span>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="{{ asset('login/vendor/jquery/jquery-3.2.1.min.js') }} "></script>
<!--===============================================================================================-->
<script src="{{ asset('login/vendor/animsition/js/animsition.min.js') }} "></script>
<!--===============================================================================================-->
<script src="{{ asset('login/vendor/bootstrap/js/popper.js') }} "></script>
<script src="{{ asset('login/vendor/bootstrap/js/bootstrap.min.js') }} "></script>
<!--===============================================================================================-->
<script src="{{ asset('login/vendor/select2/select2.min.js') }} "></script>
<!--===============================================================================================-->
<script src="{{ asset('login/vendor/daterangepicker/moment.min.js') }} "></script>
<script src="{{ asset('login/vendor/daterangepicker/daterangepicker.js') }} "></script>
<!--===============================================================================================-->
<script src="{{ asset('login/vendor/countdowntime/countdowntime.js') }} "></script>
<!--===============================================================================================-->
<script src="{{ asset('login/js/main.js') }} "></script>

</body>
</html>

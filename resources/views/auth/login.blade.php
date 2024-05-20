<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>OTT By Hareem</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('cool-assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool-assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool-assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool-assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('cool-assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('cool-assets/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool-assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool-assets/vendor/wow/animate.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('cool-assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool-assets/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool-assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool-assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('cool-assets/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">

        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img class="img-fluid" src="{{asset('cool-assets/images/icon/ott_logo.png')}}" alt="CoolAdmin" width="200"></a><hr>
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="login-form-body">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input class="au-input au-input--full form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="au-input au-input--full form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="login-checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                        @if (Route::has('password.request'))
                                        <label>
                                            <a href="{{ route('password.request') }}">Forgotten Password?</a>
                                        </label>
                                        @endif
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Log in</button>
                                </div>
                            </form>

                            <!-- <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('cool-assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('cool-assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('cool-assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('cool-assets/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('cool-assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('cool-assets/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('cool-assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('cool-assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('cool-assets/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('cool-assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('cool-assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('cool-assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('cool-assets/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('cool-assets/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->

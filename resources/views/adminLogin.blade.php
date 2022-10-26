<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
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
</head>
<body>
<div class="container-fluid">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG">
                </div>

                <form class="p-3 w-50" action="{{ route('loginAdmin') }}" method="post">
                    @csrf
                    {{--<div class="form-text">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>--}}

                    <span class="login100-form-title">
                                Admin Login
                            </span>
                    @if(\Illuminate\Support\Facades\Session::has('error'))
                        <div class="alert alert-danger">
                            {{ \Illuminate\Support\Facades\Session::get('error') }}
                        </div>
                    @endif

                    @if(\Illuminate\Support\Facades\Session::has('success'))
                        <div class="alert alert-success">
                            {{ \Illuminate\Support\Facades\Session::get('success') }}
                        </div>
                    @endif
                    <div class="wrap-input100 validate-input" data-validate = "Phone number is required">
                        <input class="input100" type="number" name="phoneNumber" placeholder="Phone Number" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>


                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">
                            <hr>

                        </a>
                    </div>

                    {{--<div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number: </label>
                        <input type="number" id="phoneNumber" class="form-control" name="phoneNumber"/>

                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password: </label>
                        <input type="password" id="password" class="form-control" name="password"/>

                    </div>
                    <div class="mb-3">
                        <button class="btn btn-info" type="submit">Login</button>
                    </div>--}}
                </form>
            {{--<div class="title mb-3">
                Don't have an account? <a href="{{ url('/signup') }}">Sign Up</a>
            </div>--}}
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
</body>
</html>
{{--
<html>
<head>
    --}}
{{--<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>{{env('app_name')}}</title>--}}{{--

</head>
<body>
<h3>Welcome to Tour Operator System</h3>
<form action="{{ url('/auth/login') }}" method="post">
    @csrf
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>

    <button type="submit" class="btn">login</button>

</form>
Don't have an account? <a href="{{ url('/signup') }}">Sign Up</a>
</body>
</html>
--}}

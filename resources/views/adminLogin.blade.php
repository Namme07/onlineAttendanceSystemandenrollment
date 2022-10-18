<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>


    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <!-- bootstrap5 cdn -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    />

    <style>
        .my-link-style:hover{
            text-decoration: underline;
        }



    </style>
</head>
<body>
<div class="container-fluid">
    <main>
        <div class="contact-section my-5">
            <div class="title text-center mb-3">
                <h3 class="font-weight-bolder">Welcome to Tour Operator System</h3>
            </div>
            <h1>User Login</h1>

            <form class="p-3 w-50" action="{{ route('loginAdmin') }}" method="post">
                @csrf
                <div class="form-text">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Phone Number: </label>
                    <input type="number" id="phoneNumber" class="form-control" name="phoneNumber"/>

                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password: </label>
                    <input type="password" id="password" class="form-control" name="password"/>

                </div>
                <div class="mb-3">
                    <button class="btn btn-info" type="submit">Login</button>
                </div>
            </form>
            {{--<div class="title mb-3">
                Don't have an account? <a href="{{ url('/signup') }}">Sign Up</a>
            </div>--}}
        </div>
    </main>
</div>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
></script>
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

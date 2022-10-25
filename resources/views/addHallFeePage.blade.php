<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentSignUp page</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.css')}}"></link>
</head>
<body>
<div class="masthead">
    {{--<div class="col-md-6 offset-md-3 mt-5">--}}
    <div class="container text-start">
        <br>
        <h3>Add/update semester fee</h3>
        <hr>
        <form action="{{ route('addHallFee') }}" method="post">
            @csrf
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
            <div class="row">
                <div class="col-lg-4">
                    <label for="Attached Hall" class="form-label">Attached Hall</label>
                    <select class="form-select" aria-label="Default select example" name="hallName">
                        <option selected>Open this select menu</option>
                        <option value="Bangabandhu Sheikh Mujibur Rahman Hall">Bangabandhu Sheikh Mujibur Rahman Hall</option>
                        <option value="Shahid President Ziaur Rahman Hall">Shahid President Ziaur Rahman Hall</option>
                        <option value="Tazuddin Hall">Tazuddin Hall</option>
                        <option value="Ivy Rahman Hall">Ivy Rahman Hall</option>
                        <option value="Sufia Kamal Hall">Sufia Kamal Hall</option>
                        <option value="Fazilatunnesa Mujib Hall">Fazilatunnesa Mujib Hall</option>
                    </select>
                    @error('hallName') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-lg-4">
                    <label for="Residential Status" class="form-label">Residential Status</label>
                    <select class="form-select" aria-label="Default select example" name="residentialStatus">
                        <option selected>Open this select menu</option>
                        <option value="Resident">Resident</option>
                        <option value="nonResident">Non Resident</option>
                    </select>
                    @error('residentialStatus') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-lg-4">
                    <label for="Hall Fees" class="form-label">Hall Fees</label>
                    <input type="number" class="form-control" id="hallFee" name="hallFee" placeholder="Hall fee">
                    @error('hallFee') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <br>
            {{--Hall Name: <input type="text" name="hallName"><br>
            Residential Status: <input type="text" name="residentialStatus"><br>
            Hall Fee: <input type="number" name="hallFee"><br>--}}
            <button class="btn btn-primary" type="submit">Add Hall Fee</button>
        </form>
</body>
</html>

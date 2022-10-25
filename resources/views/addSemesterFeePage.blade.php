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
        <form action="{{ route('addSemesterFee') }}" method="post">
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
                    <label for="Department" class="form-label">Department</label>
                    <input type="text" class="form-control" id="department" name="department" placeholder="Enter dept.">
                    @error('department') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-lg-4">
                    <label for="Level" class="form-label">Level</label>
                    <select class="form-select" aria-label="Default select example" name="level">
                        <option selected>Open this select menu</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    @error('currentLevel') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-lg-4">
                    <label for="Semester" class="form-label">Semester</label>
                    <select class="form-select" aria-label="Default select example" name="semester">
                        <option selected>Open this select menu</option>
                        <option value="i">I</option>
                        <option value="ii">II</option>
                    </select>
                    @error('currentSemester') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="Total Credit Hour" class="form-label">Total Credit Hour</label>
                    <input type="number" class="form-control" id="totalCreditHour" placeholder="Total Credit Hour" name="totalCreditHour">
                    @error('totalCreditHour') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-lg-4">
                    <label for="Credit Hour Fee" class="form-label">Credit Hour Fee</label>
                    <input type="number" class="form-control" id="creditHourFee" name="creditHourFee" placeholder="Credit Hour Fee">
                    @error('creditHourFee') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-lg-4">
                    <label for="Other Fees" class="form-label">Other Fees</label>
                    <input type="number" class="form-control" id="otherFees" name="otherFees" placeholder="Other Fees">
                    @error('otherFees') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <br>
{{--
            Department: <input type="text" name="department"><br>
            Level: <input type="radio" name="level" value="1">1 &nbsp <input type="radio" name="level" value="2">2  <input type="radio" name="level" value="3">3 <input type="radio" name="level" value="4">4
            <br>
            Semester: <input type="radio" name="semester" value="i">i &nbsp; <input type="radio" name="semester" value="ii">ii
            <br>
            Total Credit Hour: <input type="number" name="totalCreditHour"><br>
            Credit Hour Fee: <input type="number" name="creditHourFee"><br>
            Other Fee: <input type="number" name="otherFees"><br>--}}
            <button class="btn btn-primary" type="submit">Add Semester Fee</button>
        </form>
    </div>
</div>
</body>
</html>

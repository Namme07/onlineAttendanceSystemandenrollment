<html>
<head>
    <title>
        studentSignUp page
    </title>
</head>
<body>
<form action="{{ route('addSemesterFee') }}" method="post">
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
    Department: <input type="text" name="department"><br>
    Level: <input type="radio" name="level" value="1">1 &nbsp <input type="radio" name="level" value="2">2  <input type="radio" name="level" value="3">3 <input type="radio" name="level" value="4">4
    <br>
    Semester: <input type="radio" name="semester" value="i">i &nbsp; <input type="radio" name="semester" value="ii">ii
    <br>
    Total Credit Hour: <input type="number" name="totalCreditHour"><br>
    Credit Hour Fee: <input type="number" name="creditHourFee"><br>
    Other Fee: <input type="number" name="otherFees"><br>
    <button class="btn" type="submit">Add Semester Fee</button>
</form>
</body>
</html>

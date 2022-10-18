<html>
<head>
    <title>
        studentSignUp page
    </title>
</head>
<body>
<form action="{{ route('addHallFee') }}" method="post">
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
    Hall Name: <input type="text" name="hallName"><br>
    Residential Status: <input type="text" name="residentialStatus"><br>
    Hall Fee: <input type="number" name="hallFee"><br>
    <button class="btn" type="submit">Add Hall Fee</button>
</form>
</body>
</html>

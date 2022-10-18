<html>
<body>
<h1>This is Admin Homepage</h1>
you are {{ $admin->adminName }} <br>

<a href="{{ route('studentSignUpPage') }}">Add Student</a><br>
<a href="{{ route('addSemesterFeePage') }}">Add Semester Fee</a><br>
<a href="{{ route('addHallFeePage') }}">Add Hall Fee</a>

</body>
</html>

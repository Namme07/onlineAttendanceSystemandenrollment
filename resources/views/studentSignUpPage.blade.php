<html>
<head>
    <title>
        studentSignUp page
    </title>
</head>
<body>
<form action="{{ route('addNewStudent') }}" method="post">
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
    Student name: <input type="text" name="studentName"><br>
    Student ID: <input type="number" name="studentID"><br>
    Department: <input type="text" name="department"><br>
    Faculty: <input type="text" name="faculty"><br>
    Current Level: <input type="radio" name="currentLevel" value="1">1 &nbsp; <input type="radio" name="currentLevel" value="2">2  <input type="radio" name="currentLevel" value="3">3 <input type="radio" name="currentLevel" value="4">4
    <br>
    Current Semester: <input type="radio" name="currentSemester" value="i">i &nbsp; <input type="radio" name="currentSemester" value="ii">ii
    <br>
    Session: <input type="number" name="session"><br>
    Attached Hall: <input type="text" name="hall"><br>{{-- Drop down menu--}}
    Residential Status:<input type="radio" name="residentialStatus" value="Resident">Resident &nbsp; <input type="radio" name="residentialStatus" value="nonResident">Non-resident
    <br>
    Board Scholarship: <input type="radio" name="boardScholarship" value="yes">Yes &nbsp; <input type="radio" name="boardScholarship" value="no">No
    <br>
    Phone no: <input type="number" name="studentPhone"><br>
    Email: <input type="email" name="studentEmail"><br>
    Date of Birth: <input type="date" name="dob"><br>
    National ID no: <input type="number" name="studentNID"><br>
{{--    Father's name: <input type="text" name="fatherName"><br>
    Father's National ID no: <input type="number" name="fatherNID"><br>
    Father's occupation: <input type="text" name="fatherOccupation"><br>
    Father's phone no: <input type="text" name="fatherPhoneNumber"><br>
    Father's Email: <input type="text" name="fatherEmail"><br>
    Mother's name: <input type="text" name="motherName"><br>
    Mother's National ID no: <input type="number" name="motherNID"><br>
    Mother's occupation: <input type="text" name="motherOccupation"><br>
    Mother's phone no: <input type="text" name="motherPhoneNumber"><br>
    Mother's Email: <input type="text" name="motherEmail"><br>
    Address <br>
    Present Address <br>
    Village/Area: <input type="text" name="present_village_area"><br>
    Upazilla: <input type="text" name="present_upazilla"><br>
    District: <input type="text" name="present_district"><br>
    Division: <input type="text" name="present_division"><br>
    Post Code: <input type="text" name="present_postCode"><br>
    Permanent Address <br>
    Village/Area: <input type="text" name="permanent_village_area"><br>
    Upazilla: <input type="text" name="permanent_upazilla"><br>
    District: <input type="text" name="permanent_district"><br>
    Division: <input type="text" name="permanent_division"><br>
    Post Code: <input type="text" name="permanent_postCode"><br>--}}

    <button class="btn" type="submit">Sign Up</button>
</form>
</body>
</html>

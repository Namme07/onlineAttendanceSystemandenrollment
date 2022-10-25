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
{{--<div class="container text-start">
    <br>
    <form action="{{ route('addNewStudent') }}" method="post">

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

        <div class="row">
            <br>
            <h3>Student Sign-up Form</h3>
            <hr>
        </div>

        <h4>Basic Information</h4>
        <div class="row">
            <div class="col-lg-4">
                <label for="Full Name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="studentName" placeholder="Enter your name" name="studentName">
                @error('studentName') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-4">
                <label for="Student ID" class="form-label">Student ID</label>
                <input type="number" class="form-control" id="studentID" name="studentID" placeholder="Enter Student ID">
                @error('studentID') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-4">
                <label for="Department" class="form-label">Department</label>
                <input type="text" class="form-control" id="department" name="department" placeholder="Enter dept.">
                @error('department') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-4">
                <label for="Faculty" class="form-label">Faculty</label>
                <input type="text" class="form-control" id="faculty" placeholder="Enter your Faculty" name="faculty">
                @error('faculty') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-4">
                <label for="Current Level" class="form-label">Current Level</label>
                <select class="form-select" aria-label="Default select example" name="currentLevel">
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
                <label for="Current Semester" class="form-label">Current Semester</label>
                <select class="form-select" aria-label="Default select example" name="currentSemester">
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
                <label for="Session" class="form-label">Session</label>
                <input type="number" class="form-control" id="session" placeholder="Enter your Session" name="session">
                @error('session') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-4">
                <label for="Attached Hall" class="form-label">Attached Hall</label>
                <select class="form-select" aria-label="Default select example" name="hall">
                    <option selected>Open this select menu</option>
                    <option value="Bangabandhu Sheikh Mujibur Rahman Hall">Bangabandhu Sheikh Mujibur Rahman Hall</option>
                    <option value="Shahid President Ziaur Rahman Hall">Shahid President Ziaur Rahman Hall</option>
                    <option value="Tazuddin Hall">Tazuddin Hall</option>
                    <option value="Ivy Rahman Hall">Ivy Rahman Hall</option>
                    <option value="Sufia Kamal Hall">Sufia Kamal Hall</option>
                    <option value="Fazilatunnesa Mujib Hall">Fazilatunnesa Mujib Hall</option>
                </select>
                @error('hall') <span class="text-danger">{{ $message }}</span> @enderror
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
        </div>
        <br>
        <div class="row">
            <div class="col-lg-4">
                <label for="Phone No." class="form-label">Phone No.</label>
                <input type="number" class="form-control" id="studentPhone" placeholder="Enter your Phone Number" name="studentPhone">
                @error('studentPhone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-4">
                <label for="Email" class="form-label">Email</label>
                <input type="text" class="form-control" id="studentEmail" name="studentEmail" placeholder="Enter valid Email Address">
                @error('studentEmail') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-4">
                <label for="Date of Birth" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="">
                @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-4">
                <label for="National ID no." class="form-label">National ID no.</label>
                <input type="number" class="form-control" id="studentNID" placeholder="Enter your NID no." name="studentNID">
                @error('studentNID') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

        </div>
        <br>
        <button class="btn btn-primary" type="submit">Sign Up</button>
    </form>
</div>--}}

    <div class="masthead">
        {{--<div class="col-md-6 offset-md-3 mt-5">--}}
        <div class="container text-start">
            <br>
            <h3>Student Sign-up Form</h3>
            <hr>
            <form action="{{ route('addNewStudent') }}" method="post">
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
                        <label for="Full Name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="studentName" placeholder="Enter your name" name="studentName">
                        @error('studentName') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-4">
                        <label for="Student ID" class="form-label">Student ID</label>
                        <input type="number" class="form-control" id="studentID" name="studentID" placeholder="Enter Student ID">
                        @error('studentID') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-4">
                        <label for="Department" class="form-label">Department</label>
                        <input type="text" class="form-control" id="department" name="department" placeholder="Enter dept.">
                        @error('department') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="Faculty" class="form-label">Faculty</label>
                        <input type="text" class="form-control" id="faculty" placeholder="Enter your Faculty" name="faculty">
                        @error('faculty') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-4">
                        <label for="Current Level" class="form-label">Current Level</label>
                        <select class="form-select" aria-label="Default select example" name="currentLevel">
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
                        <label for="Current Semester" class="form-label">Current Semester</label>
                        <select class="form-select" aria-label="Default select example" name="currentSemester">
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
                        <label for="Session" class="form-label">Session</label>
                        <input type="number" class="form-control" id="session" placeholder="Enter your Session" name="session">
                        @error('session') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-4">
                        <label for="Attached Hall" class="form-label">Attached Hall</label>
                        <select class="form-select" aria-label="Default select example" name="hall">
                            <option selected>Open this select menu</option>
                            <option value="Bangabandhu Sheikh Mujibur Rahman Hall">Bangabandhu Sheikh Mujibur Rahman Hall</option>
                            <option value="Shahid President Ziaur Rahman Hall">Shahid President Ziaur Rahman Hall</option>
                            <option value="Tazuddin Hall">Tazuddin Hall</option>
                            <option value="Ivy Rahman Hall">Ivy Rahman Hall</option>
                            <option value="Sufia Kamal Hall">Sufia Kamal Hall</option>
                            <option value="Fazilatunnesa Mujib Hall">Fazilatunnesa Mujib Hall</option>
                        </select>
                        @error('hall') <span class="text-danger">{{ $message }}</span> @enderror
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
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="Phone No." class="form-label">Phone No.</label>
                        <input type="number" class="form-control" id="studentPhone" placeholder="Enter your Phone Number" name="studentPhone">
                        @error('studentPhone') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-4">
                        <label for="Email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="studentEmail" name="studentEmail" placeholder="Enter valid Email Address">
                        @error('studentEmail') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-4">
                        <label for="Date of Birth" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" placeholder="">
                        @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="National ID no." class="form-label">National ID no.</label>
                        <input type="number" class="form-control" id="studentNID" placeholder="Enter your NID no." name="studentNID">
                        @error('studentNID') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-4">
                        <label for="Board Scholarship" class="form-label">Board Scholarship</label>
                        <select class="form-select" aria-label="Default select example" name="boardScholarship">
                            <option selected>Open this select menu</option>
                            <option value="Resident">Yes</option>
                            <option value="nonResident">No</option>
                        </select>
                        @error('boardScholarship') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <br>


                {{--<div class="form-group">
                    <label for="">Student name:</label>
                    <input type="text" class="form-control" name="studentName" placeholder="Enter Your Name">
                    @error('studentName') <span class="text-danger">{{ $message }}</span> @enderror
                </div>--}}
                <!-- Student name: <input type="text" name="studentName"><br> -->
                {{--Student ID: <input type="number" name="studentID"><br>
                Department: <input type="text" name="department"><br>
                Faculty: <input type="text" name="faculty"><br>
                Current Level: <input type="radio" name="currentLevel" value="1">1 &nbsp; <input type="radio" name="currentLevel" value="2">2  <input type="radio" name="currentLevel" value="3">3 <input type="radio" name="currentLevel" value="4">4
                <br>
                Current Semester: <input type="radio" name="currentSemester" value="i">i &nbsp; <input type="radio" name="currentSemester" value="ii">ii
                <br>
                Session: <input type="number" name="session"><br>
                Attached Hall: <input type="text" name="hall"><br>--}}{{----}}{{-- Drop down menu--}}{{--
                Residential Status:<input type="radio" name="residentialStatus" value="Resident">Resident &nbsp; <input type="radio" name="residentialStatus" value="nonResident">Non-resident
                <br>
                Board Scholarship: <input type="radio" name="boardScholarship" value="yes">Yes &nbsp; <input type="radio" name="boardScholarship" value="no">No
                <br>
                Phone no: <input type="number" name="studentPhone"><br>
                Email: <input type="email" name="studentEmail"><br>
                Date of Birth: <input type="date" name="dob"><br>
                National ID no: <input type="number" name="studentNID"><br>--}}

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

                <button class="btn btn-primary" type="submit">Sign Up</button>
            </form>

        </div>
    </div>

</body>
</html>

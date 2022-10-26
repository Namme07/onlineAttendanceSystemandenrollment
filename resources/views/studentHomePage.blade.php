<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Profile Page Design Example</title>

        <meta name="author" content="Codeconvey" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

        <!--Only for demo purpose - no need to add.-->
        <link rel="stylesheet" href="css/demo.css" />

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!-- <h1>This is Student Homepage</h1>
        you are {{ $student->studentName }}<br>
        your hall is {{ $student->hall }}
        You are a student of {{ $student->faculty }} faculty and {{ $student->department }} department <br>
        your level {{ $student->currentLevel }} and semester: {{ $student->currentSemester }} <br> -->

        <?php
        $user = \App\Models\Student::find(session()->get('user_id'))->first();
        $u_id = $user->id;
        $department = $student->department;
        $level = $student->currentLevel;
        $semester = $student->currentSemester;
        $semesterFees = DB::select('select * from semester_fees where semester_fees.department=? AND semester_fees.level=? AND semester_fees.semester=?',[$department,$level,$semester]);
        //$semesterFees = DB::select('select * from semester_fees where department=?',[$student->department]);

        ?>

        @foreach($semesterFees as $semesterFee)
            <?php
        $semesterFeeAmount = $semesterFee->totalSemesterFee
            ?>
        <!-- Semester fee is {{ $semesterFeeAmount }} -->

        @endforeach


        <!-- <a href="{{ route('gotoPaymentPage') }}">Go to Payment Page</a><br> -->



        <!-- <div class="ScriptTop">
            <div class="rt-container">
                <div class="col-rt-4" id="float-right">


                </div>
                <div class="col-rt-2">
                    <ul>
                        <li><a href="https://codeconvey.com/html-code-for-student-profile" title="Back to tutorial page">Back to Tutorial</a></li>
                    </ul>
                </div>
            </div>
        </div> -->

        <header class="ScriptHeader">
            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="rt-heading">
                        <h1>Student Profile</h1>
                        <p>Student's data saved to the database is shown here</p>
                    </div>
                </div>
            </div>
        </header>

        <section>
            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="Scriptcontent">

                        <!-- Student Profile -->
                        <div class="student-profile py-4">
                            <div class="container">
                                <div class="row">
                                <div class="col-lg-4">
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent text-center">
                                            <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
                                            <h3>{{ $student->studentName }}</h3>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-0"><strong class="pr-1">Student ID:</strong>{{ $student->studentID }}</p>
                                            <p class="mb-0"><strong class="pr-1">Department:</strong>{{ $student->department }}</p>
                                            <p class="mb-0"><strong class="pr-1">Faculty:</strong>{{ $student->faculty }}</p>
                                            <p class="mb-0"><strong class="pr-1">Session:</strong>{{ $student->session }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="{{ route('gotoPaymentPage') }}" class="btn btn-primary">Go to Payment Page</a>
                                    <br> <br>
                                    <a href="{{ route('admitCardDownload') }}" class="btn btn-primary">Admit Card Download</a>
                                    <br>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                                        </div>
                                        <div class="card-body pt-0">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th width="30%">Current Level</th>
                                                    <td width="2%">:</td>
                                                    <td>{{ $student->currentLevel }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Current Semester	</th>
                                                    <td width="2%">:</td>
                                                    <td>{{ $student->currentSemester }}</td>
                                                </tr>

                                                <tr>
                                                    <th width="30%">Date of Birth</th>
                                                    <td width="2%">:</td>
                                                    <td>{{ $student->dob }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Attached Hall</th>
                                                    <td width="2%">:</td>
                                                    <td>{{ $student->hall }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Residential Status</th>
                                                    <td width="2%">:</td>
                                                    <td>{{ $student->residentialStatus }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Student NID no.</th>
                                                    <td width="2%">:</td>
                                                    <td>{{ $student->studentNID }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div style="height: 26px"></div>
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent border-0">
                                                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Contact Information</h3>
                                            </div>
                                            <div class="card-body pt-0">
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th width="30%">Phone no.</th>
                                                        <td width="2%">:</td>
                                                        <td>{{ $student->studentPhone }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Email address</th>
                                                        <td width="2%">:</td>
                                                        <td>{{ $student->studentEmail }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    {{--<div style="height: 26px"></div>
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent border-0">
                                                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                                            </div>
                                            <div class="card-body pt-0">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- partial -->

                    </div>
                </div>
            </div>
        </section>
    <!-- Analytics -->
    </body>
</html>

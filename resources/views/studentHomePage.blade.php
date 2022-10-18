<html>
<body>
<h1>This is Student Homepage</h1>
you are {{ $student->studentName }}<br>
your hall is {{ $student->hall }}
You are a student of {{ $student->faculty }} faculty and {{ $student->department }} department <br>
your level {{ $student->currentLevel }} and semester: {{ $student->currentSemester }} <br>

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
$semesterFee = $semesterFee->totalSemesterFee
    ?>
Semester fee is {{ $semesterFee->totalSemesterFee }}

@endforeach


</body>
</html>

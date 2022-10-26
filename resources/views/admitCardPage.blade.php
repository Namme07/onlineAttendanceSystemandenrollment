<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .tab {
            display: inline-block;
            margin-left: 80px;
        }
    </style>
    <title>Admit Card</title>
</head>
<body style="max-width: 700px; margin-top: 50px; margin-right: 20px; margin-left: 20px; margin-bottom: 50px; box-sizing: border-box;">

<?php
$user = \App\Models\Student::find(session()->get('user_id'))->first();
$u_id = $user->id;
?>
<div style="padding-top: 50; box-sizing: border-box;">
    <div align="center">
        <p><b>HAJEE MOHAMMAD DANESH SCIENCE AND TECHNOLOGY UNIVERSITY <br>DINAJPUR, BANGLADESH</b></p>
    </div>
    <div align="center">
        <img src="images/HSTU_LOGO.jpg" alt="hstu_logo" height="84" width="66">
    </div>
    <div align="center">
        <p><b>ADMIT CARD</b></p>
    </div>
    <div align="left">
        <table>
            <tr>
                <td>NAME OF THE STUDENT<span class="tab"></span></td>
                <td> : </td>
                <td><b>{{ $user->studentName }}</b></td>
            </tr>
            <tr>
                <td>STUDENT ID<span class="tab"></span></td>
                <td> : </td>
                <td><b>{{ $user->studentID }}</b></td>
            </tr>
            <tr>
                <td>LEVEL<span class="tab"></span></td>
                <td> : </td>
                <td><b>{{ $user->currentLevel }}</b></td>
            </tr>
            <tr>
                <td>SEMESTER<span class="tab"></span></td>
                <td> : </td>
                <td><b>{{ $user->currentSemester }}</b></td>
            </tr>
            <tr>
                <td>SESSION<span class="tab"></span></td>
                <td> : </td>
                <td><b>{{ $user->session }}</b></td>
            </tr>
            <tr>
                <td>COMMENCEMENT OF EXAM<span class="tab"></span></td>
                <td> : </td>
                <td><b>12-09-2022</b></td>
            </tr>
        </table>
    </div>
    <br><br><br>
    <div align="right">
        <p><b>CONTROLLER OF EXAMINATION</b></p>
    </div>
    <div align="left">
        The Examinees- <br>
        <div>
            <ul type="-">
                <li>are self responsible to know the examination schedule.</li>
                <li>must carry their admit card for appearing in each exam.</li>
                <li>must put their signature in the respective coloumn of the attendance sheet.</li>
            </ul>
        </div>
    </div>
</div>



</body>
</html>

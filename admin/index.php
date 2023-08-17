<?php

include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/db.php");
$today = date("d-m-Y");

$sql = "select distinct * from students";
$result = $conn->query($sql);
$data = $result->num_rows;
$stud_count = $data;

$sql1 = "select * from student_attendance";
$result1 = $conn->query($sql1);
$data1 = $result1->num_rows;
$attend_count = ($data1/$stud_count) * 100;


$sql2 = "select * from student_attendance where date = '$today' and status = 0";
$result2 = $conn->query($sql2);
$data2 = $result2->num_rows;
$stud_checkin = $data2;


$sql3 = "select * from student_attendance where date = '$today' and status = 1";
$result3 = $conn->query($sql3);
$data3 = $result3->num_rows;
$stud_checkout = $data3;

$sql4 = "select distinct * from employees";
$result4 = $conn->query($sql4);
$data4 = $result4->num_rows;
$emp_count = $data4;

$sql5 = "select * from employee_attendance";
$result5 = $conn->query($sql5);
$data5 = $result5->num_rows;
$emp_attend_percent = ($data5/$emp_count)*100;

$sql6 = "select * from employee_attendance where date = '$today' and status = 0";
$result6 = $conn->query($sql6);
$data6 = $result6->num_rows;
$emp_checkin = $data6;


$sql7 = "select * from employee_attendance where date = '$today' and status = 1";
$result7 = $conn->query($sql7);
$data7 = $result7->num_rows;
$emp_checkout = $data7;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        *{
            margin:0;
            padding:0;
        }

        .container{
            display:flex;
            flex-wrap:wrap;
            align-items:center;
            justify-content:space-evenly;
            margin-top:50px;
        }

        .total-students, .students-attendance, .checked-in, .checked-out{
            
            width:300px;
            height:150px;
            border-radius:10px;
            box-shadow:1px 2px 5px grey;
        }

        .total-students .students-list .students-data{
            display:block;
            font-size:56px;
            font-family:sans-serif;
            text-align:center;
            color:white;
            text-shadow:1px 2px 10px rgb(68, 61, 61);
        }

        .total-students .students-list .total-students-title{
            display:block;  
            font-family:'Times New Roman', Times, serif;
            font-size:24px;
            font-weight:600;
            text-align:center;
            color:grey;
        }

        .total-students .redirection{
            display:block;
            text-align:center;
            box-shadow:1px 2px 5px grey;
            border-radius:10px;
            margin-top:30px;
            height:30px;
        }
        .total-students .redirection a{
            text-decoration:none;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding-top:5px;
            color:grey;
        }

        .total-students .redirection a:hover{
            color:rgb(230, 103, 230);
        }



        .students-attendance .attendance-percent .attendance-data{
            display:block;
            font-size:56px;
            font-family:sans-serif;
            text-align:center;
            color:white;
            text-shadow:1px 2px 10px rgb(68, 61, 61);
        }

        .students-attendance .attendance-percent .students-attendance-title{
            display:block;  
            font-family:'Times New Roman', Times, serif;
            font-size:24px;
            font-weight:600;
            text-align:center;
            color:grey;
        }

        .students-attendance .redirection{
            display:block;
            text-align:center;
            box-shadow:1px 2px 5px grey;
            border-radius:10px;
            margin-top:30px;
            height:30px;
        }
        .students-attendance .redirection a{
            text-decoration:none;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding-top:5px;
            color:grey;
        }

        .students-attendance .redirection a:hover{
            color:rgb(230, 103, 230);
        }



        .checked-in .checkedin-list .checkedin-data{
            display:block;
            font-size:56px;
            font-family:sans-serif;
            text-align:center;
            color:white;
            text-shadow:1px 2px 10px rgb(68, 61, 61);
        }

        .checked-in .checkedin-list .checkedin-students-title{
            display:block;  
            font-family:'Times New Roman', Times, serif;
            font-size:24px;
            font-weight:600;
            text-align:center;
            color:grey;
        }

        .checked-in .redirection{
            display:block;
            text-align:center;
            box-shadow:1px 2px 5px grey;
            border-radius:10px;
            margin-top:30px;
            height:30px;
        }
        .checked-in .redirection a{
            text-decoration:none;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding-top:5px;
            color:grey;
        }

        .checked-in .redirection a:hover{
            color:rgb(230, 103, 230);
        }




        .checked-out .checkedout-list .checkedout-data{
            display:block;
            font-size:56px;
            font-family:sans-serif;
            text-align:center;
            color:white;
            text-shadow:1px 2px 10px rgb(68, 61, 61);
        }

        .checked-out .checkedout-list .checkedout-students-title{
            display:block;  
            font-family:'Times New Roman', Times, serif;
            font-size:24px;
            font-weight:600;
            text-align:center;
            color:grey;
        }

        .checked-out .redirection{
            display:block;
            text-align:center;
            box-shadow:1px 2px 5px grey;
            border-radius:10px;
            margin-top:30px;
            height:30px;
        }
        .checked-out .redirection a{
            text-decoration:none;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding-top:5px;
            color:grey;
        }

        .checked-out .redirection a:hover{
            color:rgb(230, 103, 230);
        }


        .total-employees, .employees-attendance, .checked-in, .checked-out{
            
            width:300px;
            height:150px;
            border-radius:10px;
            box-shadow:1px 2px 5px grey;
        }

        .total-employees .employees-list .employees-data{
            display:block;
            font-size:56px;
            font-family:sans-serif;
            text-align:center;
            color:white;
            text-shadow:1px 2px 10px rgb(68, 61, 61);
        }

        .total-employees .employees-list .total-employees-title{
            display:block;  
            font-family:'Times New Roman', Times, serif;
            font-size:24px;
            font-weight:600;
            text-align:center;
            color:grey;
        }

        .total-employees .redirection{
            display:block;
            text-align:center;
            box-shadow:1px 2px 5px grey;
            border-radius:10px;
            margin-top:30px;
            height:30px;
        }
        .total-employees .redirection a{
            text-decoration:none;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding-top:5px;
            color:grey;
        }

        .total-employees .redirection a:hover{
            color:rgb(230, 103, 230);
        }



        .employees-attendance .attendance-percent .attendance-data{
            display:block;
            font-size:56px;
            font-family:sans-serif;
            text-align:center;
            color:white;
            text-shadow:1px 2px 10px rgb(68, 61, 61);
        }

        .employees-attendance .attendance-percent .employees-attendance-title{
            display:block;  
            font-family:'Times New Roman', Times, serif;
            font-size:24px;
            font-weight:600;
            text-align:center;
            color:grey;
        }

        .employees-attendance .redirection{
            display:block;
            text-align:center;
            box-shadow:1px 2px 5px grey;
            border-radius:10px;
            margin-top:30px;
            height:30px;
        }
        .employees-attendance .redirection a{
            text-decoration:none;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding-top:5px;
            color:grey;
        }

        .employees-attendance .redirection a:hover{
            color:rgb(230, 103, 230);
        }



        .checked-in .checkedin-list .checkedin-data{
            display:block;
            font-size:56px;
            font-family:sans-serif;
            text-align:center;
            color:white;
            text-shadow:1px 2px 10px rgb(68, 61, 61);
        }

        .checked-in .checkedin-list .checkedin-employees-title{
            display:block;  
            font-family:'Times New Roman', Times, serif;
            font-size:24px;
            font-weight:600;
            text-align:center;
            color:grey;
        }

        .checked-in .redirection{
            display:block;
            text-align:center;
            box-shadow:1px 2px 5px grey;
            border-radius:10px;
            margin-top:30px;
            height:30px;
        }
        .checked-in .redirection a{
            text-decoration:none;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding-top:5px;
            color:grey;
        }

        .checked-in .redirection a:hover{
            color:rgb(230, 103, 230);
        }




        .checked-out .checkedout-list .checkedout-data{
            display:block;
            font-size:56px;
            font-family:sans-serif;
            text-align:center;
            color:white;
            text-shadow:1px 2px 10px rgb(68, 61, 61);
        }

        .checked-out .checkedout-list .checkedout-employees-title{
            display:block;  
            font-family:'Times New Roman', Times, serif;
            font-size:24px;
            font-weight:600;
            text-align:center;
            color:grey;
        }

        .checked-out .redirection{
            display:block;
            text-align:center;
            box-shadow:1px 2px 5px grey;
            border-radius:10px;
            margin-top:30px;
            height:30px;
        }
        .checked-out .redirection a{
            text-decoration:none;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding-top:5px;
            color:grey;
        }

        .checked-out .redirection a:hover{
            color:rgb(230, 103, 230);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="total-students">
            <div class="students-list">
                <div class="students-data"><?php echo $stud_count; ?></div>
                <div class="total-students-title">Total Students</div>
            </div>
            <div class="redirection">
                <a href="../Students/student.php" class="links">More Info</a>
            </div>
        </div>

        <div class="students-attendance">
            <div class="attendance-percent">
                <div class="attendance-data"><?php echo number_format($attend_count, 2); ?></div>
                <div class="students-attendance-title">Attendance Percentage</div>
            </div>
            <div class="redirection">
                <a href="../Students Attendance/attendance.php" class="links">More Info</a>
            </div>
        </div>

        <div class="checked-in">
            <div class="checkedin-list">
                <div class="checkedin-data"><?php echo $stud_checkin; ?></div>
                <div class="checkedin-students-title">Checked In Today</div>
            </div>
            <div class="redirection">
                <a href="../Students Attendance/attendance.php" class="links">More Info</a>
            </div>
        </div>

        <div class="checked-out">
            <div class="checkedout-list">
                <div class="checkedout-data"><?php echo $stud_checkout; ?></div>
                <div class="checkedout-students-title">Checked Out Today</div>
            </div>
            <div class="redirection">
                <a href="../Students Attendance/attendance.php" class="links">More Info</a>
            </div>
        </div>




        <div class="total-employees">
            <div class="employees-list">
                <div class="employees-data"><?php echo $emp_count; ?></div>
                <div class="total-employees-title">Total employees</div>
            </div>
            <div class="redirection">
                <a href="../Employees/employee.php" class="links">More Info</a>
            </div>
        </div>

        <div class="employees-attendance">
            <div class="attendance-percent">
                <div class="attendance-data"><?php echo number_format($emp_attend_percent, 2); ?></div>
                <div class="employees-attendance-title">Attendance Percentage</div>
            </div>
            <div class="redirection">
                <a href="../Employees Attendance/attendance.php" class="links">More Info</a>
            </div>
        </div>

        <div class="checked-in">
            <div class="checkedin-list">
                <div class="checkedin-data"><?php echo $emp_checkin; ?></div>
                <div class="checkedin-employees-title">Checked In Today</div>
            </div>
            <div class="redirection">
                <a href="../Employees Attendance/attendance.php" class="links">More Info</a>
            </div>
        </div>

        <div class="checked-out">
            <div class="checkedout-list">
                <div class="checkedout-data"><?php echo $emp_checkout; ?></div>
                <div class="checkedout-employees-title">Checked Out Today</div>
            </div>
            <div class="redirection">
                <a href="../Employees Attendance/attendance.php" class="links">More Info</a>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>

<?php include("../includes/footer.php");  ?>
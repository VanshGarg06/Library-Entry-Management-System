<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/939c1df20f.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
           @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');
.sidebar{
    width:300px;
    height:600px;   
    box-shadow:1px 2px 10px grey;
    border-radius:10px;
    margin-top: 10px;
    float:left;
}
.sidebar-elements{
    list-style-type:none;
    padding-left:0px;
}
.sidebar-items{
    display:block;
    text-align:center;
    cursor:pointer;
    height:50px;
    padding:0px;
    padding-top:20px;
    border-bottom:1px solid grey;
    border-radius:10px;
}

.sidebar-items a{
    text-decoration:none;
    text-align:center;
    font-family:'Ubuntu', sans-serif;
    color:grey;
    position:relative;
    font-size:24px;
    cursor:pointer;
}
.sidebar-items:hover{
    text-shadow:1px 2px 5px grey;
}

    </style>
</head>
<body>
    

    <div class="sidebar">
        <ul class="sidebar-elements">
            <li class="sidebar-items"><a href="../admin/index.php">Dashboard</a></li>
            <li class="sidebar-items"><a href="../Students Attendance/attendance.php">Student Attendance</a></li>
            <li class="sidebar-items"><a href="../Students/student.php">Students</a></li>
            <li class="sidebar-items"><a href="../Employees Attendance/attendance.php">Employee Attendance</a></li>
            <li class="sidebar-items"><a href="../Employees/employee.php">Employees</a></li>
        </ul>
    </div>

</body>
</html>
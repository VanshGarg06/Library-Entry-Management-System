<?php
session_start();
?>
<?php
include('./includes/db.php');
$nameing = '';
$flag = 0;
$sql = '';
if(isset($_POST['empattsubmit']))
{
    $referenceid = $_POST['reference-id'];
    $temper = $_POST['tempdeg'];
    $info = $_POST['taginfo'];
    $checking = $_POST['checker'];
    date_default_timezone_set('Asia/Kolkata');
    $cdate = date("d-m-Y");
    $time = date("H:i:s");
    $sql1 = "select employee_name from employees where id='$referenceid'";
    $data = mysqli_query($conn,$sql1);
    $row = mysqli_fetch_assoc($data);
    $nameing = $row['employee_name'];
    if($checking=='CheckOut')
    {
        echo "<script>alert('Checkout')</script>";
        $sql = "update employee_attendance set timeOut='$time' where id='$referenceid'";
        $flag = 1;
        $sql1 = "update employee_attendance set status=1 where id='$referenceid'";
        $stat = mysqli_query($conn, $sql1);
    }
    else{
        echo "<script>alert('Checkin')</script>";
        $sql = "insert into employee_attendance(id,date,name_employee,temp,tag,timeIn,timeOut) values('$referenceid','$cdate','$nameing','$temper','$info','$time','')";
        $flag = 0;
        $sql1 = "update employee_attendance set status=0 where id='$referenceid'";
        $stat = mysqli_query($conn, $sql1);
    }
    $data1 = mysqli_query($conn,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            background-color:white;
        }

        .wrapper{
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .employee-attendance{
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
        }

        .wrapper .employee-attendance .logo img{
            width:150px;
            height:150px;
        }

        .wrapper .employee-attendance .main{
            background-color:white;
            border-radius:20px;
            padding:10px;
            box-shadow:1px 2px 5px grey;
            height:300px;
        }

        .wrapper .employee-attendance .main .page-header{
            display:block;
            text-align:center;
            color:grey;
            font-family:sans-serif;
        }

        .wrapper .employee-attendance .main .forming form input{
            display:block;
            width:80%;
            margin-left:40px;
            height:30px;
            margin-bottom:10px;
            border-radius:5px;
            border:none;
            outline:none;
            box-shadow:1px 2px 5px grey;
        }

        .wrapper .employee-attendance .main .forming form select{
            display:block;
            margin-left:40px;
            height:30px;
            background-color:whitesmoke;
            margin-bottom:10px;
            width:80%;
        }

        .wrapper .employee-attendance .main .forming form input:hover{
            border:1px solid rgb(134, 212, 251);
            box-shadow:1px 2px 5px rgb(134, 212, 251);
        }

        .hide{
            display:none;
            visibility:hidden;
        }

        .wrapper .employee-attendance .main .forming form input[type='submit']{
            background-color:white;
            color:rgb(84, 196, 248);
            border:1px solid rgb(84, 196, 248);
        }

        .wrapper .employee-attendance .main .forming form input[type='submit']:hover{
            background-color:rgb(84, 196, 248);
            color:white;
        }

        .dateandtime{
            display:flex;
            align-items:center;
            justify-content: center;
            flex-direction:column;
        }

        .studname{
            width:400px;
            text-align:center;
            font-size:20px;
            padding:0;
            height:50px;
            box-shadow:1px 2px 5px grey;
            border-radius:10px;
            margin-top:5px;
            color:grey;
        }

        .date{
            width:400px;
            text-align:center;
            font-size:20px;
            padding:0;
            height:50px;
            box-shadow:1px 2px 5px grey;
            border-radius:10px;
            margin-top:5px;
            color:grey;
        }

        .time{
            width:400px;
            text-align:center;
            font-size:20px;
            padding:0;
            height:50px;
            box-shadow:1px 2px 5px grey;
            border-radius:10px;
            margin-top:5px;
            color:grey;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="employee-attendance">
            <div class="logo">
                <img src="./GGSIPU.png" alt="Indraprasath University">
            </div>

            <div class="main">
                <div class="page-header">
                    <h1 class="heading">Employee Attendance System</h1>
                </div>
                <div class="forming">
                    <form method="post" action="./employee_panel.php">
                        <select id="checker" name="checker" onchange="changedefault();" >
                            <option value="CheckIn">Check In</option>
                            <option value="CheckOut">Check Out</option>
                        </select>
                        <input type="number" class="reference-id" name="reference-id" placeholder="Enter Reference Id">
                        <input type="number" id="hideelem" class="tempdeg" name="tempdeg" placeholder="Enter Temperature">
                        <input type="text" id="hideelem1" class="taginfo" name="taginfo" placeholder="Enter Tag">
                        <input type="submit" class="studattsubmit" value="Check" name="empattsubmit">
                    </form>
                </div>
            </div>

            <div class="dateandtime">
                <div class="studname"><p><?php if($flag){
                    echo "Time Out:" . $nameing;
                } else {
                    echo "Time In:" . $nameing;
                }?></p></div>
                <div class="date"><p><?php 
                date_default_timezone_set('Asia/Kolkata');
                echo date("l F d,Y");
                ?></p></div>
                <div class="time"><p><?php
                date_default_timezone_set('Asia/Kolkata');
                 echo date("H:i:sA"); ?></p></div>
            </div>
        </div>
    </div>
</body>
<script>
    
    function changedefault(){
        var checking = document.getElementById('checker');
        var element1 = document.getElementById('hideelem');
        var element2 = document.getElementById('hideelem1');
        // var clocking = checking.options[checking.selectedIndex].text;
        var clocking = checking.value;
        if(clocking=='CheckOut')
        {
            element1.classList.add("hide");
            element2.classList.add("hide");
        }
        else{
            element1.classList.remove("hide");
            element2.classList.remove("hide");
        }
    }
</script>
</html>
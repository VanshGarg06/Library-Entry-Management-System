<?php
session_start();
?>
<?php
include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/db.php");
$flag = 0;
$rollnum = $_GET['rol'];
$selectquery = "select * from student_attendance where id='$rollnum'";
$data = mysqli_query($conn, $selectquery);
$arrdata = mysqli_fetch_array($data);
?>


<?php
if(isset($_POST['submit_update1']))
{

    $roll_update = $_GET['rol'];

    $date = $_POST['aedit_date'];
    $temp = $_POST['aedit_temp'];
    $tag = $_POST['aedit_tag'];
    $timein = $_POST['aedit_timein'];
    $timeout = $_POST['aedit_timeout'];

    $sql = "update student_attendance set date='$date',temp='$temp',tag='$tag',timeIn='$timein',timeOut='$timeout' where id=$roll_update";

    $result = mysqli_query($conn,$sql);
    if($result){
        $flag = 1;
        echo "<script>alert('Record Updated')</script>";

?>
<meta http-equiv='refresh' content='10; url=http://localhost/Library%20Attendance/Students%20Attendance/attendance.php'>
<?php
    }
    else{
        echo "<script>alert('Failed to update records')</script>";
    }

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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap'); 
        .container{
            width:500px;
            height:500px;
        }
        .header{
            text-align:center;
            font-family: 'Poppins', sans-serif;
            font-weight:500;
        }
        .heading{
            padding-top:0;
        }

        main{
            display:flex;
            align-items:center;
            justify-content:center;
            margin-top:0px;
            margin-bottom:0px;
        }

        form{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
        }

        label{
            font-family:sans-serif;
            letter-spacing:1px;
            word-spacing:1px;
        }

        input{
            width:80%;
            height:25px;
            border-radius:5px;
            outline:none;
            border:none;
            box-shadow:inset 1px 2px 5px grey,1px 2px 10px grey;
            padding-left:20px;
        }

        input[type='submit']
        {
            background-color:white;
            height:40px;
            font-size:18px;
            color:rgb(203, 134, 222);
            margin-top:20px;
        }

        .success{
            width:calc(100% - 300px);
            border:1px solid green;
            background-color:whitesmoke;
            text-align:center;
            margin-left:300px;
            height:40px;
            margin-bottom:5px;
        }

        .success p{
            color:green;
            font-size:14px;
            font-weight:600;
        }

        .defeat{
            width:calc(100% - 300px);
            border:1px solid red;
            background-color:whitesmoke;
            text-align:center;
            height:40px;
            margin-left:300px;
            margin-bottom:5px;
        }

        .defeat p{
            color:red;
            font-size:14px;
            font-weight:600;
        }
        .btn {
            background-color:cornflowerblue;
            color:white;
            border:none;
            width:70px;
            height:20px;
            border-radius:5px;
        }

        .btn a{
            text-decoration:none;
            color:white;
        }
        </style>
</head>
<body>
<?php if($flag){ ?>
    <div class="success">
        <p>You have updated the attendance of student successfully!</p>
    </div>
    <?php } ?>
    <main>
        <div class="container">
            <div class="heading">
                <h1 class="header">Edit Student Attendance</h1>
                <button type="button" class="btn"><a href="../Students Attendance/attendance.php">Back</a></button>
            </div>
            <div class="add-form">
                <form action="" method="post">
                    <h1 style="display:block;text-align:center;font-weight:bolder;font-size:18px;color:grey;"><?php echo "$rollnum" ?></h1>
                    <label for="aedit_date">Date</label>
                    <input type="text" class="aedit_date" name="aedit_date" value="<?php echo $arrdata['date'] ?>" id="aedit_date" >
                    <label for="aedit_temp">Temperature</label>
                    <input type="text" class="aedit_temp" name="aedit_temp" value="<?php echo $arrdata['temp'] ?>" id="aedit_temp" >
                    <label type="aedit_tag">Tag</label>
                    <input type="text" class="aedit_tag" name="aedit_tag" value="<?php echo $arrdata['tag'] ?>" id="aedit_tag" >
                    <label for="aedit_timein">Time In</label>
                    <input type="text" class="aedit_timein" name="aedit_timein" value="<?php echo $arrdata['timeIn'] ?>" id="aedit_timein">
                    <label for="aedit_timeout">Time Out</label>
                    <input type="text" class="aedit_timeout" name="aedit_timeout" value="<?php echo $arrdata['timeOut'] ?>" id="aedit_timeout">
                    <input type="submit" value="Edit Student Attendance" class="add-btn" name="submit_update1">
                </form>
            </div>
        </div>
    </main>
    
</body>
</html>

<?php include("../includes/footer.php"); ?>
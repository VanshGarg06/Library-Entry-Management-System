<?php
session_start();
?>
<?php
include('./includes/db.php');
$_SESSION["user-data"] = '';
if(isset($_POST['submit-user']))
{
    $full = $_POST['fullname'];
    $design = $_POST['designation'];
    $DOB = $_POST['dob'];
    $username = $_POST['Username'];
    $address = $_POST['address'];
    $contact = $_POST['phone'];
    $_SESSION["user-data"] = $_POST['fullname'];
    $sql = "insert into users(fullname,designation,username,birthdate,phone,address) VALUES ('$full','$design','$username','$DOB','$contact','$address')";
    $data = mysqli_query($conn, $sql);
    if($data)
    {
        echo "<script>alert('Login Successful')</script>";

?>
<meta http-equiv="refresh" content="0;url=http://localhost/Library%20Attendance/index2.php">
<?php 
    }
    else{
        echo "<script>alert('Login Successful')</script>";
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
        .main{
            display:flex;
            align-items:center;
            justify-content: flex-start;
            flex-direction:column;
            width:500px;
            height:600px;
            border-radius:20px;
            background-color:white;
            box-shadow:1px 2px 5px grey;
            margin-left:500px;
            margin-top:50px;
        }

        .login-header .heading{
            font-size:36px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            letter-spacing:1px;
            color:grey;
        }

        .login-form form label{
            display:block;
            font-size:18px;
            color:grey;
            margin-bottom:5px;
            width:80%;
        }

        .login-form form input{
            width:380px;
            height:35px;
            padding:0 5px 0 10px;
            margin-bottom:2px;
            display:block;
            border-radius:5px;
            outline:none;
            border:1px solid grey;
            font-size:18px;
        }

        .login-form form input[type='submit']{
            background-color:white;
            color:rgb(86, 206, 86);
            border:1px solid rgb(65, 136, 65);
            width:400px;
            margin-top:20px;
        }

        .login-form form input[type='submit']:hover{
            background-color:rgb(86, 206, 86);
            color:white;
            border:none;
        }

    </style>
</head>
<body>
    <div class="main">
        <div class="login-header">
            <h1 class="heading">Log In</h1>
        </div>

        <div class="login-form">
            <form method="post" action="login.php">
                <label for="user-name">Full Name:</label>
                <input type="text" class="user-name" name="fullname" placeholder="Enter your name" required>
                <label for="user-name">Designation:</label>
                <input type="text" class="designation" name="designation" placeholder="Enter your designation" required>
                <label for="Username">Username:</label>
                <input type="text" class="Username" name="Username" placeholder="Enter your username" required>
                <label for="dob">Date Of Birth:</label>
                <input type="date" class="dob" name="dob" required>
                <label for="contact">Phone:</label>
                <input type="number" class="contact" name="phone" placeholder="Enter your contact number" required>
                <label for="address">Address:</label>
                <textarea class="address" name="address" rows="3" cols="50">Enter your address</textarea>
                <input type="submit" class="submit-details" name="submit-user">
            </form>
        </div>
    </div>
</body>
</html>
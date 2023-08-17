<?php
session_start();
?>
<?php

include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/db.php");

$flag = 0;
    if(isset($_POST['submit']))
    {
$id = $_POST['s_ID'];
$name = $_POST['s_name'];
$mail = $_POST['s_email'];
$contact = $_POST['s_phone'];
$address = $_POST['s_address'];
$branch = $_POST['s_branch'];
$adm_year = $_POST['s_year'];
    $sql = "insert into students(id,student_name,student_email,student_phone,student_residence,student_branch,admission_year) VALUES ('$id','$name','$mail','$contact','$address','$branch','$adm_year')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            $flag = 1;
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
        <p>You have inserted the information of student successfully!</p>
    </div>
    <?php }  ?>
    <!-- <div class="defeat">
        <p>Sorry we are unable to process the request!</p>
    </div>
     -->
    <main>
        <div class="container">
            <div class="heading">
                <h1 class="header">Add New Student</h1>
                <button type="button" class="btn"><a href="./student.php">Back</a></button>
            </div>
            <div class="add-form">
                <form action="../Students/add_student.php" method="post">
                    <label for="s_ID">Reference Id</label>
                    <input type="number" class="s_ID" name="s_ID" id="s_ID" placeholder="Enter Reference Id">
                    <label for="s_name">Student Name</label>
                    <input type="text" class="s_name" name="s_name" id="s_name" placeholder="Enter Student Name">
                    <label for="s_email">Email</label>
                    <input type="text" class="s_email" name="s_email" id="s_email" placeholder="Enter Student Email">
                    <label type="s_phone">Phone Number</label>
                    <input type="text" class="s_phone" name="s_phone" id="s_phone" placeholder="Enter Phone Number">
                    <label for="s_address">Residence Address</label>
                    <input type="text" class="s_address" name="s_address" id="s_address" placeholder="Enter Address">
                    <label for="s_branch">Branch</label>
                    <input type="text" class="s_branch" name="s_branch" id="s_branch" placeholder="Enter Branch">
                    <label for="s_year">Admission Year</label>
                    <input type="text" class="s_year" name="s_year" id="s_year" placeholder="Enter Admission Year">
                    <input type="submit" value="Add Student" class="add-btn" name="submit">
                </form>
            </div>
        </div>
    </main>
    
</body>
</html>

<?php include("../includes/footer.php");?>
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
$id = $_POST['e_ID'];
$name = $_POST['e_name'];
$mail = $_POST['e_email'];
$contact = $_POST['e_phone'];
$address = $_POST['e_address'];
$profile = $_POST['e_branch'];
$j_year = $_POST['e_year'];
    $sql = "insert into employees(id,employee_name,employee_email,employee_phone,employee_residence,employee_profile,joining_year) VALUES ('$id','$name','$mail','$contact','$address','$profile','$j_year')";
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
        <p>You have inserted the information of employee successfully!</p>
    </div>
    <?php }  ?>
    <!-- <div class="defeat">
        <p>Sorry we are unable to process the request!</p>
    </div>
     -->
    <main>
        <div class="container">
            <div class="heading">
                <h1 class="header">Add New Employee</h1>
                <button type="button" class="btn"><a href="./employee.php">Back</a></button>
            </div>
            <div class="add-form">
                <form action="../Employees/add_employee.php" method="post">
                    <label for="e_ID">Employee Id</label>
                    <input type="number" class="e_ID" name="e_ID" id="e_ID" placeholder="Enter Reference Id">
                    <label for="e_name">Employee Name</label>
                    <input type="text" class="e_name" name="e_name" id="e_name" placeholder="Enter Employee Name">
                    <label for="e_email">Email</label>
                    <input type="text" class="e_email" name="e_email" id="e_email" placeholder="Enter Employee Email">
                    <label type="e_phone">Phone Number</label>
                    <input type="text" class="e_phone" name="e_phone" id="e_phone" placeholder="Enter Phone Number">
                    <label for="e_address">Residence Address</label>
                    <input type="text" class="e_address" name="e_address" id="e_address" placeholder="Enter Address">
                    <label for="e_branch">Profile</label>
                    <input type="text" class="e_branch" name="e_branch" id="e_branch" placeholder="Enter Profile">
                    <label for="e_year">Joining Year</label>
                    <input type="text" class="e_year" name="e_year" id="e_year" placeholder="Enter Joining Year">
                    <input type="submit" value="Add Employee" class="add-btn" name="submit">
                </form>
            </div>
        </div>
    </main>
    
</body>
</html>

<?php include("../includes/footer.php");?>
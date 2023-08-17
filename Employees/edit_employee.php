<?php
session_start();
?>
<?php
include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/db.php");
$flag = 0;
$ID = $_GET['idn'];
$selectquery = "select * from employees where id='$ID'";
$result = mysqli_query($conn, $selectquery);
$arrdata = mysqli_fetch_array($result);
?>
<?php
if(isset($_POST['submit_update']))
{

    $id_update = $_GET['idn'];

    $name = $_POST['emedit_name'];
    $email = $_POST['emedit_email'];
    $contact = $_POST['emedit_phone'];
    $residence = $_POST['emedit_address'];
    $year = $_POST['emedit_year'];

    $sql = "update employees set employee_name='$name',employee_email='$email',employee_phone='$contact',employee_residence='$residence',joining_year='$year' where id=$id_update";

    $result = mysqli_query($conn,$sql);
    if($result){
        $flag = 1;
        echo "<script>alert('Record Updated')</script>";
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
        <p>You have updated the information of employee successfully!</p>
    </div>
    <?php } ?>
    <main>
        <div class="container">
            <div class="heading">
                <h1 class="header">Edit Employee</h1>
                <button type="button" class="btn"><a href="./employee.php">Back</a></button>
            </div>
            <div class="add-form">
                <form action="" method="post">
                    <h1 style="display:block;text-align:center;font-weight:bolder;font-size:18px;color:grey;"><?php echo "$ID" ?></h1>
                    <label for="emedit_name1">Employee Name</label>
                    <input type="text" class="emedit_name1" name="emedit_name" value="<?php echo $arrdata['employee_name'] ?>" id="emedit_name" >
                    <label for="emedit_email1">Email</label>
                    <input type="text" class="emedit_email1" name="emedit_email" value="<?php echo $arrdata['employee_email'] ?>" id="emedit_email" >
                    <label type="emedit_phone1">Phone Number</label>
                    <input type="text" class="emedit_phone1" name="emedit_phone" value="<?php echo $arrdata['employee_phone'] ?>" id="emedit_phone" >
                    <label for="emedit_address1">Residence Address</label>
                    <input type="text" class="emedit_address1" name="emedit_address" value="<?php echo $arrdata['employee_residence'] ?>" id="emedit_address">
                    <label for="emedit_year1">Joining Year</label>
                    <input type="text" class="emedit_year1" name="emedit_year" value="<?php echo $arrdata['joining_year'] ?>" id="emedit_year">
                    <input type="submit" value="Edit Employee" class="add-btn" name="submit_update">
                </form>
            </div>
        </div>
    </main>
    
</body>
</html>

<?php include("../includes/footer.php"); ?>
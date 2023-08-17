<?php
session_start();
?>
<?php

include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/db.php");
$Id = '';
$emp_name = '';
$emp_email = '';
$emp_phone = '';
$emp_residence = '';
$emp_branch = '';
$emp_admission = '';


?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="text-align:center;">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="text-align:center;">
      <h1 style="color:pink;text-shadow:1px 2px 5px grey;text-align:center;">
        Employees List
      </h1>
    </div>
</div>

<div class="special-buttons" style="background-color:white;width:calc(100%-300px);text-align:center;">
    <button type="button" class="new_employee" style="background-color:cornflowerblue; color:white; border:none;
    width:100px;height:50px;border-radius:10px;font-family:20px;margin-right:20px;"><a href="./add_employee.php" style="text-decoration:none;color:white;">New Employee</a></button>
    <button type="button" class="print_screen" style="background-color:cornflowerblue; color:white; border:none;
    width:100px;height:50px;border-radius:10px;font-family:20px;margin-left:20px;" onclick="window.print();">Print Preview</button>
</div>

<div class="data-table">
    <table style="height:400px;margin-top:20px;overflow:scroll;">
        <thead>
            <tr>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Employee Id</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Name</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Email</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Phone</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Residence</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Job Profile</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Joining Year</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Tools</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $result = mysqli_query($conn,"select * from employees");
             while($row = mysqli_fetch_assoc($result))
                  {
                        $Id = $row['id'];
                        $emp_name = $row['employee_name'];
                        $emp_email = $row['employee_email'];
                        $emp_phone = $row['employee_phone'];
                        $emp_residence = $row['employee_residence'];
                        $emp_branch = $row['employee_profile'];
                        $emp_admission = $row['joining_year'];
            
                        ?>
            <tr>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $Id; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $emp_name; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $emp_email; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $emp_phone; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $emp_residence; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $emp_branch; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $emp_admission; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;">
                <a href="edit_employee.php?idn=<?php echo $row['id'];?>&nm=<?php echo $row['employee_name'];?>&mail=<?php echo $row['employee_email'];?>&contact=<?php echo $row['employee_phone'];?>&address=<?php echo $row['employee_residence'];?>&admyear=<?php echo $row['joining_year'];?>" style="text-decoration:none;">Edit</a>
                
                <a href="delete.php?idn=<?php echo $row['id'];?>" style="text-decoration:none;" onclick="return checkdelete()">Delete</a></td>
            </tr>

        </tbody>
        <?php
              }
          ?> 
    </table>
</div>
<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to delete this record?');
    }
            </script>
    
<?php include("../includes/footer.php");  ?>

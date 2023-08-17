<?php
session_start();
?>
<?php
include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/db.php");
$Id = '';
$stud_name = '';
$stud_email = '';
$stud_phone = '';
$stud_residence = '';
$stud_branch = '';
$stud_admission = '';
?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="text-align:center;">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="text-align:center;">
      <h1 style="color:pink;text-shadow:1px 2px 5px grey;text-align:center;">
        Students List
      </h1>
    </div>
</div>

<div class="special-buttons" style="background-color:white;width:calc(100%-300px);text-align:center;">
    <button type="button" class="new_student" style="background-color:cornflowerblue; color:white; border:none;
    width:100px;height:50px;border-radius:10px;font-family:20px;margin-right:20px;"><a href="./add_student.php" style="text-decoration:none;color:white;">New Student</a></button>
    <button type="button" class="print_screen" style="background-color:cornflowerblue; color:white; border:none;
    width:100px;height:50px;border-radius:10px;font-family:20px;margin-left:20px;" onclick="window.print();">Print Preview</button>
</div>

<div class="data-table">
    <table style="height:400px;margin-top:20px;overflow:scroll;">
        <thead>
            <tr>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Reference Id</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Name</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Email</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Phone</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Residence</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Branch</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Admission Year</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Tools</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $result = mysqli_query($conn,"select * from students");
             while($row = mysqli_fetch_assoc($result))
                  {
                        $Id = $row['id'];
                        $stud_name = $row['student_name'];
                        $stud_email = $row['student_email'];
                        $stud_phone = $row['student_phone'];
                        $stud_residence = $row['student_residence'];
                        $stud_branch = $row['student_branch'];
                        $stud_admission = $row['admission_year'];
            
                        ?>
            <tr>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $Id; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $stud_name; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $stud_email; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $stud_phone; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $stud_residence; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $stud_branch; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $stud_admission; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;">
                <a href="edit_student.php?idn=<?php echo $row['id'];?>&nm=<?php echo $row['student_name'];?>&mail=<?php echo $row['student_email'];?>&contact=<?php echo $row['student_phone'];?>&address=<?php echo $row['student_residence'];?>&admyear=<?php echo $row['admission_year'];?>" style="text-decoration:none;">Edit</a>
                
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
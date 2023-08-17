<?php
session_start();
?>
<?php
include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/db.php");
$Id = '';
$date = '';
$name = '';
$temperature = '';
$tag = '';
$timein = '';
$timeout = '';
?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="text-align:center;">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="text-align:center;">
      <h1 style="color:pink;text-shadow:1px 2px 5px grey;text-align:center;">
        Students Attendance
      </h1>
    </div>
</div>

<div class="special-buttons" style="background-color:white;width:calc(100%-300px);text-align:center;">
    <button type="button" class="print_screen" style="background-color:cornflowerblue; color:white; border:none;
    width:100px;height:50px;border-radius:10px;font-family:20px;margin-left:20px;" onclick="window.print();">Print Preview</button>
</div>

<div class="data-table">
    <table style="height:400px;margin-top:20px;overflow:scroll;">
        <thead>
            <tr>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Reference Id</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Date</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Name</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Temp</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Tag</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Time In</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Time Out</th>
                <th style="text-align:center;background-color:whitesmoke;width:150px;height:50px;color:grey;font-size:18px;">Tools</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $result = mysqli_query($conn,"select * from student_attendance");
             while($row = mysqli_fetch_assoc($result))
                  {
                        $Id = $row['id'];
                        $date = $row['date'];
                        $name = $row['name_student'];
                        $temperature = $row['temp'];
                        $tag = $row['tag'];
                        $timein = $row['timeIn'];
                        $timeout = $row['timeOut'];
            
                        ?>
            <tr>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $Id; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $date; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $name; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $temperature; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $tag; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $timein; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;color:grey;font-size:18px;"><?php echo $timeout; ?></td>
                <td style="text-align:center;background-color:white;width:150px;height:50px;">

                <a style="text-decoration:none;" href="update_attendance.php?rol=<?php echo $row['id']; ?>&tarik=<?php echo $row['date']; ?>&naam=<?php echo $row['name_student']; ?>&degree=<?php echo $row['temp']; ?>&extra=<?php echo $row['tag']; ?>&intime=<?php echo $row['timeIn']; ?>&outtime=<?php echo $row['timeOut']; ?>">Edit</a>
                
                <a href="deleteattendance.php?idn=<?php echo $row['id'];?>" style="text-decoration:none;" onclick="return checkdelete()">Delete</a></td>
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


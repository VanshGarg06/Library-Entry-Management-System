<?php
session_start();
?>
<?php
include('../includes/db.php');
$roll = $_GET['idn'];
$sql = "delete from student_attendance where id = '$roll';";
$result = mysqli_query($conn, $sql);
if($result)
{
    echo "<font color='green'>Record deleted from database";
    ?>
<meta http-equiv="refresh" content="0; url=http://localhost/Library%20Attendance/Students%20Attendance/attendance.php">
    <?php
}
else{
    echo "<font color='red'>Failed to delete record from database";
}
?>
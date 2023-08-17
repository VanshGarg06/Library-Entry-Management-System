<?php
session_start();
?>
<?php
include('../includes/db.php');

$id_n = $_GET['idn'];
$sql = "delete from students where id = '$id_n';";
$result = mysqli_query($conn, $sql);

if($result)
{
    echo "<font color='green'>Record deleted from database";
    ?>
<meta http-equiv="refresh" content="0; url=http://localhost/Library%20Attendance/Students/student.php">
    <?php
}
else{
    echo "<font color='red'>Failed to delete record from database";
}

?>
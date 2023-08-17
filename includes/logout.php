<?php
session_start();
?>
<?php
include("./db.php");
session_unset();
session_destroy();
echo "<p style='display:block;text-align:center;color:grey;font-size:24px;'>Thank you for using our Services.</p>";
header("../index.php");

?>

<meta http-equiv="refresh" content="10;url=http://localhost/Library%20Attendance/">
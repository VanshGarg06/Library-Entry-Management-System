<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database_name = 'library_attendance';
    $conn = mysqli_connect($servername, $username, $password, $database_name);
    if(!$conn)
    {
    echo "<script type='text javascript'>
            alert('Invalid Request to Database');
            </script>";
    }

?>
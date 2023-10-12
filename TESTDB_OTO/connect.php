<?php   
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_web_oto";

    $conn = new mysqli($host, $username, $password, $dbname);
    $run = mysqli_query($conn,'SET NAMES "UTF8"');
    return $run;
?>
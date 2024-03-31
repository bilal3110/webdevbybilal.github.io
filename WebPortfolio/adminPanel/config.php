<?php
    $server = "localhost";
    $username = "root";
    $pass = "";
    $database = "newportfolio";

    $conn = mysqli_connect( "$server", "$username", "$pass","$database" ) or die("Connection Failed");
?>
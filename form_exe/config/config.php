<?php
    $host = "127.0.0.1";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "sample";
    $portno = 3306;

    $con = new mysqli($host, $dbuser, $dbpassword,$dbname,$portno);
    $con->set_charset('utf8');
    // Check connection
    if ($con->connect_error) {
        die('Connection failed: ' . $con->connect_error);
        // die('ERROR: Could not connect. ' . mysqli_connect_error());
    }
?>
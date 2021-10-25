<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $DBname = "laptop";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $DBname);
    $connection -> set_charset("utf8");
    // Check connection
    if ($connection->connect_error) {
      die("Connection failed: " . $connection->connect_error);
}
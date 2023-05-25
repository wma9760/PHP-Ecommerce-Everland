<?php

$username = "root";
$password = "";
$server = "localhost";
$db = "aetsiskh_goto_db";

$con = mysqli_connect($server, $username, $password, $db);

if (!$con) {
    echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'> Database Connection not Establish</h3>";
}
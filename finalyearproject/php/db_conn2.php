<?php

$sname2= "localhost";

$unmae2= "root";

$password2 = "";

$db_name2 = "finalyearproject";

$conn2 = mysqli_connect($sname2, $unmae2, $password2, $db_name2);

if (!$conn2) {
    echo "Connection failed!";
}
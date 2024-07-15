<?php

$sname2= "localhost";

$unmae2= "D20201095609";

$password2 = "9zsMyTAQQqAg";

$db_name2 = "d20201095609";

$conn2 = mysqli_connect($sname2, $unmae2, $password2, $db_name2);

if (!$conn2) {
    echo "Connection failed!";
}
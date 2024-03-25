<?php

//create connection to db with mysqli_connect
$conn = new mysqli("mysql.server297.com:3308", "2024ashepherd", "ashepherd135", "welearnd_gdes261_2024_ashepherd");
// $conn = msqli_connect("hostname", "username", "password", "database name")

//Verify connection with mysqli_connect_errno and my_sqli_connect_error

if (mysqli_connect_errno()) {
    echo "Connection Error: " . mysqli_connect_error();
    exit();
}

?>
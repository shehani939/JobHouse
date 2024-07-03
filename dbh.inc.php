<?php
$serverName="localhost";
$dbusername="shehani";
$dbpassword="NveOtWtg]unpL@VF";
$dbname="jobhouse_login";

$conn = mysqli_connect($serverName,$dbusername,$dbpassword,$dbname);

if(!$conn){
    die("connection failed :" .mysqli_connect_error());
}
else{
    echo 'its working';
}
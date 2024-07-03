<?php

if (isset($_POST["submit"])){   
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';



if (emptyInputLogin($username, $pwd) !== false){
    exit();
  }
  
  LogingUser($conn, $username,$pwd);

}




else{
    header('Location:../login.php');
    exit();
  }

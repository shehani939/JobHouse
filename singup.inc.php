<?php

if (isset($_POST["submit"])){   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

     
$emptyInput = emptyInputSingup($name, $email, $username, $pwd ,  $pwdRepeat);
$invalidUid = invalidUid($username);
$invalidEmail = invalidEmail($email);
$pwdMatch = pwdMatch($pwd , $pwdRepeat);
$uidExists = uidExists($conn, $username,$email);


if  ($emptyInput !== false){
    header("Location:../singup.php?error=emptyInput");
    
    exit();
  }
  
  if($invalidUid !== false){
    header("Location:../singup.php?error=envalidUid");
    
    exit();
  }
  
  
  if($invalidEmail !== false){
    header("Location:../singup.php?error=invalidEmail");
    
    exit();
  }
  
  
  
  if($pwdMatch !== false){
    header("Location:../singup.php?error=passwordsdontmatch");
    
    exit();
  }
  
  
  if($uidExists !== false){
    header("Location:../singup.php?error=usernametaken");
    
    exit();
  }
   createUser($conn, $name, $email,$username, $pwd);
  
  }
  else{
    header('Location:../login.php');
    exit();
  }
  
  
  
  
  

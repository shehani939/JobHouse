<?php
function  emptyInputSingup($name, $email, $username, $pwd ,  $pwdRepeat){
    $result;
    if(empty($name) || empty($email) ||  empty($username) || empty($pwdRepeat) ){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
    }



    function  invalidUid($username){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
        }
    
        function  invalidEmail($email){
            $result;
            if(!filter_var($email, FILTER_VALIDATE_EMAIL )){
                $result = true;
            }else{
                $result = false;
            }
            return $result;
            }
            


            function  pwdMatch($pwd , $pwdRepeat){
                $result;
                if($pwd !== $pwdRepeat ){
                    $result = true;
                }else{
                    $result = false;
                }
                return $result;
                }
                


                function uidExists($conn, $username, $email){
                   $sql = "SELECT * FROM users WHERE usersUid = ? or usersEmail = ?;";
                   $stmt = mysqli_stmt_init($conn);
                   if(!mysqli_stmt_prepare($stmt, $sql)){
                      header("Location:../singup.php?error=stmtfailed");
                      exit();
                   } 
                   mysqli_stmt_bind_param($stmt, "ss",$username, $email);
                   mysqli_stmt_execute($stmt);
                   $resultData = mysqli_stmt_get_result($stmt);

                   if($row = mysqli_fetch_assoc($resultData)){
                    return $row;

                   }else{
                    return false;
                   }
                   mysqli_stmt_close($stmt);

                }

                function createUser($conn, $name, $email,$username, $pwd){
                    $sql = "INSERT INTO users(usersName,usersEmail,usersUid,usersPwd) VALUES (?,?,?,?);";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                       header("Location:../singup.php?error=stmtfailed");
                       exit();
                    } 

                    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username,$hashedpwd);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                    header("Location:../login.php?error=none");
                    exit();
                }






                function  emptyInputLogin( $username, $pwd ){
                    $result;
                    if( empty($username) || empty($pwd) ){
                        $result = true;
                    }else{
                        $result = false;
                    }
                    return $result;
                    }
                


                    function  LogingUser($conn,$username,$pwd){
                        $uidExists = uidExists($conn,$username,$username);
                        if ($uidExists === false){
                            header("location:../singup.php?error=wronglogin2");
                            exit();
                        }
                    
                    $pwdhashed = $uidExists["userspwd"];
                    $checkpwd = password_verify($pwd,$pwdhashed);
                    if($checkpwd === false){
                        header('Location:../singup.php?error=wronglogin1');
                        exit();
                    }else if ($checkpwd === true){
                        session_start();
                        $_SESSION["userid"] = $uidExists["$usersId"];
                        $_SESSION["useruid"] = $uidExists["$usersUid"];
                        header("Location:../index.php");
                        exit();
                    }
                    }

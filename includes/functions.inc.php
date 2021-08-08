<?php

function emptyInputSignup($username, $email, $pasword, $passwordRepeat){
    $result;
    if(empty($username) || empty($email) || empty($pasword) || empty($passwordRepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidUid($username){
    $result;
    if(!preg_match("/^[a-z A-Z 0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function pwdMatch($pasword, $passwordRepeat){
    $result;
    if($pasword !== $passwordRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function uidExists($conn, $username, $email){
    //place holders for the sql injection
    $sql = "SELECT * FROM users WHERE uidUsers = ? OR emailUsers =?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createUser($conn, $username, $email, $pasword){
    //place holders for the sql injection
    $sql = "INSERT INTO users (uidUsers,emailUsers,pwdUsers) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pasword , PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result;
    if(empty($username) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function loginUser($conn , $username, $pwd){
    $uidExists = uidExists($conn , $username, $username);
    if($uidExists === false){
        header("location: ../index.php?error=wronglogin");
        exit();
    }
    $pwdHashed = $uidExists["pwdUsers"];
    $checkPwd = password_verify($pwd, $pwdHashed);
    // echo $pwdHashed." ".$pwd;
    if($checkPwd === false){
        header("location: ../index.php?error=wronglogin2");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["idUsers"] =  $uidExists["idUsers"];
        $_SESSION["uidUsers"] =  $uidExists["uidUsers"];
        header("location: ../index.php?log=loginsucceeded");
        exit();
    }
}

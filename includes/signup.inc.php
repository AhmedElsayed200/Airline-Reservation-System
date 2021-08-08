<?php
if (isset($_POST['signup-submit'])) {
    $username = $_POST['fullname'];
    $email = $_POST['mail'];
    $pasword = $_POST['psw'];
    $passwordRepeat = $_POST['psw-repeat'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    // echo $username ." ". $email." ".$pasword." ".$passwordRepeat;
    if(emptyInputSignup($username, $email, $pasword, $passwordRepeat)!==false){
        header("location: ../index.php?error=emptyinput");
        exit();
    }
    if(invalidUid($username)!==false){
        header("location: ../index.php?error=invaliduid");
        exit();
    }
    if(invalidEmail($email)!==false){
        header("location: ../index.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($pasword, $passwordRepeat)!==false){
        header("location: ../index.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn, $username, $email)!==false){
        header("location: ../index.php?error=usernametaken");
        exit();
    }
    createUser($conn, $username, $email, $pasword);
}
else{
    header("location: ../index.php");
    exit();
}
<?php

if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["Uname"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $email, $username, $password, $passwordRepeat) !== false){
        header("location: ../signup.php?error=emptyInput");
        exit();
    }
    if(invalidUsername($username) !== false){
        header("location: ../signup.php?error=invalidUsername");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }
    if(passwordMatch($password, $passwordRepeat) !== false){
        header("location: ../signup.php?error=passwordMismatch");
        exit();
    }
    if(userExists($conn, $username, $email) !== false){
        header("location: ../signup.php?error=usernameTaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $password);

}
else{
    header("location: ../signup.php");
    exit();
}
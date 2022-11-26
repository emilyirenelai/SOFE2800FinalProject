<?php

function emptyInputSignup($name, $email, $username, $password, $passwordRepeat){
    $result = null;
    if(empty($name) || empty($email) || empty($username) || empty($password) || empty($passwordRepeat)){
        $result = true; 
    }
    else{
        $result = false;
    }

    return $result;
}

function invalidUsername($username){
    $result = null;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result = null;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $passwordRepeat){
    $result = null;
    if($password !== $passwordRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function userExists($conn, $username, $email){

    $result = null;
    
    $sql = "SELECT * FROM users WHERE usersUID = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        mysqli_stmt_close($stmt);
        return $row; 
    }
    else{
        $result = false;
        mysqli_stmt_close($stmt);
        return $result;
    }
    
}

function createUser($conn, $name, $email, $username, $password){
    $stmt = $conn->prepare("insert into users(usersName, usersEmail, usersUID, usersPwd) values(?, ?, ?, ?)");
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
	$stmt->bind_param("ssss", $name, $email, $username, $hashedPwd);
	$stmt->execute();
	$stmt->close();
	$conn->close();

    header("location: ../login.php?error=none");
    exit();

}

function emptyInputLogin($username, $password){
    $result = null;
    if(empty($username) ||empty($password)){
        $result = true; 
    }
    else{
        $result = false;
    }

    return $result;
}

function loginUser($conn, $username, $password){
    $uidExists = userExists($conn, $username, $username); //username can be the email or the username, works either way
    if($uidExists === false){
        header("location: ../login.php?error=wrongLogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($password, $pwdHashed);

    if($checkPwd === false){
        header("location: ../login.php?error=incorrectPasssword");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersID"];
        $_SESSION["useruid"] = $uidExists["usersUID"];
        $_SESSION["name"] = $uidExists["usersName"];
        header("location: ../index.php");
        exit();

    }
}
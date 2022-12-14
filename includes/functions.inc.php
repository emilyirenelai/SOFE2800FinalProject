<?php

function emptyInputSignup($name, $email, $username, $password, $passwordRepeat, $cardNo, $cardName, $cardCVC){
    $result = null;
    if(empty($name) || empty($email) || empty($username) || empty($password) || empty($passwordRepeat) || empty($cardNo) || empty($cardName) || empty($cardCVC)){
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

function createUser($conn, $name, $email, $username, $password, $cardNo, $cardName, $cardCVC){
    $stmt = $conn->prepare("insert into users(usersName, usersEmail, usersUID, usersPwd) values(?, ?, ?, ?)");
    $stmt1 = $conn->prepare("insert into credit(creditID, creditNumber, creditName, creditCVC) values(?, ?, ?, ?)");
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
	$stmt->bind_param("ssss", $name, $email, $username, $hashedPwd);
    $stmt1->bind_param("ssss", $username, $cardNo, $cardName, $cardCVC);
    $stmt1->execute();
	$stmt->execute();
    $stmt1->close();
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
        header("location: ../home.php");
        exit();
    }
}

function logOrder($conn, $item, $size, $ES, $CS, $VS, $CaS, $crm, $sug){
    session_start();
    $username = $_SESSION["useruid"];
    $bill = "100";
    $stmt = $conn->prepare("insert into orders(orderUID, orderItem, orderSize, orderCreamer, orderSugar, orderES, orderChoco, orderCara, orderVan, orderBill) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $username, $item, $size, $crm, $sug, $ES, $CS, $CaS, $VS, $bill);
    $stmt->execute();
    $stmt->close();
    header("location: ../menu.php?error=orderPlaced");
}
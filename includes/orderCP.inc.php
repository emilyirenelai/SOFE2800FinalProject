<?php 

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (!isset($_SESSION["useruid"])){
    if(isset($_POST["order"])){
        $item = "Cappucino";
        $size = $_POST["size"];
        $ES = $_POST["ES"];
        $CS = $_POST["CS"];
        $VS = $_POST["VS"];
        $CaS = $_POST["CaS"];
        $crm = $_POST["Crm"];
        $sug = $_POST["Sug"];

        logOrder($conn, $item, $size, $ES, $CS, $VS, $CaS, $crm, $sug);
    }
    else{
        header("location: ../menu.php");
    }
}
else{
    header("location: ../login.php?error=sessionError");
}
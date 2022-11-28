<?php 

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (!isset($_SESSION["useruid"])){
    if(isset($_POST["order"])){
        $item = "Lemonade";
        $size = $_POST["size"];
        $ES = "0";
        $CS = "0";
        $VS = "0";
        $CaS = "0";
        $crm = "0";
        $sug = "0";

        logOrder($conn, $item, $size, $ES, $CS, $VS, $CaS, $crm, $sug);
    }
    else{
        header("location: ../menu.php");
    }
}
else{
    header("location: ../login.php?error=sessionError");
}
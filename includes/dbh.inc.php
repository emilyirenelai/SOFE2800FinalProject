<?php

$serverName = 'localhost';
$dBUserName = 'root';
$dBPassword = '';
$dBName = 'finalproject';

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
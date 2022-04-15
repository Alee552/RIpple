<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "loginpage_final";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("failed to connect!");
}
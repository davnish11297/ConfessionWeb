<?php

session_start();

include 'conn.php';

$uname=$_POST['name'];
$pass=md5($_POST['pass']);




$sql="SELECT * from signup WHERE name='$uname' AND passs='$pass'";

$result=$conn->query($sql);


$_SESSION['name']=$_POST['uname'];


header("LOCATION:home.php");






?>
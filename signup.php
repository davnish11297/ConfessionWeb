<?php

include 'conn.php';
$uname=$_POST['name'];
$pass=md5($_POST['pass']);
$email=$_POST['email'];
$number=$_POST['number'];
$sex=$_POST['sex'];
$age=$_POST['age'];


$sql="insert into signup(name,pass,email,number,sex,age)

values('$uname','$pass','$email','$number','$sex','$age')";

$result=$conn->query($sql);

header("Location:confirm.php");






?>
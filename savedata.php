<?php

include_once 'config.php';

$name = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];
$phone = $_POST['phone'];

$sql = "insert into students(name,address,class,phone) values('{$name}','{$address}','{$class}','{$phone}')";

$query=mysqli_query($conn,$sql);

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);
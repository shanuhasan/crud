<?php

$conn = mysqli_connect("localhost","root","")or die("Connection error");
mysqli_select_db($conn,"crud")or die("Database Error");
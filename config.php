<?php
//error_reporting(0);
$con = mysqli_connect('localhost', 'root', '');
if (!$con){
    die("Database Connection Failed" . mysqli_error($con));
}
$select_db = mysqli_select_db($con,'quick_health');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($con));
}
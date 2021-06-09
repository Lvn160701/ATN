<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mywebsite";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if($conn){
    mysqli_query($conn,"SET NAMES 'utf8'");
}else{
    echo"Bạn đã kết nối thành công!".mysqli_connect_error();
}

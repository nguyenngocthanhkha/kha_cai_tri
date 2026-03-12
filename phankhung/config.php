<?php

$conn = mysqli_connect("localhost","root","","food_system");

if(!$conn){
    die("Kết nối database thất bại: " . mysqli_connect_error());
}

?>
<?php

$conn = mysqli_connect("localhost","root","","monan");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users(username,password)
VALUES('$username','$password')";

mysqli_query($conn,$sql);

echo "Đăng ký thành công";
echo "<br><a href='dangnhap.php'>Đăng nhập</a>";

?>
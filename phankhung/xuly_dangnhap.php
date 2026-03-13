<?php
session_start();

$conn = mysqli_connect("localhost","root","","monan");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users 
        WHERE username='$username' 
        AND password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

$_SESSION['username'] = $username;

header("Location:index.php");

}else{
echo "Sai tài khoản hoặc mật khẩu";
}

?>
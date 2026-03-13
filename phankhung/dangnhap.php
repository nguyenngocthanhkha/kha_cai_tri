<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Đăng nhập</title>
<link rel="stylesheet" href="../phanmau/style.css">
</head>

<body class="login-page">

<div class="login-container">

<h2>👨‍🍳 Đăng nhập</h2>

<form action="xuly_dangnhap.php" method="post">

<div class="form-group">
<label>Tên đăng nhập</label>
<input type="text" name="username">
</div>
<div class="form-group">
<label>Mật khẩu</label>
<input type="password" name="password">
</div>

<button type="submit">Đăng nhập</button>

<p>Chưa có tài khoản? 
<a href="dangky.php">Đăng ký</a>
</p>

</form>

</div>

</body>
</html>
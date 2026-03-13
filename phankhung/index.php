<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <script>
function searchFood(){
let input = document.getElementById("searchInput").value.toLowerCase();
let cards = document.querySelectorAll(".card");

cards.forEach(function(card){
let name = card.querySelector("h3").innerText.toLowerCase();

if(name.includes(input)){
card.style.display="block";
}else{
card.style.display="none";
}
});
}
</script>
<head>
<meta charset="UTF-8">
<title>Món ngon mỗi ngày</title>
<link rel="stylesheet" href="../phanmau/style.css">
</head>

<body>


</div>

<div class="navbar">
<h2>🔥 Món Ngon Mỗi Ngày</h2>

<div class="menu">

<a href="#">Trang chủ</a>
<a href="#">Yêu thích</a>

<?php
if(isset($_SESSION['username'])){
echo "<span class='user-name'>Xin chào ".$_SESSION['username']."</span>";
echo " | <a href='dangxuat.php'>Đăng xuất</a>";
}else{
echo "<a href='dangnhap.php'>Đăng nhập</a>";
echo " | <a href='dangky.php'>Đăng ký</a>";
}
?>

</div>
</div>


<div class="layout">

<div class="sidebar">





<ul>
<li>🏆 Thử thách</li>
<li>🔥 Chuỗi hoạt động</li>
<li>📦 Kho món của bạn</li>
<li>📤 Chia sẻ công thức</li>
</ul>

</div>

<div class="main">

<h1>Hôm nay ăn gì?</h1>
<p>Gợi ý món ăn ngon – dễ nấu – đủ chất</p>

<div class="search">
<input id="searchInput" type="text" placeholder="Nhập tên món ăn...">
<button onclick="searchFood()">Tìm kiếm</button>
</div>

<div class="foods">

<div class="card">
<img src="../images/anhpho.webp">
<h3>Phở bò</h3>
<p>Món truyền thống Việt Nam.</p>
</div>

<div class="card">
<img src="../images/comchien trung.jpg">
<h3>Cơm chiên trứng</h3>
<p>Nhanh gọn cho bữa trưa.</p>
</div>

<div class="card">
<img src="../images/bun-thit-nuong.jpg">
<h3>Bún thịt nướng</h3>
<p>Thanh mát nhiều rau.</p>
</div>
<div class="card">
<img src="../images/thitluoc.jpg">
<h3>Thịt luộc mắm nêm</h3>
<p>Đễ làm , bắt cơm.</p>
</div>
<div class="card">
<img src="../images/gachien.jpg">
<h3>Gà chiên mắm</h3>
<p>Đậm đà, ngon miệng.</p>
</div>
<div class="card">
<img src="../images/12.jpg">
<h3>Cá ngừ chiên</h3>
<p>Đậm đà,trọn vị.</p>
</div>

</div>

</div>

</div>

</body>
</html>
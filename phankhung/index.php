<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "config.php";

$sql = "SELECT * FROM foods";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="../phanmau/style.css">
<title>Món ngon mỗi ngày</title>

<link rel="stylesheet" href="../phanmau/style.css">

<style>
.container{
display:flex;
flex-wrap:wrap;
gap:20px;
}

.card{
width:250px;
background:white;
border-radius:10px;
overflow:hidden;
box-shadow:0 2px 10px rgba(0,0,0,0.2);
}

.card img{
width:100%;
height:150px;
object-fit:cover;
}

.card h3{
padding:10px;
margin:0;
}

.card p{
padding:0 10px 10px;
}
</style>

</head>

<body>

<h1>🍜 Món ngon mỗi ngày</h1>

<div class="container">

<?php
if($result && mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){
?>

<div class="card">

<img src="<?php echo $row['image']; ?>">

<h3><?php echo $row['name']; ?></h3>

<p><?php echo $row['description']; ?></p>

</div>

<?php
}

}else{
echo "Chưa có món ăn trong database";
}
?>

</div>

</body>
</html>
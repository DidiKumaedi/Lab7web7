<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>PHP Dasar</title>
</head>
<body>
 <h1>Belajar PHP Dasar</h1>
 <?php
 echo "Hello World";
 ?>
<h2>Menggunakan Variabel</h2>
    <?php
$nim = "312010002";
$nama = 'Didi Kumaedi ';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
<h2>Predefine Variable</h2>
<?php
echo 'Selamat Datang Didi Kumaedi' . $_GET['nama'];
?>

</body>
</html>
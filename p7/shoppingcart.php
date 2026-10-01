<?php
session_name("sesi1");
session_start();
// http://localhost/pemrograman-web-d/p7/shoppingcart.php?pid=10&jumlah=5
$pid = $_GET["pid"];
$jumlah = $_GET["jumlah"];
$_SESSION["keranjang"][$pid] = $jumlah;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    var_dump($_SESSION["keranjang"]);
    ?>
</body>
</html>
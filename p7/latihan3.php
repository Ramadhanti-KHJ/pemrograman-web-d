<?php
session_name("sesi1");
// session_set_cookie_params(30);
session_start();
$_SESSION["nama_pegawai"] = "dewi";
$pegawai = ["nama" => "dani","alamat" => "jalan babarsari", "kota" => "sleman"];
$_SESSION["data_pegawai"] = $pegawai;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
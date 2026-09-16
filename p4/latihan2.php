<!DOCTYPE html>
<html>
<head>
    <title>Operasi Logika</title>
</head>
<body>

<h1>Operasi Logika AND</h1>

<?php

$kehadiran = 80;
$lunas = true;

if ($kehadiran >= 75 && $lunas == true) {
    echo "Boleh mengikuti ujian";
} else {
    echo "Tidak boleh mengikuti ujian";
}

?>

</body>
</html>
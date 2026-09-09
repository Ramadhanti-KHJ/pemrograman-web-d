<!DOCTYPE html>
<html>
<head>
    <title>Array PHP</title>
</head>
<body>

<h1>Array PHP</h1>

<?php

$mahasiswa = ["Andi", 9.66, "Citra", "Dewi"];

foreach ($mahasiswa as $i => $mhs) {
    echo $i . ": " . $mhs;
    echo "<br>";
}
?>
<hr>
<?php
$pegawai = [
    "nama" => "Budi",
    "umur" => 20,
    "alamat" => "Jl. Merdeka No. 123",
    "kota" => "Jakarta"
];

# print $pegawai["nama"];


?>
<table>
    <?php
    foreach ($pegawai as $key => $value) {
    //echo $key . ": " . $value;
    //echo "<br>";
    ?>
    <tr>
        <td><?= $key ?></td>
        <td>:</td>
        <td><?= $value ?></td>
    </tr>
    <?php
    }
    ?>
</table>

<hr>

<?php
    $karyawan = [
        [
            "nama" => "Andi",
            "jabatan" => "Manager",
            "alamat" => "Jl. Merdeka No. 123",
            "kota" => "Jakarta",
            "id" => 1
        ],
        [
            "nama" => "Budi",
            "jabatan" => "Staff",
            "alamat" => "Jl. Sudirman No. 456",
            "kota" => "Bandung"
        ],
        [
            "nama" => "Citra",
            "jabatan" => "Admin",
            "alamat" => "Jl. Diponegoro No. 789",
            "kota" => "Surabaya"
        ],
        [
            "nama" => "Dewi",
            "jabatan" => "HRD",
            "alamat" => "Jl. Gatot Subroto No. 321",
            "kota" => "Medan"
        ]
    ];
    #var_dump($karyawan);
?>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>id</th>
        </tr>
        <?php
        $no = 1;
        foreach ($karyawan as $k) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $k["nama"] ?></td>
                <td><?= $k["jabatan"] ?></td>
                <td><?= $k["alamat"] ?></td>
                <td><?= $k["kota"] ?></td>
                <td><?= $k["id"] ?></td>
            </tr>
        <?php
        }
?>

    </table>
<hr>

<?php
for($i = 0; $i < 2; $i++) {
    echo $karyawan[$i]["nama"];
    echo "<br>";
}

?>

</body>
</html>
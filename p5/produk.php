<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "nwind");
    $cid = $_GET["cid"];
    $sql = "select * from products where CategoryID = $cid";
    $data = mysqli_query($koneksi, $sql);
    ?>
    <table class = "table table-striped table-dark" >
        <?php
        while ($record = mysqli_fetch_assoc($data)) {

            // echo $record["ProductID"] . " | " . $record["ProductName"] . " | " . $record["UnitPrice"];
        ?>
            <tr>
                <td><?= $record["ProductID"]?> </td>
                <td><?= $record["ProductName"]?> </td>
                <td align="right"><?= number_format($record["UnitPrice"],2) ?> </td>
                <td><?= $record["CategoryID"]?> </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
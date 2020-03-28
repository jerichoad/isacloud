<?php

require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Document</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    
    <table border="1" cellpadding="10" cellspacing = "0">
        <tr>
            <th>No.</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>

        <?php $i=1; ?>
        <?php foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
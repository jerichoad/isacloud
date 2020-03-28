<?php

require_once("function.php");
$mahasiswa = query("SELECT * FROM mahasiswa");
$result = $c

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
            <th>NRP</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>

        <?php 
        $sql = "SELECT * FROM mahasiswa";
        $result = $c->query($sql);
        if ($result->num_rows > 0) {
    
          $drivers = array();
          $i = 0;

            while ($obj = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $obj['nrp'] . '</td>';
                echo '<td>' . $obj['nama'] . '</td>';
                echo '<td>' . $obj['jurusan'] . '</td>';
            }
        } else {
          echo "Empty table.";
          die();
        } 
        ?>
       
    </table>
</body>
</html>
<?php

/* Digunakan untuk melihat animasi loding
sleep(1);
*/

include "functions.php";

$keyword = $_GET["keyword"];

$query = "SELECT * FROM mahasiswa
                WHERE
                nama like '%$keyword%' OR
                nim like '%$keyword%' OR
                email like '%$keyword%' OR
                jurusan like '%$keyword%'              
    ";
    
$mahasiswa = query($query);

?>

<table border="1" cellpadding="10" cellspacing="0">
        
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>E-mail</th>
            <th>Jurusan</th>
        </tr>
        
        <?php $i= 1; 
        foreach($mahasiswa as $row): 
        ?>
        <tr>
            <td><?= $i?></td>
            <td><a href="ubah.php?id=<?= $row["id"]; ?>&nama=<?= $row["nama"]; ?>&nim=<?= $row["nim"]; ?>&email=<?= $row["email"]; ?>&jurusan=<?= $row["jurusan"]; ?>&gambar=<?= $row["gambar"]; ?>">Ubah</a> | 
                <a href="hapus.php?id=<?= $row["id"]; ?>&" >Hapus</a></td>
            <td><img src="img/<?= $row["gambar"] ?>" alt="Foto Profil" width="40"></td>
            <td>
                <?= $row["nama"]; ?>
            </td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            
        </tr>
        <?php $i++; endforeach; ?>
</table>
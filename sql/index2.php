<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* Koneksi */
$conn = mysqli_connect("127.0.0.1", "root", "DagqV8BncABx3V8", "phpku");


if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

/* Wadah Untuk Database */
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

/* Menampilkan Database 
    1. mysqli_fetch_row($result/$result[1])
    2. mysqli_fetch_assoc($result/$result["nim"])
    3. mysqli_fetch_array($result/$result[1]/$result["nim"])
    4. mysqli_fetch_object($result/$result->nim)
*/

/* while($mhs = mysqli_fetch_assoc($result)){
    var_dump($mhs["nama"]);
}
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>
    
    <h1>Database Admin</h1>
    
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
        while($row = mysqli_fetch_assoc($result)): 
        ?>
        <tr>
            <td><?= $i ?></td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
            <td><img src="img/<?php echo $row["gambar"] ?>" alt="Foto Profil" width="50"></td>
            <td>
                <?= $row["nama"]; ?>
            </td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            
        </tr>
        <?php $i++; endwhile; ?>
        
    </table>
</body>
</html>
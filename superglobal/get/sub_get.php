<?php

if(!isset($_GET["nama"]) ||
   !isset($_GET["pemimpin"]) ||
   !isset($_GET["ibukota"]) ||
   !isset($_GET["lagu"]) ||
   !isset($_GET["gambar"])){
       header("Location: get.php");
       exit;
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page title</title>
</head>
<body>
    
    <ul>
        <li><img src="../../array/img/<?= $_GET["gambar"]; ?>" alt="Bendera Negara"></li>
        <li>Nama Negara: <?= $_GET["nama"]; ?></li>
        <li>Pemimpin Pertama: <?= $_GET["pemimpin"]; ?></li>
        <li>Ibukota: <?= $_GET["ibukota"]; ?></li>
        <li>Lagu Kebangsaan: <?= $_GET["lagu"]; ?></li>
    </ul>
</body>
</html>

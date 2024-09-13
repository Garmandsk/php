<?php
    date_default_timezone_set("Asia/Jakarta");
    function salam($nama){
        $date = (new DateTimeImmutable());
        $jam = $date->format("H");
        $waktu = "";
        
        if($jam >= 4 && $jam <= 12){
            $waktu = "Pagi";
        }else if($jam >= 12 && $jam <= 15){
            $waktu = "Siang";
        }else if($jam >= 15 && $jam <= 18){
            $waktu = "Sore";
        }else if($jam >= 18 || $jam <= 4){
            $waktu = "Malam";
        }else{
            echo "Jam Tidak Valid";
        }
        
        echo "Selamat $waktu, $nama";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Fungsi</title>
    </head>
    <body>
        <h1><?php salam("Arman") ?></h1>
        <h1><?php echo "Waktu: " . (new DateTimeImmutable())->format("H:i"); ?></h1>
        <h1><?php echo "Tanggal: " . (new DateTimeImmutable())->format("l, d M Y"); ?></h1>
    </body>
</html>
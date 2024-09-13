<!-- Waktu -->
<?php
    /* date */
    echo date("l, d M Y");
    
    echo "<br>";
    
    /* time */ 
    echo time(); /* Menampilkan UNIX Timestamp / EPOCH Time */
    
    echo "<br>";
    
    echo date("l", time() + 60*60*24*200); /* Mengecek 200 Hari Kedepan, Hari Apa. */
    
    echo "<br>";
    
    echo date("l", time() - 60*60*24*200); /* Mengecek 200 Hari Kebelakang, Hari Apa. */
    
    echo "<br>";
    
    /* mktime (Menghitung Berapa Detik Yang Sudah Berlalu Dari 1 Januari 1970 - Pilihan)
    mktime(0,0,0,0,0,0) 
   (Jam, Menit, Detik, Bulan, Tanggal, Tahun) */
   echo date("l, d M Y", mktime(0,0,0,12,22,2003));
   
   echo "<br>";
   
   /* strtotime */
   echo date("l, d M Y",strtotime("25 aug 2000"));
?>

<?php
    /*
    Standard Output 
    1. echo, print (Output Biasa)
    2. print_r (Output Untuk Array)
    3. var_dump (Menampilkan Tipe Data Dari Output Dan Nilainya)
    */
    
    // Contoh penggunaan output biasa
    echo "Halo Dunia<br>";
    print "Apa kabar hari ini?<br>";

    // Contoh penggunaan var_dump untuk menampilkan tipe data dan nilainya
    var_dump("Semoga semua baik-baik saja");
?>

<hr/>

<!-- Penulisan Sintaks PHP di Dalam HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar PHP</title>
    </head>
    <body>
        <h1>Pemandangan yang <?php echo "indah"; ?></h1>
    </body>
</html>

<!-- Penulisan Sintaks HTML di Dalam PHP -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar PHP</title>
    </head>
    <body>
        <?php
            echo "<h1>Bulan Dan Matahari Adalah Bintang</h1>"
        ?>
    </body>
</html>

<hr/>

<!-- Variabel -->
<?php
    $nama = "Ucok";
?>
<!-- Penulisan PHP Di Dalam HTML -->
<h1>Nama Gua <?php echo $nama; ?> </h1>

<hr/>

<!-- Operator -->
<!-- 1. Aritmatika (+, -, *, /, %) -->
<?php
$nilai = 1 + 1 - (2 + 2) * 10 / 4;
echo "Hasilnya: " . $nilai;
?>

<br/>

<!-- 2. String -->
<?php
    $namaDepan = "Isami";
    $namaBelakang = "Kaede";
    echo $namaDepan . " " . $namaBelakang;
?>

<br/>

<!-- 3. Assignment (=, +=, -=, *=, /=, %=, .=) -->
<?php
    $rumah = 5;
    $rumah += 10;
    $tambahan = " Buah";
    $kalimat = "";
    $kalimat .= "Rumah Saya Ada " . $rumah . $tambahan;
    echo $kalimat;
?>

<br/>

<!-- 4. Perbandingan (<, >, <=, >=, ==, !=) -->
<?php
    var_dump(1 == "1");
?>

<br/>

<!-- 5. Identitas (===, !==) -->
<?php
    var_dump(101 === "101");
?>

<br/>

<!-- 6. Logika (&&, ||, !) -->
<?php
    $x = 100;
    var_dump($x < 1000 || $x % 2 == 1)
?>
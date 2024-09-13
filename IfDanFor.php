<!-- Pengulangan -->
<?php
    for($i = 0; $i < 5; $i++){
        echo "Hallo Dunia! <br/>";
    }

    echo "<br/>";
    
    while($i != 0){
        echo "Apa Kabar ? <br/>";
        $i--;
    }
    
    echo "<br/>";
    
    do{
        echo "Tetap Bersyukur. <br/>";
        $i++;
    }while($i < 5)
?>

<hr/>

<!-- Pengkondisian -->
<?php
    $x = 10;
    if($x > 20){
        echo "Benar";
    }else if($x % 2 == 0){
        echo "$x Adalah Bilangan Genap";
    }else{
        echo "Salah";
    }
    
    echo "<br/>";
    
    /* Ternary */
    $nilai = 123;
    $status = ($nilai % 2 == 0) ? "Genap" : "Ganjil";
    echo "$nilai Adalah Bilangan $status";
    
    echo "<br/>";
    
    /* Switch */
    $bulan = 12;
    switch($bulan){
        case 1:
        echo "Bulan Januari";
        break;
        case 2:
        echo "Bulan Februari";
        break;
        case 3:
        echo "Bulan Maret";
        break;
        case 4:
        echo "Bulan April";
        break;
        case 5:
        echo "Bulan Mei";
        break;
        case 6:
        echo "Bulan Juni";
        break;
        case 7:
        echo "Bulan Juli";
        break;
        case 8:
        echo "Bulan Agustus";
        break;
        case 9:
        echo "Bulan September";
        break;
        case 10:
        echo "Bulan Oktober";
        break;
        case 11:
        echo "Bulan November";
        break;
        case 12:
        echo "Bulan Desember";
        break;
    }
?>

<hr/>

<!-- Implementasi Pengulangan Dan Pengkondisian Di Dalam HTML -->
<!DOCTYPE html>
<html>
    <head>
        <title>Pembuatan Kolom</title>
        <style>
            .warna-genap{
                background-color:azure;
            }
            
            .warna-ganjil{
                background-color:cyan;
            }
        </style>
    </head>
    <body>
        <h1><?= "Contoh Array <br>";?>
        <table border ="1" cellpadding ="10" cellspacing="0">
            <?php for($i = 0; $i < 5; $i++): ?>
                <?php if ($i % 2 == 0): ?>
                    <tr class = "warna-genap">
                <?php else: ?>
                    <tr class = "warna-ganjil">
                <?php endif; ?>
                        <?php for($j = 0; $j < 10; $j++): ?>
                            <td><?= "$i, $j"; ?></td>
                        <?php endfor; ?>         
            <?php endfor; ?>
        </table>
    </body>
</html>

<!-- Jika Isian PHP-nya hanya <?php echo blablabla ?>,
Maka dapat dipersingkat menjadi <?= blablabla ?>. -->
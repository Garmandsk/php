<?php

/* Membuat Array */
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];

/* Menampilkan Array (var_dump(), print_r(), for, foreach) */

var_dump($hari); echo "<br><br>";
print_r($hari); echo "<br><br>";

for($i = 0; $i < count($hari); $i++){
    echo "$hari[$i]". " "; 
} echo "<br><br>";

foreach($hari as $x){
    echo "$x" . " ";
}

/* Implementasi Didalam HTML */
$waifu =[
["Isami Kaede", "9 Juli", "142"],
["Takanashi Hoshino", "2 Januari", "145"]
]
?>

<hr/>

<!DOCTYPE html>
<html>
    <head>
        <title>Array</title>
    </head>
    <style>
        .bag-1{
            height:30%;
        }
        
        .bag-2{
            height:30%;
        }
        
        .warna{
            background-color:salmon;
            border:1px solid;
            padding:5px;
            margin:5 5 5 5;
            float:left;
        }     
    </style>
    <body>
        <div class = "bag-1">
        <?php foreach($hari as $h): ?>
            <div class = "warna"><?php echo $h; ?></div>
        <?php endforeach; ?>
        </div>
        
        <hr/>
        
        <div class = "bag-2">
            <ul>
                <?php foreach($waifu as $wife): ?>
                    <li>N: <?php echo $wife[0]; ?></li>
                    <li>B: <?php echo $wife[1]; ?></li>
                    <li>TB: <?php echo $wife[2]; ?></li>
                    <br/>
                <?php endforeach; ?>
            </ul>
        </div>
    </body>
</html>
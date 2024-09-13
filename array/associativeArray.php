<?php

$nilai = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

$negara = [
    [
        "nama" => "Indonesia",
        "lagu" => "Indonesia Raya",
        "ibukota" => "Jakarta",
        "pemimpin" => "Ir. Soekarno",
        "gambar" => "indonesia.svg.png"
    ],
    [
        "nama" => "Malaysia",
        "lagu" => "Negaraku",
        "ibukota" => "Kuala Lumpur",
        "pemimpin" => "Tuanku Abdul Rahman",
        "gambar" => "malaysia.svg.png"
    ],
    [
        "nama" => "Australia",
        "lagu" => "Advance Australia Fair",
        "ibukota" => "Canberra",
        "pemimpin" => "Sir Edmund Barton",
        "gambar" => "australia.svg.png"
    ],
    [
        "nama" => "Swiss",
        "lagu" => "Schweizerpsalm",
        "ibukota" => "Bern",
        "pemimpin" => "Jonas Furrer",
        "gambar" => "switzerland.svg.png"
    ],
    [
        "nama" => "Thailand",
        "lagu" => "Phleng Chāt Thai",
        "ibukota" => "Bangkok",
        "pemimpin" => "Pho Khun Si Intharathit พ่อขุนศรีอินทราทิตย์",
        "gambar" => "thailand.svg.png"
    ]
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Associative Array</title>
        <style>
            *{
                background-color:azure;
            }
            ul{
                margin-bottom:50px;
            }
            .kotak{
                width:30px;
                height:30px;
                background-color:#BADA55;
                text-align:center;
                padding:10px;
                margin:5px;
                float:left;
                transition:1s;
            }
            .kotak:hover{
                transform:rotate(360deg);
                border-radius:50%;
            }
            .bag-1{
                height:50%;
                width:100%;
            }
            .bag-2{
                height:50%;
                width:100%;
            }
        </style>
    </head>
    <body>
        <div class ="bag-1">
            <?php foreach($nilai as $n): ?>
                <?php foreach($n as $x): ?>
                    <div class ="kotak"><?php echo $x; ?></div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
        
        <br/><br/><br/><br/><br/><br/>
        <hr/>
        
        <div class="bag-2">   
            <?php foreach($negara as $element):?>
            <ul>
                <li><img src = "img/<?php echo $element["gambar"]; ?>"</li>
                <li>Nama Negara:    <?php echo $element["nama"]; ?></li>
                <li>Lagu Kebangsaan:    <?php echo $element["lagu"]; ?></li>
                <li>Ibukota:    <?php echo $element["ibukota"]; ?></li>
                <li>Pemimpin Pertama:    <?php echo $element["pemimpin"]; ?></li>
            </ul>
            <?php endforeach;?>
        </div>
    </body>
</html>
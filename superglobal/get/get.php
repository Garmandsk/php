<?php

$_GET;
var_dump($_GET);

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page title</title>
</head>
<body>
    
    <ul>
        <?php foreach($negara as $e):?>
        <li>
            <a href="sub_get.php?nama=<?= $e["nama"]; ?>&lagu=<?= $e["lagu"]; ?>&ibukota=<?= $e["ibukota"]; ?>&pemimpin=<?= $e["pemimpin"]; ?>&gambar=<?= $e["gambar"]; ?>"><?= $e["nama"] ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>

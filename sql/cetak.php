<?php

require_once __DIR__ . '/vendor/autoload.php';
include "functions.php";

$mahasiswa = query("SELECT * FROM mahasiswa");
$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            background-color: azure;
        }
        
        table{
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td{
            border: 1px solid black;
            padding: 10px;
        }
        
        th{
            background-color: #ddd;
        }
    </style>
</head>
<body>
    
    <h1>Database Admin</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>E-mail</th>
            <th>Jurusan</th>
        </tr>';
        
        $i =1;
        foreach($mahasiswa as $row){
            $html .= '<tr>
                        <td>'. $i++ .'</td>
                        <td><img src="img/'.$row["gambar"].'" width="50"></td>
                        <td>'. $row["nama"] .'</td>
                        <td>'. $row["nim"] .'</td>
                        <td>'. $row["email"] .'</td>
                        <td>'. $row["jurusan"] .'</td>
                    </tr>';
        }
        
$html .= '</table>
        
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output("database", "I");

?>


<?php
include "functions.php";

if(isset($_POST["daftar"])){
    
    $hasil = registrasi($_POST);
    
    if($hasil){
        echo "<script>
                alert(`Pendaftaran Berhasil!`);
                window.location.href = 'login.php';
              </script>";
        exit;
    }else{
        echo mysqli_error($conn);
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
    <style>
        
        *{
            background-color:azure;
        }
        
        label{
            display:block;
        }
    </style>
</head>
<body>
    
    <h1>Halaman Registrasi</h1>
    
    <form action="" method="POST">
    <ul>
        <li>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </li>
        
        <li>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </li>
        
        <li>
            <label for="konfirmasiPassword">Konfirmasi Password:</label>
            <input type="password" name="konfirmasiPassword" id="konfirmasiPassword">
        </li>
        
        <li>
            <button type="submit" name="daftar">Daftar</button>
        </li>

        <hr>
        
        <li>
                <label>Sudah Punya Akun ?</label>
                <a href="login.php"><span >Login</span></a>
            </li>
    </ul>
    </form>
     
</body>
</html>
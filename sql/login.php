<?php 
session_start();
include "functions.php";

$error = false;

if(isset($_COOKIE["id"]) && isset($_COOKIE["key"])){
    $id = $_COOKIE["id"];
    $username = $_COOKIE["username"];
    
    $hasil = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    $bagian = mysqli_fetch_assoc($hasil);
    
    if($key === hash('whirlpool', $bagian["username"])){
        $_SESSION["login"] = true;
    }
}

if(isset($_SESSION["login"]) === true){
    header("Location: index.php");
    exit;
}

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    /* Yang Dikembalikan Adalah Nilai Boolean */
    $cek = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    
    /* Pengecekan Username Jika Hasil 1 Maka Terdapat Username Tersebut Di Database */
    if(mysqli_num_rows($cek) === 1){
        $bagian = mysqli_fetch_assoc($cek);
        if (password_verify($password, $bagian["password"])){
        
            $_SESSION["login"] = true;
            
            if(isset($_POST["remember"])){
                setcookie('id', $bagian["id"], time()+60);
                setcookie('key', hash('whirlpool', $bagian["username"]), time()+60);
            }
            
            header("Location: index.php");
            exit;
        }
    }
    
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Login</title>
    <style>
        *{
            background-color:azure;
        }
        
        label{
            display:block;
        }
        
        h3{
            color:red;
            font-style:italic;
        }
        
        #tombol-login{
            margin-top:10px;
        }
        
        #checkbox{
            display:inline;
        }
    </style>
</head>
<body>
    
    <h1>Halaman Login</h1>
    
    <?php if($error): ?>
    <h3>Username Atau Password Salah</h3>
    <?php endif; ?>
    
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li>
            
            <li>
                <label for="password">Password:</label>
                <input type="text" name="password" id="password">
            </li>
            
            <li>         
                <input type="checkbox" name="remember" id="remember">
                <label for="remember" id="checkbox">Remember Me</label>
            </li>
            
            <li id="tombol-login">
                <button type="submit" name="login">Login</button>
            </li>
            
            <br>
            
            <li>
                <label>Belum Punya Akun ?</label>
                <a href="registrasi.php"><span >Registrasi</span></a>
            </li>
        </ul>
    </form>
    
</body>
</html>
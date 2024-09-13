<?php

$error = false;

//pengecekan username dan password
if(isset($_POST["submit"])){
    if(($_POST["username"] == "Armand") && ($_POST["password"] == "123456")){
        header("Location: sub_post.php");
        exit;
    }else{
    $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post</title>
    <style>
        *{
            background-color:azure;
        }
        
        .pesan-error{
            color:red;
        }
    </style>
</head>
<body>
    
    <?php if($error): ?>
        <h1 class="pesan-error">Username Atau Password Salah</h1>
    <?php endif; ?>
    
    
    <h1>Login</h1>
    
    <form action ="" method ="post">
        <ul>     
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">           
            </li>
            
            <hr/>
            
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li>
            
            <hr/>
            
            <li>
                <button type="submit" name="submit" id="submit">Submit</button>
            </li>
                 
        </ul>
    </form>
</body>
</html>
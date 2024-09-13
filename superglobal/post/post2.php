<?php
$login_failed = false;

// Pengecekan username dan password
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "Armand" && $_POST["password"] == "123456") {
        header("Location: sub_post.php");
        exit;
    } else {
        $login_failed = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post</title>
    <style>
        * {
            background-color: azure;
        }
    </style>
</head>
<body>
    
    <h1>Login</h1>
    
    <!-- Menampilkan pesan kesalahan jika login gagal -->
    <?php if ($login_failed): ?>
        <h1>Username Atau Password Salah</h1>
    <?php endif; ?>
    
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" required>
            </li>
            
            <hr/>
            
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" required>
            </li>
            
            <hr/>
            
            <li>
                <button type="submit" name="submit" id="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>
</html>

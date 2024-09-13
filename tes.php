<?php
session_start(); // Memulai sesi

// Cek apakah ini kunjungan pertama pengguna ke halaman ini dalam sesi ini
if (!isset($_SESSION['reset_done'])) {
    // Reset array negara
    $_SESSION['negara'] = ["Indonesia", "Malaysia", "Singapura"];
    // Tandai bahwa reset telah dilakukan
    $_SESSION['reset_done'] = true;
} else {
    session_destroy();
}

function menu($array) {
    for ($i = 0; $i < count($array); $i++) {
        echo $i + 1 . ". " . $array[$i] . "<br>";
    }
}

// Menampilkan menu negara dari sesi
menu($_SESSION['negara']);
?>

<hr/>

<form method="POST" action="">
    Nama: <input type="text" name="nama" required>
    <input type="submit" value="Submit">
</form>

<hr/>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $_SESSION['negara'][] = $nama; // Menambahkan nama negara baru ke array sesi

    // Menampilkan menu negara yang telah diperbarui
    menu($_SESSION['negara']);
}
?>

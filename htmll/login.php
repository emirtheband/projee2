<?php
session_start();

// Örnek kullanıcı bilgileri (gerçek veritabanı yerine)
$users = [
    "b241210373@sakarya.edu.tr" => "b241210373"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION["girisYapan"] = $username; // Kullanıcıyı oturuma kaydet
        header("Location: welcome.php"); // Giriş başarılıysa welcome.php'ye yönlendir
        exit();
    } else {
        echo "<script>alert('Geçersiz kullanıcı adı veya şifre!'); window.location.href='login.html';</script>";
    }
}
?>


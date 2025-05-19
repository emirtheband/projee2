<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // Kullanıcı adı bir e-posta formatında mı?
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        header("Location: login.html");
        exit();
    }

    // Öğrenci numarasını e-posta adresinden çıkar
    $ogrenciNumarasi = explode("@", $username)[0];

    // Şifre kontrolü
    if ($password === $ogrenciNumarasi) {
        $_SESSION["girisYapan"] = $ogrenciNumarasi;
        header("Location: welcome.php");
        exit();
    } else {
        echo "<script>alert('Şifre yanlış!'); window.location.href='login.html';</script>";
        exit();
    }
}
?>
<?php
session_start();
if (!isset($_SESSION["girisYapan"])) {
    header("Location: login.html");
    exit();
}
$ogrenciNumarasi = htmlspecialchars($_SESSION["girisYapan"]);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Hoşgeldiniz</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #bbdefb ;
      color: white;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .welcome-box {
      background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=600&q=80') no-repeat center center;
      background-size: cover;
      backdrop-filter: blur(10px);
      padding: 50px;
      border-radius: 20px;
      text-align: center;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
      max-width: 400px;
      width: 90%;
      position: relative;
    }

    .welcome-box::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(0, 0, 0, 0.6);
      border-radius: 20px;
      z-index: 1;
    }

    .welcome-box * {
      position: relative;
      z-index: 2;
    }

    .welcome-box h2 {
      font-size: 2rem;
      font-weight: bold;
    }

    .welcome-box p {
      font-size: 1.1rem;
      margin-top: 10px;
    }

    .countdown {
      font-size: 1.2rem;
      color: #ffdd57;
      font-weight: bold;
      margin-top: 20px;
    }

    .icon {
      font-size: 3rem;
      color: #00ffd0;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

<div class="welcome-box">
  <i class="fas fa-hand-peace icon"></i>
  <h2>Hoşgeldiniz, <?php echo $ogrenciNumarasi; ?>!</h2>
  <p>Giriş başarılı.</p>
  <p class="countdown">Yönlendiriliyor: <span id="sayac">6</span> saniye...</p>
</div>

<script>
  let sayac = 6;
  const sayacSpan = document.getElementById('sayac');

  const interval = setInterval(() => {
    sayac--;
    sayacSpan.textContent = sayac;
    if (sayac <= 0) {
      clearInterval(interval);
      window.location.href = "hakkımda.html";
    }
  }, 1000);
</script>

</body>
</html>
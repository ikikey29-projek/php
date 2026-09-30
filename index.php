<?php
$nama = "Iki";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Store</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1>MINI STORE</h1>

    <nav>
        <a href="index.php">Home</a>
        <a href="produk.php">Produk</a>
    </nav>
</header>

<main class="hero">
    <div>
        <p class="label">WELCOME</p>

        <h2>Halo, <?= $nama ?> 👋</h2>

        <p>
            Selamat datang di Mini Store.
            Website sederhana yang dibuat menggunakan PHP Native.
        </p>

        <a class="button" href="produk.php">
            Lihat Produk
        </a>
    </div>
</main>

</body>
</html>
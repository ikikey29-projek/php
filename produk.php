<?php

$produk = [
    [
        "nama" => "Kopi Bali",
        "harga" => 20000
    ],
    [
        "nama" => "Burger Special",
        "harga" => 35000
    ],
    [
        "nama" => "Pizza Cheese",
        "harga" => 45000
    ]
];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Mini Store</title>
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

<main class="container">

    <h2>Daftar Produk</h2>

    <div class="products">

        <?php foreach ($produk as $item): ?>

            <div class="card">

                <div class="icon">☕</div>

                <h3>
                    <?= $item["nama"] ?>
                </h3>

                <p class="price">
                    Rp <?= number_format($item["harga"], 0, ",", ".") ?>
                </p>

                <button>
                    Beli Sekarang
                </button>

            </div>

        <?php endforeach; ?>

    </div>

</main>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="css/produk.css">
</head>

<body>

    <h2>Daftar Produk</h2>

    <?php
    // Data produk (biasanya ini akan diambil dari database)
    $products = array(
        array("nama" => "jaket", "gambar" => "jaket.jfif", "harga" => "Rp.200.000"),
        array("nama" => "sepatu", "gambar" => "sepatu.jpg", "harga" => "Rp 150000"),
        array("nama" => "tas", "gambar" => "tas.jpg", "harga" => "Rp. 150.000"),
        array("nama" => "matras", "gambar" => "matras.jpg", "harga" => "Rp. 80.000"),
        array("nama" => "matras", "gambar" => "senter.jfif", "harga" => "Rp. 20.000"),
        array("nama" => "terda", "gambar" => "tenda.jfif", "harga" => "Rp. 300.000"),
        // dan seterusnya
    );

    // Loop untuk menampilkan kartu produk
    foreach ($products as $product) {
        echo '<div class="product-card">';
        echo '<img src="img/' . $product['gambar'] . '" alt="' . $product['nama'] . '">';
        echo '<h3>' . $product['nama'] . '</h3>';
        echo '<p>Harga: ' . $product['harga'] . '</p>';
        echo '<button>Beli</button>';
        // Tambahkan tombol atau tautan untuk detail produk, jika diperlukan
        echo '</div>';
    }
    ?>

</body>

</html>
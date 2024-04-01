<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk Salon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Menghubungkan dengan Bootstrap CSS -->
    <style>
        /* CSS untuk mengatur kartu produk */
        .card {
            margin-bottom: 20px;
        }
        /* CSS untuk mengatur ukuran gambar */
        .card-img-top {
            height: 200px; /* Atur tinggi gambar */
            object-fit: cover; /* Hindari distorsi gambar */
        }
        /* CSS untuk menambahkan background */
        body {
            background-image: url('img/bg.jpeg'); /* Ganti 'background.jpg' dengan path gambar latar belakang Anda */
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <?php
        // Array data produk salon
        $produk_salon = array(
            array(
                'nama' => 'creambath',
                'harga' => 'Rp.40.000',
                'deskripsi' => 'Perawatan creambath untuk rambut.',
                'gambar' => 'img/creambath.jpg'
            ),
            array(
                'nama' => 'potong rambut',
                'harga' => 'Rp.50.000',
                'deskripsi' => 'Layanan potong rambut dengan gaya modern.',
                'gambar' => 'img/potong rambut.jpg'
            ),
            array(
                'nama' => 'spa masker',
                'harga' => 'Rp.60.000',
                'deskripsi' => 'Perawatan spa dengan masker untuk wajah.',
                'gambar' => 'img/spa masker.jpg'
            ),
            array(
                'nama' => 'nail art',
                'harga' => 'Rp.200.000',
                'deskripsi' => 'Seni menghias kuku dengan berbagai motif dan warna.',
                'gambar' => 'img/nail art.jpg'
            ),
            array(
                'nama' => 'spa',
                'harga' => 'Rp.160.000',
                'deskripsi' => 'Perawatan spa untuk tubuh dan relaksasi.',
                'gambar' => 'img/spa.jpg'
            ),
            array(
                'nama' => 'segi layer',
                'harga' => 'Rp.140.000',
                'deskripsi' => 'Potongan rambut dengan model segi layer.',
                'gambar' => 'img/segi layer.jpg'
            )
        );

        // Menampilkan data produk salon
        foreach ($produk_salon as $produk) {
            echo '<div class="col-md-4">';
            echo '<div class="card" style="width: 18rem;">';
            echo '<img src="' . $produk['gambar'] . '" class="card-img-top" alt="' . $produk['nama'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $produk['nama'] . '</h5>';
            echo '<p class="card-text"><strong>Harga:</strong> ' . $produk['harga'] . '</p>';
            echo '<p class="card-text"><strong>Deskripsi:</strong> ' . $produk['deskripsi'] . '</p>';
            
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<div style="width: 200px; height: 50px; margin: 20px auto;">
    <a href="listingproduct.php" class="btn btn-primary btn-block" style="display: block; width: 100%; height: 100%;">
        masuk list produk
    </a>
</div>

</body>
</html>

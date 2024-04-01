<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk Salon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Menghubungkan dengan Bootstrap CSS -->
    <style>
        /* CSS untuk mengatur judul tabel */
        h2 {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        /* CSS untuk mengatur teks dalam header tabel */
        th {
            text-align: center;
        }

        /* CSS untuk mengatur warna latar belakang tabel */
        .table-background {
            background-color: #f0f0f0; /* Warna abu-abu muda */
        }
        
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Data Produk Salon</h2>
    <div class="table-responsive table-background">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Array data produk salon
                $produk_salon = array(
                    array(
                        'nama' => 'creambath',
                        'harga' => 'Rp.40.000',
                        'deskripsi' => 'Perawatan creambath untuk rambut.'
                    ),
                    array(
                        'nama' => 'potong rambut',
                        'harga' => 'Rp.50.000',
                        'deskripsi' => 'Layanan potong rambut dengan gaya modern.'
                    ),
                    array(
                        'nama' => 'spa masker',
                        'harga' => 'Rp.60.000',
                        'deskripsi' => 'Perawatan spa dengan masker untuk wajah.'
                    ),
                    array(
                        'nama' => 'nail art',
                        'harga' => 'Rp.200.000',
                        'deskripsi' => 'Seni menghias kuku dengan berbagai motif dan warna.'
                    ),
                    array(
                        'nama' => 'spa',
                        'harga' => 'Rp.160.000',
                        'deskripsi' => 'Perawatan spa untuk tubuh dan relaksasi.'
                    ),
                    array(
                        'nama' => 'segi layer',
                        'harga' => 'Rp.140.000',
                        'deskripsi' => 'Potongan rambut dengan model segi layer.'
                    )
                );

                // Menampilkan data produk salon dalam tabel
                foreach ($produk_salon as $produk) {
                    echo "<tr>";
                    echo "<td>{$produk['nama']}</td>";
                    echo "<td>{$produk['harga']}</td>";
                    echo "<td>{$produk['deskripsi']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
     <script src="js/listproduk.js"></script>
</body>
</html>

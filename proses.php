<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buku Namimaw</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Gaya khusus untuk formulir */
        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form h2 {
            color: #3b3838;
            margin-bottom: 10px;
            text-align: center;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            color: #3b3838;
        }

        form input[type="text"],
        form input[type="email"],
        form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%233b3838" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15.293 6.707l-5 5a1 1 0 0 1-1.414 0l-5-5A1 1 0 0 1 5.293 5.293L10 9.586l4.707-4.293a1 1 0 1 1 1.414 1.414z"/></svg>');
            background-repeat: no-repeat;
            background-position-x: 95%;
            background-position-y: 50%;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["nama"]) && isset($_POST["email"]) && isset($_POST["alamat"]) && isset($_POST["buku"])) {
                $nama = $_POST["nama"];
                $email = $_POST["email"];
                $alamat = $_POST["alamat"];
                $buku = $_POST["buku"];

                echo "<div class='success'>";
                echo "<h2>Terima kasih, $nama!</h2>";
                echo "<p>Pesanan Anda untuk buku <strong>$buku</strong> sudah kami terima.</p>";
                echo "<p>Detail pesanan:</p>";
                echo "<ul>";
                echo "<li>Nama: $nama</li>";
                echo "<li>Email: $email</li>";
                echo "<li>Alamat: $alamat</li>";
                echo "<li>Buku yang Dibeli: $buku</li>";
                echo "</ul>";
                echo "<p>Kami akan segera mengirimkan konfirmasi pesanan ke email Anda.</p>";
                echo "</div>";
            } else {
                echo "<div class='error'>";
                echo "<h2>Terjadi kesalahan!</h2>";
                echo "<p>Mohon lengkapi semua data yang diperlukan.</p>";
                echo "</div>";

                // Tampilkan formulir
                echo "<form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";
                echo "<h2>Formulir Pembelian Buku</h2>";
                echo "<label for='nama'>Nama:</label>";
                echo "<input type='text' id='nama' name='nama' required>";
                echo "<label for='email'>Email:</label>";
                echo "<input type='email' id='email' name='email' required>";
                echo "<label for='alamat'>Alamat:</label>";
                echo "<input type='text' id='alamat' name='alamat' required>";
                echo "<label for='buku'>Pilih Buku:</label>";
                echo "<select id='buku' name='buku' required>";
                echo "<option value=''>Pilih Buku</option>";
                echo "<option value='Pulang'>Pulang</option>";
                echo "<option value='Bintang'>Bintang</option>";
                // Tambahkan pilihan buku lainnya di sini
                echo "</select>";
                echo "<input type='submit' value='Beli'>";
                echo "</form>";
            }
        } else {
            // Tampilkan formulir jika permintaan bukan menggunakan metode POST
            echo "<form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";
            echo "<h2>Formulir Pembelian Buku</h2>";
            echo "<label for='nama'>Nama:</label>";
            echo "<input type='text' id='nama' name='nama' required>";
            echo "<label for='email'>Email:</label>";
            echo "<input type='email' id='email' name='email' required>";
            echo "<label for='alamat'>Alamat:</label>";
            echo "<input type='text' id='alamat' name='alamat' required>";
            echo "<label for='buku'>Pilih Buku:</label>";
            echo "<select id='buku' name='buku' required>";
            echo "<option value=''>Pilih Buku</option>";
            echo "<option value='Pulang'>Pulang</option>";
            echo "<option value='Bintang'>Bintang</option>";
            // Tambahkan pilihan buku lainnya di sini
            echo "</select>";
            echo "<input type='submit' value='Beli'>";
            echo "</form>";
        }
        ?>
    </div>
</body>
</html>

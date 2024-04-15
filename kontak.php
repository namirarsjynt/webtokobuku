<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Toko Buku Namimaw</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Gaya khusus untuk halaman kontak */
        .contact-info {
            background-color: #f7f5f2;
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-info h2 {
            color: #3b3838;
            margin-bottom: 10px;
            text-align: center;
        }

        .contact-info p {
            color: #3b3838;
            margin-bottom: 5px;
            line-height: 1.6;
        }

        .product-review {
            background-color: #f7f5f2;
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-review h2 {
            color: #3b3838;
            margin-bottom: 10px;
            text-align: center;
        }

        .product-review .review {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
        }

        .product-review .review:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .product-review .review img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .product-review .review .user-info {
            text-align: center;
            margin-bottom: 10px;
        }

        .product-review .review .user-info p {
            color: #666;
            margin-bottom: 5px;
        }

        .product-review .review .user-info .stars {
            color: #f39c12;
            font-size: 24px;
        }

        footer {
            background-color: #3b3838;
            color: #f7f5f2;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .review-form {
            margin-top: 20px;
            text-align: center;
        }

        .review-form input[type="text"],
        .review-form input[type="file"],
        .review-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .review-form input[type="submit"] {
            background-color: #3b3838;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .review-form input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Kontak</h1>
        <nav>
            <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="tentang_kami.php">Tentang Kami</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section class="contact-info">
        <h2>Hubungi Kami</h2>
        <p>Alamat:Jungang-daero, Yeongje-gu. Busan</p>
        <p>Email: info@namimaw.com</p>
        <p>Telepon: 0832-2343-7895</p>
    </section>

    <section class="product-review">
        <h2>Ulasan Produk</h2>
        <div class="review">
            <img src="https://media.karousell.com/media/photos/products/2017/11/26/preloved_novel_bumi_tere_liye_1511664894_d2811d6c.jpg" alt="Bumi Series">
            <div class="user-info">
                <p><strong>nam bada</strong></p>
                <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            </div>
            <p>Gomawo minnam bukunya sampai dengan selamat🤗🤩</p>
        </div>

        <div class="review">
            <img src="https://1.bp.blogspot.com/-MzukS42Cf_E/XwaSul-9BcI/AAAAAAAAT5I/9s0N1FVs2MUtuV2iMOf1DKr8s1n2vr8qgCLcBGAsYHQ/s1600/Review-buku-filosofi-teras.jpg" alt="Produk 2">
            <div class="user-info">
                <p><strong>hansokor</strong></p>
                <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
            </div>
            <p>ok mks</p>
        </div>

        <!-- Tambahkan ulasan produk lainnya di sini -->

        <div class="review-form">
            <h3>Tambahkan Ulasan Anda</h3>
            <form action="#" method="POST" enctype="multipart/form-data">
                <input type="text" name="nama" placeholder="Nama Anda">
                <input type="text" name="rating" placeholder="Rating (1-5)">
                <textarea name="ulasan" placeholder="Tulis ulasan Anda"></textarea>
                <input type="file" name="foto" accept="image/*">
                <input type="submit" value="Kirim Ulasan">
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Toko Buku Namimaw. All rights reserved.</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buku Namimaw</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Gaya khusus untuk formulir pembelian */
        .popup-form {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .popup-form h3 {
            margin-top: 0;
        }

        .popup-form label {
            display: block;
            margin-bottom: 10px;
        }

        .popup-form input[type="text"],
        .popup-form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .popup-form button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup-form button:hover {
            background-color: #45a049;
        }

        /* Gaya untuk tombol kembali */
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ccc;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .back-button:hover {
            background-color: #999;
        }
    </style>
</head>
<body>
    <header>
        <h1>Toko Buku Namimaw</h1>
        <nav>
            <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="tentang_kami.php">Tentang Kami</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h2>Selamat Datang di Toko Buku Namimaw</h2>
        <p>Temukan berbagai koleksi buku terbaik kami</p>
    </section>

    <section class="books">
        <?php
        // Array buku-buku
        $books = array(
            array("Pulang", "https://s4.bukalapak.com/img/4657473542/w-1000/pulang.jpg", "Rp 100.000"),
            array("Bintang", "https://1.bp.blogspot.com/-DSYRuFFQo_Q/WkciRmb49hI/AAAAAAAAFSI/W5Mzyy33VGkEb0Xntxk9cimBodULoV-cQCLcBGAs/s1600/cover-novel-bintang-karya-tere-liye.jpg", "Rp 120.000"),
            array("Laut Bercerita", "https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.jpg", "Rp 90.000"),
            array("Filosofi Teras", "https://ebooks.gramedia.com/ebook-covers/45496/image_highres/ID_FITE2018MTH12.jpg", "Rp 95.000"),
            array("Hamlet", "https://images.thenile.io/r1000/9781474948111.jpg", "Rp 80.000"),
            array("Mariposa", "https://1.bp.blogspot.com/-G93LdoNEm5s/XYR_bqF76VI/AAAAAAAAABY/7tlrxoxoKWgXEr6sYWvWToJjmW7QDi7rgCLcBGAsYHQ/s1600/NOVEL%2BMARIPOSA.jpg", "Rp 110.000"),
            array("Menanti Restu Langit", "https://penerbitdeepublish.com/wp-content/uploads/2020/11/Menanti-Restu-Langit_Makhasin_Rev-1.0-depan-1076x1536.jpg", "Rp 85.000"),
            array("Segala yang Diisap Langit", "https://www.gramedia.com/blog/content/images/2021/08/9786022918424.jpg", "Rp 100.000"),
            array("Kesetiaan Seorang Sahabat", "https://th.bing.com/th/id/OIP.fOuxalxDc4FPfxo27okDPAHaLP?rs=1&pid=ImgDetMain", "Rp 75.000"),
            array("Cinta dalam Ikhlas", "https://bukukita.com/babacms/displaybuku/109170_f.jpg", "Rp 110.000"),
            array("Bumi Series", "https://1.bp.blogspot.com/-hwQ-Ahp78bs/XxGp4XdS1II/AAAAAAAABCM/7dh0OpyMlq8Gzr34Qi9VB9c1rDpp45s5QCLcBGAsYHQ/s1600/bumii.jpg", "Rp 130.000"),
            array("Tea Book", "https://www.basilurtea.com/cdn/shop/products/70316-VOLUME_IV_-1.png?crop=center&height=384&v=1574318676&width=320", "Rp 90.000"),
            array("A Peculiar Count in Time", "https://th.bing.com/th/id/R.224b1dae6722040e8d377d24b69b4523?rik=Ke4AOKml%2fHm0QA&riu=http%3a%2f%2fwww.fairfieldscribes.com%2fuploads%2f1%2f1%2f7%2f0%2f117080501%2fpublished%2ffront-web.jpg%3f1555983076&ehk=bKzQm24Oq4aotoLeKev9eWQYIf4aOtBDOOxRvP9YCa4%3d&risl=&pid=ImgRaw", "Rp 105.000"),
            array("Pulang Pergi", "https://inc.mizanstore.com/aassets/img/com_cart/produk/pulang-pergi-tere-liye.jpeg", "Rp 95.000"),
            // Tambahkan buku lainnya di sini
            array("Diary of Canva", "https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/njuc5qlk6jneem8grj6ydh.jpg", "Rp 100.000"),
            array("Dunia Sophie", "https://www.gramedia.com/blog/content/images/2022/02/Dunia-Sophie.jpg", "Rp 120.000"),
            array("Mimpi", "https://i0.wp.com/agosbookstore.com/wp-content/uploads/2023/11/5fa5be23-3248-422f-83bf-3e2d44a97d1b.jpg?fit=450%2C643&ssl=1", "Rp 90.000"),
            array("Dikta dan Hukum", "https://cdn.gramedia.com/uploads/items/dikta_dan_hukum.jpg", "Rp 95.000"),
            array("Moonwisher", "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQecBSC8d0sgqhvwDLurbzZlvauvv_9XuDblnYSHvLf53RS1hYLIF4f-HIB5RE3dQ-VNClXxPyK8IgjRYZnqJiAGcTpzPMCq17IVHnvZoU-&usqp=CAE", "Rp 110.000"),
            array("Azzamine", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGSXgNroteyNDM2tSl_zT2-qXKEpagspdoMg&usqp=CAU", "Rp 95.000"),
            array("Moonbound", "https://media.karousell.com/media/photos/products/2023/9/14/novel_gramedia_moon_bound_1694700194_a6d4a2b2_progressive.jpg", "Rp 130.000"),
            array("Kau, Aku dan Sepucuk Angpau Merah", "https://down-id.img.susercontent.com/file/306bd6eaffd32cb5f69da63c96ec020d", "Rp 105.000"),
            array("Tingka", "https://ebooks.gramedia.com/ebook-covers/85200/image_highres/BLK_TNE1688089027451.jpg", "Rp 90.000"),
            array("Last Tang Standing", "https://media.karousell.com/media/photos/products/2023/6/12/novel_gramedia_last_tang_stand_1686545793_f75ffea2_progressive.jpg", "Rp 110.000"),
            array("Tentang Kamu", "https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/18/6825e81d-0875-4982-aea1-5d591afa22b2.jpg", "Rp 85.000"),
            array("Hilmy Milan", "https://cf.shopee.co.id/file/fbe012eab1f1cf318960cafdfa7203f3", "Rp 100.000"),
            array("The Princess and The Pauper", "https://media.karousell.com/media/photos/products/2022/6/1/novel_teenlit_gramedia_the_pri_1654085625_628ef5a0_progressive.jpg", "Rp 80.000"),
            array("Medusae", "https://down-id.img.susercontent.com/file/707e4f3ab52d9ddb791edd39eb89665c", "Rp 85.000"),
            array("Si Anak Pemberani", "https://down-id.img.susercontent.com/file/id-11134207-7r98o-lkon8opdhauj94", "Rp 75.000")
        );

        // Tampilkan buku-buku
        foreach ($books as $book) {
            echo '<div class="book">';
            echo '<img src="' . $book[1] . '" alt="' . $book[0] . '">';
            echo '<h3>' . $book[0] . '</h3>';
            echo '<p>' . $book[2] . '</p>';
            echo '<button onclick="showForm(\'' . $book[0] . '\')">Beli</button>';
            echo '</div>';
        }
        ?>
    </section>

    <div id="beliForm" class="popup-form">
        <span onclick="closeForm()" class="close" title="Close">&times;</span>
        <h3>Form Pembelian</h3>
        <form action="proses.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="buku">Buku yang Dibeli:</label>
            <input type="text" id="buku" name="buku" readonly>

            <button type="submit">Pesan</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Toko Buku Namimaw. All rights reserved.</p>
        <!-- Tombol kembali ke halaman utama -->
        <a href="index.html" class="back-button">Kembali ke Halaman Utama</a>
    </footer>

    <script>
        function showForm(judul) {
            document.getElementById('buku').value = judul;
            document.getElementById('beliForm').style.display = 'block';
        }

        function closeForm() {
            document.getElementById('beliForm').style.display = 'none';
        }
    </script>
</body>
</html>

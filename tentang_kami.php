<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Toko Buku Namimaw</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        header {
            background-color: #634b35;
            color: #fff;
            padding: 20px;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .hero {
            background-color: #f9ead4;
            padding: 50px 20px;
            text-align: center;
        }

        .books {
            margin-top: 20px;
            text-align: center;
        }

        .slideshow-container {
            position: relative;
            max-width: 1000px;
            margin: auto;
            overflow: hidden;
        }

        .slide {
            display: none;
        }

        .slide img {
            width: 100%;
            height: auto;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        footer {
            background-color: #634b35;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        /* Kotak */
        .kotak {
            background-color: #f9ead4;
            padding: 20px;
            margin: 20px auto;
            width: 80%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: justify;
        }

        .kotak h2 {
            color: #634b35;
            margin-bottom: 20px;
        }

        .kotak p {
            color: #333;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .kotak ul {
            list-style-type: square;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tentang Kami - Toko Buku Namimaw</h1>
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
        <div class="slideshow-container">
            <!-- Slides go here -->
            <div class="slide">
                <img src="https://2.bp.blogspot.com/-ow9L0fzoTgM/V-sPV7-qV6I/AAAAAAAAGwM/thKRQ-7D_mwyfB8L1aSoNtwhjJdjcCivgCLcB/s1600/Penulis%2BNovel%2BTerkenal%2BAsal%2BIndonesia%2B1.jpg" alt="Buku Terbaik">
            </div>
        </div>
    </section>

    <div class="kotak">
        <h2>Tentang Toko Buku Namimaw</h2>
        <p>Selamat datang di Toko Buku Namimaw, destinasi utama bagi para pecinta buku novel yang bersemangat untuk menjelajahi dunia literatur. Di Namimaw, kami mengundang Anda untuk membenamkan diri dalam kisah yang menginspirasi, menghibur, dan menggerakkan jiwa Anda.</p>
        <h3>Visi dan Misi Kami:</h3>
        <p>Kami percaya bahwa setiap halaman buku adalah pintu gerbang ke petualangan tak terbatas. Visi kami adalah menjadi pusat peradaban literatur yang menginspirasi, menyediakan akses kepada semua orang untuk merasakan kekuatan kata-kata yang menyentuh hati dan pikiran. Kami berkomitmen untuk:</p>
        <ul>
            <li>Menyediakan Pilihan Luas</li>
            <li>Pelayanan Berkualitas</li>
            <li>Menjadi Komunitas Literatur yang Bersemangat</li>
        </ul>
        <h3>Kenapa Memilih Toko Buku Namimaw:</h3>
        <ul>
            <li>Koleksi Terlengkap</li>
            <li>Kualitas Terjamin</li>
            <li>Kemudahan Berbelanja</li>
        </ul>
        <p>Mari bergabung dengan kami di Toko Buku Namimaw, di mana petualangan literatur tak pernah berakhir. Jadikan setiap halaman buku sebagai kisah baru dalam perjalanan Anda!</p>
    </div>

    <footer>
        <p>&copy; 2024 Toko Buku Namimaw. All rights reserved.</p>
    </footer>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slide");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex-1].style.display = "block";
        }
    </script>
</body>
</html>

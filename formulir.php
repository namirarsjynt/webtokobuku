<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buku Namimaw</title>
    <link rel="stylesheet" href="style.css">
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
        <!-- Formulir -->
        <form action="proses.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required maxlength="50" placeholder="Masukkan nama anda" size="30"><br><br>
            
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" maxlength="100" placeholder="Masukkan alamat anda" size="50"><br><br>

            <label for="pilihan_buku">Pilihan Buku:</label>
            <select id="pilihan_buku" name="pilihan_buku">
                <option value="Pulang">Pulang</option>
                <option value="Bintang">Bintang</option>
                <!-- Tambahkan buku lainnya di sini -->
            </select><br><br>

            <label>Jenis Kelamin:</label><br>
            <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" required>
            <label for="laki_laki">Laki-laki</label><br>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
            <label for="perempuan">Perempuan</label><br><br>

            <input type="checkbox" id="setuju" name="setuju" required>
            <label for="setuju">Saya menyetujui syarat dan ketentuan</label><br><br>

            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Toko Buku Namimaw. All rights reserved.</p>
    </footer>
</body>
</html>

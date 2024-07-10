<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Kelurahan Temuwuh</title>
    <link rel="icon" type="image/x-icon" href="aset/logo.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <div class="header-content">
        <img src="./aset/logo.png" alt="Logo">
        <div class="text-container">
            <h1>Desa Temuwuh</h1>
            <h4>Kecamatan Dlingo Kabupaten Bantul</h4>
        </div>
</div>
        </div>
    </header>
    <nav>
                <ul>
                    <li><a href="beranda.php">Beranda</a></li>
                    <li class="dropdown">
                        <a href="profil.php">Profil</a>
                        <div class="dropdown-content">
                            <a href="visimisi.php">Visi Misi</a>
                            <a href="strukturorganisasi.php">Struktur Organisasi</a>
                            <a href="laporantahunan.php">Laporan Tahunan</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="program.php">Program</a>
                        <div class="dropdown-content">
                            <a href="pendidikan.php">Pendidikan</a>
                            <a href="kesehatan.php">Kesehatan</a>
                            <a href="pariwisata.php">Pariwisata</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="berita.php">Berita</a>
                        <div class="dropdown-content">
                            <a href="artikel.php">Artikel</a>
                            <a href="pengumuman.php">Pengumuman</a>
                            <a href="acara.php">Acara</a>
                        </div>
                    </li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>
            </nav>
            <main>
    <div class="content" id="1">
        <h1 style="color:#dbaf6c; text-align: center;">KONTAK</h1>
        <p>Anda dapat menghubungi kami melalui :</p>
     
        <ul>
            <li><a href="https://www.google.com/maps/place/Temuwuh,+Kec.+Dlingo,+Kabupaten+Bantul,+Daerah+Istimewa+Yogyakarta/data=!4m2!3m1!1s0x2e7a5303e93a369f:0x5027a76e3568bf0?sa=X&ved=1t:242&ictx=111"target="_blank" class="social-link">
                <strong>Alamat:</strong> Jl. Patuk-Dlingo Km 12, Temuwuh, Dlingo, Bantul 55783</a></li>
            <li> <a href="https://www.instagram.com/kalurahan_temuwuh/" target="_blank" class="social-link">
                <strong>Instagram:</strong>
                    <span class="social-icon instagram"></span> Kelurahan_temuwuh
                </a>
            </li>
            <li> <a href="https://www.facebook.com/kalurahan_temuwuh/" target="_blank" class="social-link">
                <strong>Facebook:</strong>
                    <span class="social-icon facebook"></span> Kelurahan Temuwuh
                </a>
            </li>
            <li><a href="mailto:desa.temuwuh@bantulkab.go.id" class="social-link">
                <strong>Email:</strong>
                    <span class="social-icon email"></span> desa.temuwuh@bantulkab.go.id
                </a>
            </li>
        </ul>
    </div>
    </main>
    <div class="content">
            <section id="komentar">
                <h2 style="color:#dbaf6c ;">Komentar Aduan</h2>
                <?php include 'komentar.php'; ?>
            </section>
            <section id="form-komentar">
                <h2 style="color:#dbaf6c ;" >Masukkan Pengaduan</h2>
                <form id="form-komentar" action="proses_komentar.php" method="POST">
                    <div class="form-group">
                        <label for="nama" style="color:#dbaf6c ;">Nama:</label>
                        <input type="text" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="email" style="color:#dbaf6c ;">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="pesan" style="color:#dbaf6c ;">Pesan:</label>
                        <textarea id="pesan" name="pesan" required></textarea>
                    </div>
                    <button type="submit" class="btn">Kirim</button>
                </form>
            </section>
        </div>

        <a href="#1" class="back-to-top">&#8679;</a>
    
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Pemerintah Desa Temuwuh</h3>
                <p>Jl. Patuk-Dlingo Km 12, Temuwuh, Dlingo, Bantul 55783</p>
                <p>Telp: (0274) 2813755</p>
                <p>Fax: (0274) 2813755</p>
                <p>Email: desa.temuwuh@bantulkab.go.id</p>
            </div>
            <div class="footer-column">
                <h3>Link Terkait</h3>
                <ul>
                    <li><a href="https://indonesia.go.id" target="_blank">Indonesia.go.id</a></li>
                    <li><a href="https://www.setneg.go.id" target="_blank">Sekretariat Negara</a></li>
                    <li><a href="https://www.setkab.go.id" target="_blank">Sekretariat Kabinet</a></li>
                    <li><a href="https://sulselprov.go.id" target="_blank">Pemprov Sulsel</a></li>
                    <li><a href="https://dprd.bantulkab.go.id" target="_blank">DPRD Bantul</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Kantor Desa Temuwuh</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.206839741564!2d110.45804321477705!3d-7.97423999425795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ba778ec9d65bb%3A0x7b4200d5dd084d58!2sKantor%20Desa%20Temuwuh!5e0!3m2!1sen!2sid!4v1625596351254!5m2!1sen!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; 2024 Website Kelurahan Temuwuh</p>
        </div>
    </footer>

</body>
</html>

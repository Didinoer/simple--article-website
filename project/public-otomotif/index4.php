<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Local news</title>
</head>

<body>

    <div class="container">
        <nav class="navbar">
            <div class="logo">
                <img src="../img/logo.png" alt="" width="50px">
            </div>
            <div class="menu">
                <li><a href="../home.php">Home</a></li>
                <li><a href="../contact.php">contact</a></li>
                <div class="logo2">
                    <h2>Kelompok 1 News</h2>
                </div>
            </div>
        </nav>

        <div class="main">
            <div class="category">
                <h1>Category lainnya </h1>
                <ul>
                    <br>
                    <h2><a href="../public-travel/index1.php">travel</a></h2>
                    <br>
                    <h2><a href="../public-kesehatan/index1.php">Kesehatan</a></h2>
                    <br>
                    <h2><a href="../public-olahraga/index1.php">Olahraga</a></h2>
                    <br>
                    <h2><a href="../public-obat/index1.php">obat</a></h2>
                </ul>
            </div>
            <div class="content">
                <div class="content-container">
                    <h1 class="judul">
                        Catat! Cuma Pelanggaran Ini yang Bakal Kena Tilang Manual</h1>
                    <h3 class="penerbit">
                        rabu, 07 Des 2022
                    </h3>
                    <img src="../img-otomotif//hero4.jpeg" alt="polisi" class="hero-img" width="600px">
                    <div class="isi-content">
                        <p>
                            Jakarta - Tilang manual kembali diberlakukan. Kendati demikian, tidak semua pelanggaran akan dikenakan tilang manual. Dirlantas Polda Metro Jaya Kombes Latif Usman menegaskan tilang manual akan dikenakan pada pelanggaran-pelanggaran tertentu.
                        </p>
                        <p>Adapun pelanggaran yang dimaksud adalah melepas pelat nomor hingga penggunaan knalpot brong
                        </p>
                        <p>"Untuk tilang manual diberlakukan untuk yang memalsukan nopol dan melepas nopol, serta balap liar dan knalpot brong gitu. Itu saja pelanggaran-pelanggaran itu," ungkap Latif dikutip laman Korlantas Polri.
                        </p>
                        <p>Bagi pengendara yang kedapatan melakukan pelanggaran tersebut, jangan heran ketika diberhentikan polisi untuk kemudian dilakukan penindakan. Polisi akan melakukan penindakan hukum dengan memberikan surat tilang.
                        </p>
                        <p>"Nah ini yang akan kita hentikan, kita periksa. Kalau tidak sesuai kita tahan mobilnya sampai dengan dia bisa menunjukkan surat-suratnya," bebernya.
                        </p>
                        <p>Menyoal penggunaan pelat nomor, merupakan persyaratan wajib kendaraan untuk bisa beroperasi. Tanpa pelat nomor, pengendara dianggap melanggar pasal 68 Undang-undang nomor 22 tahun 2009 tentang Lalu Lintas dan Angkutan Jalan dan
                            ditindak dengan pasal 280. Adanya pelepasan pelat nomor itu bisa jadi mengindikasikan perbuatan pidana.
                        </p>
                        <p>Dalam pasal 280 itu disebutkan bahwa setiap pengendara kendaraan bermotor yang tak dipasangi Tanda Nomor Kendaraan dipidana dengan pidana kurungan paling lama 2 bulan atau denda paling banyak Rp 500.000.
                        </p>
                        <p>"Tidak boleh kalau mereka melepas (memalsukan) pelat nomor, ini merupakan pelanggaran. Dan ini merupakan pelanggaran yang cukup berat sehingga kami akan lakukan tilang untuk melakukan penyitaan terhadap kendaraan tersebut dengan
                            tilang manual," tegas Latif.
                        </p>
                        <p>
                            Persoalan tilang manual ini belakangan memang tengah menjadi perbincangan hangat. Pasalnya, setelah Kapolri Jenderal Listyo Sigit Prabowo mengimbau agar polantas tidak melakukan tilang manual pada Oktober lalu, namun makin ke sini pelanggaran lalu lintas
                            justru merajalela. Masyarakat yang diharapkan bisa mematuhi aturan lalu lintas karena dipantau kamera ETLE malah berlaku sebaliknya.
                        </p>
                        <p>
                            Ditambah lagi ada fenomena pelepasan pelat nomor ataupun melakbannya supaya tidak tertangkap kamera ETLE. Dengan begitu, para pelanggar lalu lintas masih bisa melenggang tanpa dikenakan sanksi. Hal inilah yang kemudian disadari sebagai salah satu tindakan
                            melanggar lalu lintas dan belakangan mulai ditertibkan.
                        </p>
                    </div>
                </div>
                <div class="komentar">
                    <form action="kirim.php" method="post">
                    <table>
                            <tr>nama :</tr>
                            <tr>
                            <td><input type="text" name="nama" id=""></td>
                                <tr><td>Tulis komentar:</td></tr>
                                <td><textarea cols="30" name="komen" rows="5"></textarea></td>
                                <td><input type="hidden" value="komentar1" name="komentar"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="komentar" name="submit"/></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="showcomment">
                <h2>dibawah ini adalah isi komentar:</h2>
                    <?php 
                    include('datakomentar/komentar4.php');
                    ?>
                </div>
            </div>
            <div class="cards">
                <article class="card">
                    <header>
                        <h2> Penasaran, Mengapa Ada Bunyi Tik-tik saat Lampu Sein Mobil Dinyalakan?
                        </h2>
                    </header>
                    <img src="../img-otomotif/hero1.jpeg" alt="sen">
                    <div class="content-card">
                        <p> Jakarta - Detikers ada yang penasaran tidak sih, mengapa lampu sein mobil menimbulkan bunyi tik-tik saat dinyalakan? Padahal, di motor, lampu penanda itu tak menghasilkan suara apapun alias senyap. </p>
                        <h3>
                            <a href="index1.php">baca selengkapnya</a>
                        </h3>
                </article>
                <article class="card">
                    <header>
                        <h2>Motor Listrik Disubsidi Rp 6,5 Juta, Segini Biaya Ngecas Harian Dibanding Isi BBM
                        </h2>
                    </header>
                    <img src="../img-otomotif/hero2.jpeg" alt="molis">
                    <div class="content-card">
                        <p> Angin segar buat yang menanti motor listrik bisa lebih murah, pemerintah sedang menyiapkan insentif tambahan
                        </p>
                        <h3>
                            <a href="index2.php">baca selengkapnya</a>
                        </h3>
                </article>
                <article class="card">
                    <header>
                        <h2>Motor Pelaku Bom di Bandung Atas Nama Orang Lain, Ini Pentingnya Balik Nama Kendaraan
                        </h2>
                    </header>
                    <img src="../img-otomotif/hero3.jpeg" alt="jp">
                    <div class="content-card">
                        <p>Jakarta - Motor Suzuki Shogun berkelir biru turut menjadi sorotan dalam peristiwa ledakan bom di Polsek Astana Anyar, Bandung. Motor itu diduga dikendarai oleh pelaku bom bunuh diri di Bandung.
                        </p>
                    </div>
                    <h3>
                        <a href="index3.php">baca selengkapnya</a>
                    </h3>
                </article>
                </div>
                </div>

</body>

</html>
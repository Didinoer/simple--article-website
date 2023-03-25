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
                        Penasaran, Mengapa Ada Bunyi Tik-tik saat Lampu Sein Mobil Dinyalakan? </h1>
                    <h3 class="penerbit">
                        Selasa, 06 Des 2022 15:07 WIB
                    </h3>
                    <img src="../img-otomotif//hero1.jpeg" alt="abc" class="hero-img" width="600px">
                    <div class="isi-content">
                        <p>Jakarta - Detikers ada yang penasaran tidak sih, mengapa lampu sein mobil menimbulkan bunyi tik-tik saat dinyalakan? Padahal, di motor, lampu penanda itu tak menghasilkan suara apapun alias senyap.</p>
                        <p>Diketahui, saat hendak berbelok atau mengubah arah, pengemudi mobil biasanya menyalakan lampu sein. Hal itu dilakukan untuk memberi tanda kepada pengendara lain dari arah depan atau belakang.</p>
                        <p>Ketika lampu sein dinyalakan dan indikator di panel instrumen sudah mulai berkedip, biasanya ada bunyi tik-tik dengan jeda berdekatan. Suara gemeritik itu umumnya disesuaikan dengan irama kedipan lampu. </p>
                        <p>Saat ini, sejumlah pabrikan telah memodifikasi bunyi tik-tik tersebut menjadi tik-tak, tik-tok, dan lainnya. Namun, pertanyaannya tetap satu, mengapa harus ada suaranya? </p>
                        <h3>Asal usul lampu sen berbunyi tik-tik?</h3>
                        <p> Nah, untuk menjawab pertanyaan tersebut, kita harus mundur jauh ke belakang. Sebab, lampu sein sendiri sudah digunakan sejak 1930 silam. Kala itu, merek roda empat asal Amerika Serikat, Buick yang pertama kali menggunakan komponen
                            tersebut sebagai fitur standar kendaraan.
                        </p>
                        <p>Disitat detikOto dari Mental Floss, Selasa (6/12/2022), dulu bunyi yang muncul saat mengaktifkan lampu sein berasal dari panas. Sebab, ketika pengemudi menyalakan lampu sein, perangkat elektronik pada mobil akan memanaskan per
                            bimetalik yang membuatnya bersentuhan dengan potongan logam kecil.
                        </p>
                        <p>Ketika dua komponen itu bersentuhan, arus listrik akan mengalir dan memberikan tenaga pada listrik untuk menyalakan lampu sein. Kemudian per bimetalik akan kembali ke kondisi seperti semula sampai lampunya mati dan proses akan
                            terus berulang hingga menimbulkan bunyi.
                        </p>
                        <p>Makin ke sini, teknologi makin maju. Perpindahan per tak lagi menggunakan panas, melainkan sinyal elektronik yang dialirkan ke elektromagnet melalui chip.
                        </p>
                        <p>Mobil-mobil kekinian bahkan lebih canggih lagi. Kebanyakan komponennya sudah dioperasikan lewat sistem komputer. Dengan begitu, semua sistem bergantung pada perintah komputer termasuk untuk menyalakan sein.
                        </p>
                        <p>Namun, bunyi tik-tik masih dipertahankan hingga sekarang. Sebab, jika dibiarkan senyap atau tak bersuara, pengemudi yang sudah terbiasa mendengarnya menjadi gelisah. Kini, bunyi tik-tik saat sein dinyalakan bersumber dari sistem
                            audio kendaraan.
                        </p>
                    </div>
                </div>
                <div class="komentar">
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
                    include('datakomentar/komentar1.php');
                    ?>
                </div>
            </div>
            <div class="cards">
                <h3>berita lainya...</h3>
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
                <article class="card">
                    <header>
                        <h2>Catat! Cuma Pelanggaran Ini yang Bakal Kena Tilang Manual
                        </h2>
                    </header>
                    <img src="../img-otomotif/hero4.jpeg" alt="Hot air balloons">
                    <div class="content-card">
                        <p>Jakarta - Tilang manual kembali diberlakukan. Kendati demikian, tidak semua pelanggaran akan dikenakan tilang manual.
                        </p>
                    </div>
                    <h3>
                        <a href="index4.php">baca selengkapnya</a>
                    </h3>
                </article>
                </div>
            </div>

</body>

</html>
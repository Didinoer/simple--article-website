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
                        Motor Listrik Disubsidi Rp 6,5 Juta, Segini Biaya Ngecas Harian Dibanding Isi BBM</h1>
                    <h3 class="penerbit">
                        Selasa, 06 Des 2022 15:07 WIB
                    </h3>
                    <img src="../img-otomotif//hero2.jpeg" alt="abc" class="hero-img" width="600px">
                    <div class="isi-content">
                        <p>Jakarta - Angin segar buat yang menanti motor listrik bisa lebih murah, pemerintah sedang menyiapkan insentif tambahan. Tahun depan motor listrik bakal mendapatkan subsidi Rp 6,5 juta. Selain harga lebih miring, biaya penggunaan
                            sehari-hari juga lebih murah nih.
                        </p>
                        <p>Angka Rp 6,5 juta itu diungkapkan oleh Menteri Koordinator Bidang Kemaritiman dan Investasi, Luhut Pandjaitan. Dia mengatakan subsidi yang diberikan untuk motor listrik adalah sebesar Rp 6,5 juta per pembelian sepeda motor listrik.
                        </p>
                        <p>"Kalau mau tukar motor ke listrik tahun depan, ya. Nanti dapat subsidi," kata Luhut dikutip Reuters.
                        </p>
                        <p>Soal biaya pengeluaran pakai motor listrik secara harian, Kementerian Perhubungan melalui Direktorat Jenderal Perhubungan Darat sudah melakukan hitung-hitungan, di mana satu liter BBM setara 1,2 Kwh listrik.
                        </p>
                        <p> Operasional harian motor listrik bisa lebih murah dari motor internal combustion engine (ICE). Dengan harga listrik per kWh Rp 1.444 atau dibulatkan Rp 1.500, berarti 1,2 kWh listrik harganya sekitar Rp 1.700. Artinya penggunaan
                            kendaran listrik jauh lebih hemat jika dibandingkan dengan satu liter BBM yang saat ini seharga Rp 10.000 - Rp 21.000.
                        </p>
                        <p>Disitat detikOto dari Mental Floss, Selasa (6/12/2022), dulu bunyi yang muncul saat mengaktifkan lampu sein berasal dari panas. Sebab, ketika pengemudi menyalakan lampu sein, perangkat elektronik pada mobil akan memanaskan per
                            bimetalik yang membuatnya bersentuhan dengan potongan logam kecil.
                        </p>
                        <p>Sementara pada mobil listrik, setiap 1 kilowatt hour (kWh) bisa menjalankan mobil listrik sejauh 5-7 kilometer, sementara dengan kapasitas penuh mobil listrik rata-rata sebesar 45 kWh, kendaraan listrik bisa melaju hingga 300 kilometer.
                        </p>
                        <p>"Saat ini sudah banyak kendaraan listrik yang bentuknya keren, energi bersih ramah lingkungan, dan lebih irit dari kendaraan berbahan bakar fosil (BBM). Secara keseharian, bisa lebih irit 75 persen dalam sehari dibandingkan dengan
                            motor BBM. Kalau biasanya mengeluarkan uang Rp. 100 ribu sehari, ini Rp 25 ribu saja sudah cukup," ujar Menteri Perhubungan Budi Karya beberapa waktu yang lalu.
                        </p>
                        <p>Menhub menjelaskan pemerintah telah menyiapkan strategi untuk terus meningkatkan penggunaan kendaraan listrik di Indonesia. Adapun strategi yang disiapkan yaitu: tahap pertama menyasar penggunaan kendaraan listrik di Kementerian/Lembaga
                            dan pemerintah daerah. Kedua, penggunaan kendaraan listrik pada transportasi massal yakni: bus, taksi, dan sepeda motor (ojek online). Kemudian yang ketiga yaitu memperbanyak fasilitas pengisian daya (charging station dan tempat
                            penukaran baterai).
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
                    include('datakomentar/komentar2.php');
                    ?>
                </div>
            </div>
            <div class="cards">
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
                </div>
            </div>

</body>

</html>
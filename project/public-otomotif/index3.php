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
                    <h2><a href="../public-obat/index1.php">Obat</a></h2>
                </ul>
            </div>
            <div class="content">
                <div class="content-container">
                    <h1 class="judul">
                        Motor Pelaku Bom di Bandung Atas Nama Orang Lain, Ini Pentingnya Balik Nama Kendaraan</h1>
                    <h3 class="penerbit">
                        rabu, 07 Des 2022
                    </h3>
                    <img src="../img-otomotif//hero3.jpeg" alt="shogun" class="hero-img" width="600px">
                    <div class="isi-content">
                        <p>Jakarta - Motor Suzuki Shogun berkelir biru turut menjadi sorotan dalam peristiwa ledakan bom di Polsek Astana Anyar, Bandung. Motor itu diduga dikendarai oleh pelaku bom bunuh diri di Bandung.
                        </p>
                        <p>Namun saat ditelusuri, ternyata motor itu bukan terdaftar atas nama pria yang diduga pelaku bom bunuh diri tersebut, Agus Sujatno. Motor justru terdaftar atas nama Bobby Ari Setiawan.
                        </p>
                        <p>Dikutip detikJateng, Bobby menampik terlibat dalam aksi bom bunuh diri itu. Di sisi lain, ia mengaku memang pernah menjual motor Suzuki Shogun berwarna biru.
                        </p>
                        <p>"Ini saya baru tahu, lha itu pelaku bom bunuh dirinya belum diautopsi? Saya langsung merinding. Yang Shogun saya jual saat saya masih SMA. Yang satu lagi jenis Minerva sekitar tahun 2011 saya menjualnya. Posisinya saat saya menjual
                            masih di Solo. Yang beli siapa saya lupa," jelas Bobby.
                        </p>
                        <p>Besar kemungkinan, si pemilik motor baru belum melakukan balik nama setelah membeli motor bekas tersebut. Padahal balik nama diperlukan agar data pemilik kendaraan yang ada di kantor samsat sesuai dengan data pemilik saat ini.
                        </p>
                        <p>Dengan begitu, ketika akan melakukan perpanjangan STNK tahunan maupun perpanjangan STNK lima tahunan akan lebih mudah. Ya, identitas pemilik kendaraan yang terdaftar di Samsat dengan identitas pemilik kendaraan saat ini merupakan
                            salah satu persyaratan untuk proses perpanjangan STNK.
                        </p>
                        <p>Kalau tidak, kamu masih bisa memperpanjang STNK namun harus meminjam identitas asli si pemilik kendaraan lama. Bila pemilik kendaraan mudah dan bisa dihubungi mungkin tidak jadi masalah. Tapi sebaliknya, jika pemilik lama sulit
                            diketahui keberadaannya itu yang membuat proses perpanjangan STNK jadi sulit.
                        </p>
                        <p>Adapun melakukan proses balik nama kendaraan memiliki keuntungan lain seperti dijabarkan laman Bapenda Provinsi Jabar berikut.
                        </p>
                        <p>
                            <ul>
                                <li>Terjaminnya legalitas kepemilikan kendaraan bermotor
                                </li>
                                <li>Mempermudah persyaratan administrasi pembayaran PKB
                                </li>
                                <li>Bisa memanfaatkan banyak kemudahan layanan Samsat
                                </li>
                                <li>Mempermudah klaim asuransi kecelakaan
                                </li>
                                <li>Menghindari dampak penyalahgunaan kendaraan oleh pihak lain
                                </li>
                                <li>Berkontribusi positif untuk pembangunan daerah
                                </li>
                            </ul>
                        </p>
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
                    include('datakomentar/komentar3.php');
                    ?>
                </div>
                </div>
            </div>
            <div class="cards">
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
                </div>
                </div>

</body>

</html>
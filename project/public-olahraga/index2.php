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
                    <h2><a href="../public-otomotif/index1.php">otomotif</a></h2>
                    <br>
                    <h2><a href="../public-travel/index1.php">travel</a></h2>
                    <br>
                    <h2><a href="../public-kesehatan/index1.php">Kesehatan</a></h2>
                    <br>
                    <h2><a href="../public-obat/index1.php">obat</a></h2>
                </ul>
            </div>
            <div class="content">
                <div class="content-container">
                    <h1 class="judul">
                        bangkit diparuh kedua, celtic jinakan raptors
                    </h1>
                    <h3 class="penerbit">
                        6 Desember 2022
                    </h3>
                    <img src="../img-olahraga/hero2.jpg" alt="abc" class="hero-img" width="600px">
                    <div class="isi-content">
                        <p> Boston Celtics semakin kokoh di puncak klasemen sementara Wilayah Timur, Senin (5/12), waktu setempat. Menghadapi Raptors di Toronto, Celtics menang 116-110.
                        </p>
                        <p>
                            Sempat tertinggal 10 poin di awal laga, Celtics bangkit di paruh kedua. Laju (35-18) mereka di kuarter tiga membuat gim berubah haluan dan Celtics unggul sepanjang kuarter akhir hingga memenangkan laga.
                        </p>
                        <p>Duet Jay kembali memimpin tim. Kali ini giliran Jayson Tatum yang jadi top skor dengan dobel-dobel 31 poin dan 12 rebound. Ini adalah dobel-dobel ke-12 Tatum musim ini dari 24 gim yang ia mainkan. Tatum berpeluang melewati capaian
                            dobel-dobel terbanyaknya dalam satu musim yang berjumlah 22 kali pada musim lalu (76 gim). </p>

                        <p>Jaylen Brown menyusul dengan 22 poin, 8 rebound, dan 8 asis. Marcus Smart menambahkan 18 poin dan 7 asis. Ketiga pemain ini tampil setidaknya 38 menit. </p>
                        <p>Blake Griffin mencetak 13 poin plus 8 rebound, sementara Luke Kornet melengkapi daftar dengan 11 poin dan 7 rebound dari bangku cadangan. Raptors sendiri sebenarnya masih berpeluang untuk mengejar Celtics hingga akhir laga. Jarak
                            kedua tim hanya lima poin di satu menit terakhir. Sayangnya, Raptors melewatkan banyak kesempatan untuk mengejar poin mereka melalui tembakan-tembakan yang meleset serta turnover yang seharusnya tak perlu terjadi. <br> <br>Raptors
                            memiliki tiga pemain yang mencetak setidaknya 20 poin hari ini. Pascal Siakam memimpin tim dengan 29 poin, 8 rebound, dan 7 asis. Scottie Barnes 21 poin, 7 rebound, dan 4 asis, sementara Gary Trent Jr. menambahkan 20 poin dari
                            bangku cadangan. OG Anunoby menutup daftar dengan 13 poin plus 5 rebound. <br><br>Celtics kini memiliki rekor menang-kalah (20-5), menjaga jarak dua kemenangan atas Bucks di bawahnya. Sebaliknya untuk Raptors, kekalahan ini
                            juga membuat mereka tersendat di peringkat tujuh klasemen yang sama. Rekor tim asuhan Nick Nurse ini adalah (12-12). Kedua tim akan kembali bermain lusa. Raptors masih akan bertahan di kandang menjamu Los Angeles Lakers sedangkan
                            Celtics melanjutkan tur tandang mereka ke Phoenix Suns. (DRMK)</p>
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
                        <h2>Karena Jepang Belum Waktunya Jadi Pahlawan Super</h2>
                    </header>
                    <img src="../img-olahraga/hero3.jpeg" alt="jp">
                    <div class="content-card">
                        <p>Jepang angkat koper dari Piala Dunia 2022. Kejutan Samurai Biru terhenti, kata pelatihnya, memang belum waktunya Jepang jadi superhero. Baca artikel sepakbola, "Karena Jepang Belum Waktunya Jadi Pahlawan Super</p>
                    </div>
                    <h3>
                        <a href="index3.php">baca selengkapnya</a>
                    </h3>
                </article>
                <article class="card">
                    <header>
                        <h2>Portugal Tahu Betul Swiss Bukan Tim Kacangan</h2>
                    </header>
                    <img src="../img-olahraga/hero4.jpeg" alt="Hot air balloons">
                    <div class="content-card">
                        <p>Dilansir dari Sports Mole, Portugal vs Swiss sudah berjumpa 24 kali sejak tahun 1938. Kedua tim sudah saling berlaga di pertandingan uji coba, Piala Dunia, Piala Eropa, sampai UEFA Nations League.</p>
                    </div>
                    <h3>
                        <a href="index4.php">baca selengkapnya</a>
                    </h3>
                </article>
                <article class="card">
                    <header>
                        <h2>Jerman Gagal Lagi di Piala Dunia, Antonio Rudiger Beberkan Penyebabnya
                        </h2>
                    </header>
                    <img src="../img-olahraga/hero.jpg" alt="jt">
                    <div class="content-card">
                        <p>Bola.net - Bek timnas Jerman, Antonio Rudiger buka suara terkait kegagalan timnya di Piala Dunia 2022. Ia menyebut bahwa timnya tidak berani 'bermain kotor' sehingga mereka tumbang di turnamen ini. Jerman datang ke Piala Dunia
                            2022 dengan status sebagai unggulan juara.</p>
                    </div>
                    <h3>
                        <a href="index1.php">baca selengkapnya</a>
                    </h3>
                </article>
            </div>
        </div>

</body>

</html>
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
                        Portugal Tahu Betul Swiss Bukan Tim Kacangan
                    </h1>
                    <h3 class="penerbit">
                        Selasa, 06 Des 2022
                    </h3>
                    <img src="../img-olahraga/hero4.jpeg" alt="abc" class="hero-img" width="600px">
                    <div class="isi-content">
                        <p> Lusail - Portugal vs Swiss akan berlangsung di lanjutan babak 16 besar Piala Dunia 2022. Pelatih Portugal, Fernando Santos beri respek tinggi ke lawannya itu. <br><br> Portugal vs Swiss akan berlaga di Lusail Stadium, Rabu (7/12)
                            pukul 02.00 dinihari WIB dalam babak 16 besar Piala Dunia 2022. Pemenangnya akan hadapi pemenang dari laga Maroko vs Spanyol.
                        </p>
                        <p>Portugal maju ke babak 16 besar Piala Dunia 2022 sebagai juara Grup H. Sementara Swiss, adalah runner up Grup G.
                            <br><br> Di atas kertas, Portugal lebih dijagokan. Namun jangan salah, head to head kedua tim ketat!
                            <br><br> Hasilnya, Swiss menang 11 kali dan Portugal menang sembilan kali. Sisanya, lima laga berakhir seri.
                            <br><br> Kedua tim masing-masing sudah cetak 34 gol dari total seluruh pertemuan. Maka oleh sebab itu, pelatih Portugal, Fernando Santos sebut Swiss sebagai tim yang kuat!. "Kapanpun kami bermain menghadapi mereka, mereka sungguh
                            menyulitkan dan laga akan berjalan ketat," jelasnya.
                            <br><br> "Skuad mereka sudah main bersama sejak lama. Mereka begitu terorganisir, penuh ketenangan, tahu harus melakukan apa, dan fokus sampai akhir. Itu Swiss yang saya tahu," sambungnya.
                            <br><br> "Laga nanti akan sangat kompetitif," tutupnya.
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
                <article class="card">
                    <header>
                        <h2>bangkit diparuh kedua, celtic jinakan raptors</h2>
                    </header>
                    <img src="../img-olahraga/hero2.jpg" alt="jt">
                    <div class="content-card">
                        <p> Boston Celtics semakin kokoh di puncak klasemen sementara Wilayah Timur, Senin (5/12), waktu setempat. Menghadapi Raptors di Toronto, Celtics menang 116-110. </p>
                    </div>
                    <h3>
                        <a href="index2.php">baca selengkapnya</a>
                    </h3>
                </article>
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
            </div>
        </div>

</body>

</html>
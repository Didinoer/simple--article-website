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
                        Karena Jepang Belum Waktunya Jadi Pahlawan Super
                    </h1>
                    <h3 class="penerbit">
                        Selasa, 06 Des 2022
                    </h3>
                    <img src="../img-olahraga/hero3.jpeg" alt="abc" class="hero-img" width="600px">
                    <div class="isi-content">
                        <p> Al Wakrah - Jepang angkat koper dari Piala Dunia 2022. Kejutan Samurai Biru terhenti, kata pelatihnya, memang belum waktunya Jepang jadi superhero. <br> <br> Jepang vs Kroasia berlangsung di Al Janoub Stadium, Senin (5/12) malam
                            WIB pada babak 16 besar Piala Dunia 2022. Jepang mampu bikin gol duluan lewat Daizen Maeda di menit ke-43. Ivan Perisic samakan kedudukan kala babak kedua baru berjalan 10 menit. Dirinya menanduk bola dan meluncur mulus ke
                            dalam gawangnya Jepang.
                        </p>
                        <p>Laga tuntas 1-1 di waktu normal, pun tidak ada skor tercipta di babak tambahan. Kemudian di babak adu penalti, Kroasia tunjukkan mentalnya. Kroasia menang 3-1. Sang kiper, Dominik Livakovic jadi pahlawan dengan tepis tiga sepakan
                            eksekutor Jepang.
                        </p>
                        <p>Jepang mengakhiri petualangannya di Piala Dunia 2022 dengan banyak cerita. Setidaknya Samurai Biru bisa pulang dengan kepala tegak, karena mampu tumbangkan dua tim juara Piala Dunia yakni Jerman dan Spanyol di babak grup. <br><br>                            Pelatih Jepang, Hajime Moriyasu puas dengan penampilan para pemainnya. Pun ketika di babak penalti, Hajime mempercayakan para pemainnya untuk menentukan pilihan. "Saya meminta para pemain untuk memutuskan sendiri adu penalti,
                            dan tentu saja mungkin beberapa dari mereka bisa mencetak gol dan beberapa tidak. Mereka menghadapi tekanan besar dan saya mau memuji usaha mereka," jelasnya dilansir dari ESPN.

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
                    include('datakomentar/komentar3.php');
                    ?>
                </div>
            </div>
            <div class="cards">
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
            </div>
        </div>

</body>

</html>
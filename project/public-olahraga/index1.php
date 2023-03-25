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
                        Jerman Gagal Lagi di Piala Dunia, Antonio Rudiger Beberkan Penyebabnya
                    </h1>
                    <h3 class="penerbit">
                        Serafin Unus Pasi | 2 Desember 2022 19:33
                    </h3>
                    <img src="../img-olahraga/hero.jpg" alt="abc" class="hero-img" width="600px">
                    <div class="isi-content">
                        <p>Bola.net - Bek timnas Jerman, Antonio Rudiger buka suara terkait kegagalan timnya di Piala Dunia 2022. Ia menyebut bahwa timnya tidak berani 'bermain kotor' sehingga mereka tumbang di turnamen ini. Jerman datang ke Piala Dunia
                            2022 dengan status sebagai unggulan juara.</p>
                        <p>Diperkuat oleh bintang-bintang top dunia plus pelatih kaya pengalaman membuat Jerman cukup diperhitungkan. Namun sayang kenyataan tidak berbanding lurus dengan harapan. Jerman lagi-lagi tersisih di fase grup setelah hanya mampu
                            finsih di peringkat 3 grup E Piala Dunia 2022. Rudiger kecewa berat melihatnya timnya gagal di turnamen ini. "Kami kembali ke titik nol dan ini realita yang berat bagi kami," ujar sang bek ke Sport1.
                        </p>
                        <h3>Materi Tim Bagus.</h3>
                        <p>Rudiger sendiri menolak anggapan bahwa materi tim Jerman di Piala Dunia 2022 ini tidak oke. Ia menilai bahwa skuat Jerman saat ini sangat bagus. Ia menilai banyak pemain-pemain top yang saat ini memperkuat Der Panzer, sehingga
                            ia percaya bahwa Jerman seharusnya bisa melaju jauh di Piala Dunia 2022. "Kami memiliki banyak talenta yang bagus di dalam tim ini. Kami memiliki tim yang sangat bagus untuk bersaing di turnamen ini," sambung Rudiger.
                        </p>
                        <h3>Kurang Gairah.</h3>
                        <p>Menurut Rudiger ada satu penyebab mengapa skuat bertabur bintang Jerman gagal total di Piala Dunia 2022 ini. Ia menyebut bahwa timnya tidak memiliki rasa lapar dan juga gairah yang besar di turnamen itu, sehingga mereka tumbang
                            di turnamen ini. "Ada hal lain yang menyebabkan kami gagal di turnamen kali ini. Kami tidak memiliki rasa lapar dan kami juga tidak bermain cukup kotor untuk bisa menjadi juara," keluh sang bek.
                        </p>
                        <h3>Menang.</h3>
                        <p> Di pertandingan terakhir, timnas Jerman berhasil menangatas Kosta Rika dengan skor 4-2. Namun sayang mereka kalah selisih gol dari Spanyol yang tumbang melawan Jepang, sehingga mereka gagal lolos ke babak berikutnya.
                        </p>
                        <br><br>
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
                    include('datakomentar/komentar1.php');
                    ?>
                </div>
            </div>
            <div class="cards">
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
            </div>
        </div>

</body>

</html>
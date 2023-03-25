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
                    <h2><a href="../public-kesehatan/index1.php">Kesehatan</a></h2>
                    <br>
                    <h2><a href="../public-olahraga/index1.php">Olahraga</a></h2>
                    <br>
                    <h2><a href="../public-otomotif/index1.php">Otomotif</a></h2>
                </ul>
            </div>
            <div class="content">
                <div class="content-container">
                    <h1 class="judul">
                    Wisata Mancak Serang Banten D'Mangku Farm Harga Tiket Murah Ada Fasilitas Glamping dan Outbound, Cek Sekarang!                    
                    </h1>
                    <h3 class="penerbit">
                    Isma | 5 Desember 2022 15:07                    
                    </h3>
                    <img src="../img-travel/4.jpg" alt="abc" class="hero-img" width="600px">
                    <div class="isi-content">
                    <p>Penasaran dengan wisata Mancak Serang Banten D'Mangku Farm yang baru saja buka pada tanggal 27 November 2022 lalu?</p> 
                    <p>Berikut informasi lengkap tentang wisata D'Mangku Farm mulai dari fasilitas hingga harga tiket masuknya.</p> 
                    <p>Dilansir dari Youtube Kang Ucim disebutkan bahwa wisata baru di Mancak Serang Banten itu dilengkapi dengan fasilitas tempat parkir yang luas, kemudian ada arena glamping , kafe dan restoran hingga wahana outbound.</p> 
                    <p>Salah satu jenis wisata yang lagi trend dan viral saat ini adalah wisata glamping, yang mana pengunjung bisa menikmati fasilitas penginapan di arena terbuka yang dekat dengan alam.</p>
                    <p>D'Mangku Farm bisa jadi salah satu rekomendasi wisata glamping yang menyenangkan untuk keluarga atau bersama pasangan tercinta.</p> 
                    <p>Tak hanya disuguhkan dengan pemandangan alam saja, namun wisata ini sangat cocok untuk liburan satu keluarga.</p> 
                    <p>Banyak fasilitas outbond yang bisa dinikmati mulai dari jembatan gantung, becak gantung. flaying fox, sepeda gantung dan masih banyak lagi.</p> 
                    <p>Harga Tiket Wisata D'Mangku Farm Mancak Serang Banten</p>
                    <p>Jangan khawatir kemahalan, karena biaya tiket masuk per orang dalam wisata baru ini sangat terjangkau, hanya 25.000 per orang. Tarif ini juga berlaku untuk anak - anak usia di atas lima tahun.</p>
                    <p>Bagi pengunjung yang ingin menikmati fasilitas glamping, hanya membayar RP.800.000 per hari saja, cukup murah bukan.</p> 
                    <p>Yuk, nikmati liburanmu dengan wisata glamping dan outbond i  D'Mangku Farm, Mancak, Serang Banten.</p> 
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
                         <h2>Tren Traveling Membaik, Pemesanan Transportasi dan Akomodasi Meningkat 10 Kali Lipat
                        </h2>
                    </header>
                    <img src="../img-travel/1.jpg" alt="Hot air balloons">
                    <div class="content-card">
                        <p>Meski kasus Covid-19 masih ditemukan di sejumlah daerah dan negara, pelonggaran perjalanan telah diberlakukan di mana-mana. Hal ini pun membuat semakin banyak orang memutuskan untuk pergi traveling, baik di dalam negeri maupun ke luar negeri.</p>
                    </div>
                    <h3>
                        <a href="index1.php">baca selengkapnya</a>
                    </h3>
                </article>
                <article class="card">
                    <header>
                        <h2>Bukan Glamping, Sekarang Ada Gramping, Tren Liburan Bareng Kakek-Nenek</h2>
                    </header>
                    <img src="../img-travel/2.jpg" alt="Hot air balloons">
                    <div class="content-card">
                        <p>Berbagai macam tren traveling terus berkembang dari waktu ke waktu. Mulai dari solo traveling, bleisure, unimoon, hingga glamping, ada berbagai macam cara traveling yang tengah digandrungi milenial.</p>
                    </div>
                    <h3>
                        <a href="index2.php">baca selengkapnya</a>
                    </h3>
                </article>
                <article class="card">
                    <header>
                        <h2>Paham Traveling Telah jadi Kebutuhan Masyarakat, Aplikasi Tiket.com Luncurkan Fitur Jaminan Harga Termurah</h2>
                    </header>
                    <img src="../img-travel/3.jpg" alt="Hot air balloons">
                    <div class="content-card">
                        <p> Aplikasi Online Travel Agent - Tiket.com, baru saja meluncurkan fitur cerdas terbaru bernama Jaminan Harga Termurah (JHT). Fitur tersebut dapat memberikan opsi dan pilihan harga sesuai kebutuhan perjalanan termurah di antara online travel platform lain.</p>
                    </div>
                    <h3>
                        <a href="index3.php">baca selengkapnya</a>
                    </h3>
                </article>
            </div>
        </div>

</body>

</html>
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
                    Tren Traveling Membaik, Pemesanan Transportasi dan Akomodasi Meningkat 10 Kali Lipat                    
                    </h1>
                    <h3 class="penerbit">
                    Vania Rossa | 20 Juni 2022 12:07                    
                    </h3>
                    <img src="../img-travel/1.jpg" alt="abc" class="hero-img" width="600px">
                    <div class="isi-content">
                        <p>Meski kasus Covid-19 masih ditemukan di sejumlah daerah dan negara, pelonggaran perjalanan telah diberlakukan di mana-mana. Hal ini pun membuat semakin banyak orang memutuskan untuk pergi traveling, baik di dalam negeri maupun ke luar negeri.</p>
                        <p>Pegipegi mengungkap bahwa tren traveling saat ini semakin membaik, di mana transaksi pemesanan transportasi dan akomodasi meningkat lebih dari 10 kali lipat dibandingkan tahun 2021.</p>
                        <p>Mengutip siaran pers yang diterima Suara.com, disebutkan pula bahwa jumlah pengguna Pegipegi tumbuh dua kali lipat lebih jika dibandingkan tahun 2021 dan diperkirakan akan terus tumbuh hingga akhir tahun.</p>
                        <p>VP Commercial & Marketing Pegipegi, Ryan Kartawidjaja mengatakan, jika dibandingkan dengan liburan Lebaran tahun 2021, transaksi pemesanan transportasi dan akomodasi meningkat, lebih dari 10 kali lipat. Selain itu, hingga saat ini, jumlah pengguna Pegipegi tumbuh dua kali lipat lebih jika dibandingkan tahun 2021.</p>
                        <p>“Kita memperkirakan hingga akhir tahun pertumbuhan ini akan meningkat lebih jauh lagi,” ujarnya.</p>
                        <p>Selain itu, Ryan menjelaskan, meskipun pada bulan Februari 2022 tren pemesanan akomodasi sempat turun dikarenakan kasus COVID 19 naik, namun per bulan Mei 2022, jumlah transaksi dan pengunjung sudah kembali meningkat.
                        </p>
                        <p>Pertumbuhan tren-tren tersebut beriringan dengan kebutuhan masyarakat untuk memenuhi kebutuhan mereka dalam meriset perjalanan.</p>
                        <p>Nah, buat kamu yang sudah punya agenda untuk menghabiskan liburan tengah tahun ini, yuk, buruan pesan akomodasi dan tiket transportasimu. Ada diskon spesial yang fantastis, hingga 70 persen, untuk berbagai pemesanan hotel, tiket pesawat, kereta api, serta bus dan kendaraan travel, baik untuk perjalanan domestik maupun internasional.</p>
                        <p>Pegipegi meluncurkan promo Pegivaganza yang berlangsung pada tanggal 16 hingga 26 Juni 2022. Promo ini menghadirkan diskon spesial hingga 70 persen untuk berbagai pemesanan hotel, tiket pesawat, kereta api, serta bus dan kendaraan travel, baik untuk perjalanan domestik maupun internasional.</p>
                        <p>Pegipegi juga bekerja sama dengan mitra perbankan dan layanan finansial untuk mempermudah transaksi masyarakat dalam berwisata hemat, yaitu Bank Mandiri, Bank Rakyat Indonesia (BRI), Bank Negara Indonesia (BNI), TMRW, DBS, Bank Syariah Indonesia (BSI), Bank Mega, dan GoPay.
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
                <br><br>
                <h2>dibawah ini adalah isi komentar:</h2>
                    <?php 
                    include('datakomentar/komentar1.php');
                    ?>
                </div>
                

            </div>
            <div class="cards">
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
                <article class="card">
                    <header>
                        <h2>Wisata Mancak Serang Banten D'Mangku Farm Harga Tiket Murah Ada Fasilitas Glamping dan Outbound, Cek Sekarang!</h2>
                    </header>
                    <img src="../img-travel/4.jpg" alt="Hot air balloons">
                    <div class="content-card">
                        <p>Dilansir dari Youtube Kang Ucim disebutkan bahwa wisata baru di Mancak Serang Banten itu dilengkapi dengan fasilitas tempat parkir yang luas, kemudian ada arena glamping , kafe dan restoran hingga wahana outbound. </p>
                    </div>
                    <h3>
                        <a href="index4.php">baca selengkapnya</a>
                    </h3>
                </article>
            </div>
        </div>

</body>

</html>
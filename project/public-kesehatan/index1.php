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
                    <h2><a href="../public-olahraga/index1.php">Olahraga</a></h2>
                    <br>
                    <h2><a href="../public-otomotif/index1.php">otomotif</a></h2>
                    <br>
                    <h2><a href="../public-travel/index1.php">travel</a></h2>
                    <br>
                    <h2><a href="../public-kesehatan/index1.php">Kesehatan</a></h2>
                    <br>
                    <h2><a href="../public-obat/index1.php">Obat</a></h2>
                </ul>
            </div>
            <div class="content">
                <div class="content-container">
                    <h1 class="judul">
                    Update Terbaru, Daftar 6 Sirup Obat yang Dilarang BPOM dari PT REMS                    
                    </h1>
                    <h3 class="penerbit">
                    Shintaloka Pradita Sicca | 7 Desember 2022 15:07                    
                    </h3>
                    <img src="../img-kesehatan/berita 1.jpg" alt="abc" class="hero-img" width="600px">
                    <div class="isi-content">
                        <p>KOMPAS.com - BPOM merilis daftar 6 obat dari PT Rama Emerald Multi Sukses (REMS) yang dicabut izin edarnya, Rabu (7/12/2022). Sebanyak 6 sirup obat yang dilarang BPOM ini mengandung cemaran etilen glikol (EG) atau  dietilen glikol (DEG) yang melebihi ambang batas aman asupan harian (tolerable daily intake/TDI) 0,5 mg/kg berat badan/hari. Menurut hasil uji bahan baku, bahan propilen glikol yang digunakan dalam sirup obat industri farmasi tersebut mengandung kadar EG 33,46 persen dan DEG 5,94 persen.</p>
                        <p>Angka itu melebihi ambang batas persyaratan cemaran ED/DEG (tidak lebih dari 0,1 persen) serta kadar EG dan/atau DEG dalam sirup obat 1,28-443,66 mg/ml yang melebihi ambang batas aman. Berdasarkan pemeriksaan lebih lanjut ke sarana produksi PT REMS yang berlokasi di Gresik, Jawa Timur, ditemukan ketidaksesuaian dalam penerapan Cara Pembuatan Obat yang Baik (CPOB) yang digunakan industri farmasi. Akibatnya, BPOM menetapkan sanksi administratif dengan mencabut sertifikat CPOB cairan oral non-betalaktam, diikuti dengan pencabutan seluruh izin edar produk obat sirup (6 produk) yang produksi PT REMS.
                        </p>
                        <p>Selain sanksi administratif tersebut, BPOM juga memerintahkan kepada PT REMS untuk:
                        <br>
                        1. Menghentikan kegiatan produksi dan distribusi seluruh sirup obat<br>
                        2. Menarik dan memastikan semua sirup obat telah dilakukan penarikan dari peredaran, yang meliputi pedagang besar farmasi, apotek, toko obat, dan fasilitas pelayanan kefarmasian lainnya<br>
                        3. Memusnahkan semua persediaan (stok) sirup obat dengan disaksikan oleh petugas<br>
                        4. Unit Pelaksana Teknis (UPT) BPOM dengan membuat Berita Acara Pemusnahan <br>
                        5. Melaporkan pelaksanaan perintah penghentian produksi, penarikan, dan pemusnahan sirup obat kepada BPOM.</p>
                        <h3>Update daftar sirup yang dilarang BPOM.</h3>
                        <p>Adapun berikut daftar 6 sirup obat yang dilarang BPOM dari PT REMS:<br>
                            1. Ambroxol HCl (sirup kemasan botol isi 60 ml)<br>
                            2. Antasida DOEN (suspensi kemasan botol isi 60 ml)<br>
                            3. Broxolic (sirup kemasan dus dengan 1 botol isi 60 ml)<br>
                            4. Calortusin (sirup kemasan dus dengan 1 botol isi 60 ml)<br>
                            5. Calortusin PE (sirup kemasan dus dengan 1 botol isi 60 ml)<br> 
                            6. Cetirizine Hydrochloride (drops kemasan dus dengan 1 botol isi 10 ml)<br>
                        </p>
                        <p> Sebelum perilisan daftar obat sirup yang dilarang BPOM dari PT REMS ini, sebelumnya BPOM juga mencabut izin edar sejumlah perusahaan farmasi swasta karena terbukti menggunakan bahan baku kimiamelebih ambang batas aman. Perusahaan yang sudah menerima sanksi tersebut meliputi PT Yarindo Farmatama, PT Universal Pharmaceutical Industries dan PT Afi Farma, PT Samco Farma dan PT Subros Farma. Sehingga, saat ini total terdapat 204 daftar obat yang dilarang BPOM, termasuk 6 obat dari PT REMS.
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
                    include('datakomentar/komentar1.php');
                    ?>
                </div>
            </div>
            <div class="cards">
                <article class="card">
                    <header>
                        <h2>7 Makanan untuk Meningkatkan Daya Ingat, Cegah Kebiasaan Lupa</h2>
                    </header>
                    <img src="../img-kesehatan/Berita 2.jpg" alt="Hot air balloons">
                    <div class="content-card">
                        <p>"Ada diet khusus yang disarankan untuk kesehatan otak yang optimal. Kami memiliki bukti kuatnya," ujar ahli memori dan kesehatan otak, Babak Tousi, mengutip laman Cleveland Clinic.</p>
                    </div>
                    <h3>
                        <a href="index2.php">baca selengkapnya</a>
                    </h3>
                </article>
                <article class="card">
                    <header>
                        <h2>3 Jenis Penyakit Tidak Menular Paling Banyak Diderita Orang Indonesia dan Cara Mengurangi Risikonya</h2>
                    </header>
                    <img src="../img-kesehatan/berita 3.png" alt="Hot air balloons">
                    <div class="content-card">
                        <p>Sejumlah penyakit tidak menular atau PTM yang dulu identik dengan usia tua kini mulai menjangkiti usia muda. Rendahnya kesadaran masyarakat untuk menerapkan pola hidup yang sehat tecermin dari hasil Riset Kesehatan Dasar (Riskesdas) 2018.</p>
                    </div>
                    <h3>
                        <a href="index3.php">baca selengkapnya</a>
                    </h3>
                </article>
                <article class="card">
                    <header>
                        <h2>Penuhi Kebutuhan Serat Bisa Jadi Modal Untuk Memulai Gaya Hidup Sehat Berkelanjutan</h2>
                    </header>
                    <img src="../img-kesehatan/berita 4.jpg" alt="Hot air balloons">
                    <div class="content-card">
                        <p>Diet bukan lagi hanya tentang defisit kalori dan mencari hasil yang instan, tetapi juga merupakan perjalanan membangun gaya hidup sehat yang berkelanjutan. Tak heran jika diet ketat yang tidak terarah hanya akan menyebabkan berat badan kembali ke berat semula. Tentu saja ini bisa menjadi pengalaman yang kurang mengenakan.</p>
                    </div>
                    <h3>
                        <a href="index4.php">baca selengkapnya</a>
                    </h3>
                </article>
            </div>
        </div>

</body>

</html>
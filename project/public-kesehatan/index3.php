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
                </ul>
            </div>
            <div class="content">
                <div class="content-container">
                    <h1 class="judul">
                    3 Jenis Penyakit Tidak Menular Paling Banyak Diderita Orang Indonesia dan Cara Mengurangi Risikonya</h1>
                    <h3 class="penerbit">
                    Risna Halidi | 7 Desember 2022 09:10                    
                    </h3>
                    <img src="../img-kesehatan/berita 3.png" alt="abc" class="hero-img" width="600px">
                    <div class="isi-content">
                        <p>Sejumlah penyakit tidak menular atau PTM yang dulu identik dengan usia tua kini mulai menjangkiti usia muda. Rendahnya kesadaran masyarakat untuk menerapkan pola hidup yang sehat tecermin dari hasil Riset Kesehatan Dasar (Riskesdas) 2018.</p>
                        <p>Beberapa indikasi menunjukkan bahwa 95,5 persen masyarakat Indonesia kurang mengonsumsi sayur dan buah, hingga 33,5 persen masyarakat kurang melakukan aktivitas fisik atau berolahraga.
                        </p>
                        <p>Imbasnya, PTM kini jamak menyerang masyarakat dan tercatat meningkat cukup signifikan dalam beberapa tahun terakhir. Berikut sejumlah PTM yang paling banyak diderita masyarakat Indonesia, dikutip dari siaran pers Kemenkes:</p>
                        <h3>1. Hipertensi</h3>
                        <p>Hipertensi atau yang akrab disebut silent killer pada usia diatas 18 tahun menurut data Kemenkes meningkat dari 25,8 persen pada 2013 menjadi 34,1 persen di tahun 2018. Ditaksir penderita hipertensi di Indonesia mencapai lebih dari 63 juta jiwa, atau sekitar 23 persen dari jumlah penduduk Indonesia.
                        </p>
                        <p>Faktor risiko hipertensi utamanya disebabkan oleh faktor-faktor yang tidak dapat dimodifikasi seperti genetik riwayat keluarga, di mana orang yang memiliki orang tua penderita hipertensi memiliki risiko lebih tinggi dibandingkan sebaliknya.
                        </p>
                        <p>Kemudian juga usia, dan jenis kelamin, dimana lelaki memiliki risiko yang lebih tinggi sebanyak 2,3 kali. Sementara perempuan yang telah memasuki fase menopause atau berusia lebih dari 65 tahun juga lebih riskan terkena hipertensi.</p>
                        <h3>2. Diabetes Melitus</h3>
                        <p>Berbeda dengan hipertensi, risiko diabetes utamanya disebabkan faktor gaya hidup yang tidak sehat, terlebih akibat konsumsi kadar gula yang berlebihan.
                        </p>
                        <p>Berbeda dengan hipertensi, risiko diabetes utamanya disebabkan faktor gaya hidup yang tidak sehat, terlebih akibat konsumsi kadar gula yang berlebihan.</p>
                        <p>Kemenkes mencatatkan bahwa lebih dari 5,5% masyarakat Indonesia mengonsumsi gula lebih dari 50 gram per hari. Ini yang membuat Indonesia menjadi negara pengonsumsi gula terbesar ketiga di ASEAN.
                        </p>
                        <p>Sementara konsumsi gula terbesar disumbang produk-produk seperti susu dan teh kemasan, kental manis, dan jus buah serbuk. Laju konsumsi gula berlebihan ini bahkan diprediksi Kemenkes akan membuat jumlah penderita diabetes melitus pada 2045 mencapai hingga 28,6 juta dan menjadikan Indonesia sebagai negara dengan populasi diabetes melitus tertinggi kelima di dunia.</p>
                        <h3>3. Stroke</h3>
                        <p>Stroke terjadi akibat pembuluh arteri yang tersumbat, atau pecahnya pembuluh darah. Dalam Riskesdas juga tercatat terjadi peningkat prevalensi stroke dari yang cukup signifikan dari 7 persen menjadi 10,9 persen pada 2018.
                        </p>
                        <p>Stroke merupakan penyakit komplikasi yang biasanya disebabkan oleh penyakit-penyakit sebelumnya. Diabetes melitus, dan terutama hipertensi merupakan beberapa faktor penyebab stroke dimana sekitar 70 persen penderita stroke disebabkan oleh hipertensi.</p>
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
                <article class="card">
                    <header>
                        <h2>Update Terbaru, Daftar 32 Sirup Obat yang Dilarang BPOM dari PT REMS</h2>
                    </header>
                    <img src="../img-kesehatan/berita 1.jpg" alt="Hot air balloons">
                    <div class="content-card">
                        <p>Menurut hasil uji bahan baku, bahan propilen glikol yang digunakan dalam sirup obat industri farmasi tersebut mengandung kadar EG 33,46 persen dan DEG 5,94 persen.</p>
                    </div>
                    <h3>
                        <a href="index1.php">baca selengkapnya</a>
                    </h3>
                </article>
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
            </div>
        </div>

</body>

</html>
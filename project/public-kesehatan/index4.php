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
                    Penuhi Kebutuhan Serat Bisa Jadi Modal Untuk Memulai Gaya Hidup Sehat Berkelanjutan</h1>
                    <h3 class="penerbit">
                    Dinda Rachmawati | 2 Desember 2022 08:30                    
                    </h3>
                    <img src="../img-kesehatan/berita 4.jpg" alt="abc" class="hero-img" width="600px">
                    <div class="isi-content">
                        <p>Diet bukan lagi hanya tentang defisit kalori dan mencari hasil yang instan, tetapi juga merupakan perjalanan membangun gaya hidup sehat yang berkelanjutan. Tak heran jika diet ketat yang tidak terarah hanya akan menyebabkan berat badan kembali ke berat semula. Tentu saja ini bisa menjadi pengalaman yang kurang mengenakan.</p>
                        <p>Meski begitu, dalam menjalani diet sehat, dibutuhkan konsistensi. Hal ini adalah kunci yang akan membuat kita memenangkan 'perlombaan' untuk membangun kebiasaan yang mendukung gaya hidup sehat.
                        </p>
                        <p>Tak hanya berfokus pada hasil, tetapi kita akan lebih menghargai proses karena nantinya kita bisa menilai diet sehat tersebut dengan kualitas kesehatan yang tidak hanya terbatas pada kesehatan tubuh saja tetapi juga pikiran.</p>
                        <p>Untuk memulai gaya hidup sehat berkelanjutan, serat menjadi salah satu nutrisi penting yang perlu dipenuhi yang bermamfaat untuk menunjang proses pencernaan dan metabolisme tubuh. 
                        </p>
                        <p>"Serat memastikan tubuh menerima asupan serat yang cukup lewat konsumsi makanan berserat ataupun suplemen serat sangatlah penting. Secara umum kebutuhan serat manusia antara 25 - 35 gr per hari," jelas Cynthia Clara, Brand Manager Everfit dalam siaran pers yang Suara.com terima belum lama ini.
                        </p>
                        <p>Untuk membantu lebih banyak orang lebih mudah memulai perjalanan gaya hidup sehat berkelanjutannya, Everfit diluncurkam untuk menjadi "teman" untuk meraih tujuan.</p>
                        <p>Hadir dengan dua rangkaian produk Slimming Line & Wellness Line Everfit minuman serat halal ini dibuat menggunakan Premium Fiber dan 100% Superfood Ingredients yang memiliki segudang manfaat untuk kesehatan tubuh.
                        </p>
                        <p>"Dengan hadirnya minuman serat ini diharapkan dapat membantu masyarakat untuk dapat memenuhi kebutuhan serat harian agar dapat merasakan manfaat positif serat bagi kesehatan. Tentunya juga harus didukung dengan gaya hidup sehat yang berkelanjutan ya," ujar dia. 
                        </p>
                        <p>Minuman serat penting bagimu yang memenuhi kebutuhan serat harian tubuh, melancarkan pencernaan, proses detoksifikasi dalam tubuh, menyeimbangkan kadar makanan dan minuman yang mengandung kolesterol, lemak jenuh, serta gula berlebih.</p>
                        <p>Selain itu dapat membantu penyerapan vitamin dan mineral agar lebih maksimal menghilangkan lemak jenuh berlebih pada tubuh, menurunkan berat badan hingga mengurangi potensi penyakit stroke, diabetes, obesitas, serta jantung akibat konsumsi makanan yang tidak seimbang.
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
            </div>
        </div>

</body>

</html>
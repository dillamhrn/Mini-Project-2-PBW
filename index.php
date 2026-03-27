<?php
require 'koneksi.php';

$query = "SELECT * FROM pengalaman";
$result = mysqli_query($koneksi, $query);

$query2 = "SELECT * FROM sertifikat";
$result2 = mysqli_query($koneksi, $query2);

$queryHard = "SELECT * FROM skill WHERE kategori='hard'";
$resultHard = mysqli_query($koneksi, $queryHard);

$querySoft = "SELECT * FROM skill WHERE kategori='soft'";
$resultSoft = mysqli_query($koneksi, $querySoft);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Portofolio | Dilla Maharani</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <div class="container-navbar">
            <div class="kiriatas">
                My Portofolio ♡
            </div>
            <div class ="tengah">
                <a href="#home">Home 🏡</a>
                <a href="#about">About Me 🙋🏻‍♀️</a>
                <a href="#certificate">Certificate 📑</a>
            </div>
            <div class="kananatas">
                <img src="images/instagram.png" alt="instagram">
                <a href="https://instagram.com/dillaaamhrn" target="_blank" style="color: black; text-decoration: underline;">
                    dillaaamhrn
                </a>
            </div>
        </div>
    </header>

    <main>
        <section id="home">
            <div class="teksperkenalan">
                <h1 class="halo">Halo 👋🏻, <br>Saya Dilla Maharani</h1>
                <p class="identiti">Mahasiswa Sistem Informasi 👩🏻‍💻 | Fakultas Teknik ⚙️ | Universitas Mulawarman 🏫</p>
                <p class="yapping">Sebagai mahasiswa Sistem Informasi, saya memiliki ketertarikan dalam pengembangan website dan desain UI/UX. Website ini merupakan mini project yang saya kembangkan menggunakan HTML dan CSS sebagai bentuk eksplorasi dan pengembangan keterampilan di bidang front-end development 𓍢ִႋ🌷͙֒ᰔᩚ.</p>
            </div>
            <div class="fotoku">
                <img src="images/mypoto.png" alt="fotogweh">
                </div>
        </section>
        
        <section id="about">
            <div class="judul">About Me ──★ ˙🍓 ̟ !!</div>
            <div class="isi">
                <div class="deskripsi">
                    Saya adalah mahasiswa Sistem Informasi yang aktif mengikuti kegiatan akademik dan non-akademik. Saat ini saya sedang mempelajari dasar pengembangan website menggunakan HTML dan CSS. Saya juga aktif dalam organisasi serta kepanitiaan untuk mengembangkan kemampuan komunikasi, kerja sama tim, dan manajemen waktu.
                </div>
                <div class="skill">
                    <div class="detail">
                        <div class="hard">
                            <h3>Hard Skill</h3>
                            <?php while($row = mysqli_fetch_assoc($resultHard)) : ?>
                                <div class="skill-item">
                                    <div class="info">
                                        <span><?= $row['nama_skill']; ?></span>
                                        <span><?= $row['persen']; ?>%</span>
                                    </div>
                                    <div class="bar">
                                        <div class="fill" style="width:<?= $row['persen']; ?>%"></div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="soft">
                            <h3>Soft Skill</h3>
                            <?php while($row = mysqli_fetch_assoc($resultSoft)) : ?>
                                <div class="skill-item">
                                    <div class="info">
                                        <span><?= $row['nama_skill']; ?></span>
                                        <span><?= $row['persen']; ?>%</span>
                                    </div>
                                    <div class="bar">
                                        <div class="fill2" style="width:<?= $row['persen']; ?>%"></div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <div class="pengalaman">
                    <h3>Pengalaman</h3>

                    <div class="timeline">
                    <?php while($row = mysqli_fetch_assoc($result)) : ?>
                        <div class="timeline-item">
                            <h4><?= $row['kegiatan']; ?></h4>
                            <span><?= $row['jabatan']; ?> • <?= $row['periode']; ?></span>
                            <p><?= $row['deskripsi']; ?></p>
                        </div>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>

        <section id="certificate">
            <div class="judul2">
                Certificate ──★ ˙🍓 ̟ 
            </div>
            <div class="sertif">
            <?php 
            $cards = ['card1', 'card2', 'card3'];
            $i = 0;

            while($row = mysqli_fetch_assoc($result2)) : 
                $class = $cards[$i % 3];
            ?>
                <div class="<?= $class ?>">
                    <div class="card custom-card">
                        <img src="<?= $row['gambar']; ?>" class="card-img-top" alt="<?= $row['nama_sertifikat']; ?>">
                        <div class="card-body">
                            <p class="card-text"><?= $row['nama_sertifikat']; ?></p>
                            <p class="keterangan"><?= $row['keterangan']; ?></p>
                        </div>
                    </div>
                </div>
            <?php 
                $i++;
            endwhile; 
            ?>
            </div>
        </section>
    </main>
    <footer>
        Made with ♡ by Dilla Maharani <br>© 2026
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MBTI Test</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
         .left-align {
            text-align: left;
        }
        .masthead {
            background-image: url('assets/img/output/psilans.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .masthead .container {
            z-index: 2;
            position: relative;
        }
        .masthead::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Adding a dark overlay */
            z-index: 1;
        }
        .team-member img {
            width: 200px; /* Set your preferred width */
            height: 200px; /* Set your preferred height */
            object-fit: cover; /* Ensure the image covers the area while maintaining aspect ratio */
        }
        .team-member {
            margin: 0 50px; /* Increase the horizontal margin to move images to the corners */
        }
    </style>
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">PsycheScope</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Panduan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Disclaimer</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Tes Kepribadian MBTI: Kenali Dirimu!</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Tes MBTI ini bertujuan untuk menemukan diri dalam 16 tipe kepribadian MBTI. Kenali lebih jauh dirimu untuk berkembang setidaknya satu persen setiap harinya!</p>
                    <a class="btn btn-primary btn-xl" href="#about">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Baca panduan pengisiannya, yuk!</h2>
                    <hr class="divider divider-light" />
                    <p class="left-align">1. Gak ada jawaban yang benar atau salah. Isilah dengan jujur sesuai kepribadianmu.</p>
                    <p class="left-align">2. Santai aja, tes ini gak diberi waktu, kok.</p>
                    <p class="left-align">3. Cari tempat yang nyaman dan kondusif supaya kamu lebih fokus.</p>
                    <p class="left-align">4. Jika kamu keluar di tengah tes, maka seluruh proses tes dan jawaban akan hilang.</p>
                    <p class="left-align">5. Hasil tes bisa kamu dapatkan setelah mengisi semua pertanyaan dengan lengkap.</p>
                    <p>Selamat mengisi, ya! :)</p>
                    <a class="btn btn-light btn-xl" href="System/reset.php">Yok Mulai!</a>
                </div>
            </div>
        </div>
    </section>
      <!-- Team-->
      <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Team</h2>
                <h3 class="section-subheading text-muted">Mahasiswa biasa</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/uul.png" alt="..." />
                        <h4>M Aulia Syamsul Hadi</h4>
                        <p class="text-muted">Mas mas batam</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/hubul.png" alt="..." />
                        <h4>Alhubul Austad Ramadan</h4>
                        <p class="text-muted">Mas mas jawa</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Semoga dengan adanya website ini bisa memberikan pandangan pentingnya mengetahui potensi diri dengan mengenal diri sendiri dengan lebih dalam.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <h1>Disclaimer</h1>
            <p>Jika Anda sedang mengalami krisis psikologis yang mengancam hidup Anda, layanan ini tidak direkomendasikan.</p>
            <p>Silakan menghubungi <span class="contact-info">119</span>.</p>
        </div>
    </section>
  
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - MBTI Test</div></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- SB Forms JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>

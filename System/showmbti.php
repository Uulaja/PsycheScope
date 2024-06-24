<?php
session_start();
include 'config.php';

if (!isset($_GET['type'])) {
    header('Location: user.php');
    exit();
}

$type = $_GET['type'];


$mbtiData = [
    'ISTJ' => ['title' => 'The Inspector'],
    'ISFJ' => ['title' => 'The Protector'],
    'INFJ' => ['title' => 'The Counselor'],
    'INTJ' => ['title' => 'The Mastermind'],
    'ISTP' => ['title' => 'The Craftsman', ],
    'ISFP' => ['title' => 'The Composer', ],
    'INFP' => ['title' => 'The Healer', ],
    'INTP' => ['title' => 'The Architect', ],
    'ESTP' => ['title' => 'The Dynamo',],
    'ESFP' => ['title' => 'The Performer'],
    'ENFP' => ['title' => 'The Campaigner'],
    'ENTP' => ['title' => 'The Visionary'],
    'ESTJ' => ['title' => 'The Executive'],
    'ESFJ' => ['title' => 'The Consul'],
    'ENFJ' => ['title' => 'The Teacher'],
    'ENTJ' => ['title' => 'The Commander']
];

if (!array_key_exists($type, $mbtiData)) {
    echo "Invalid MBTI type.";
    exit();
}

$mbtiInfo = $mbtiData[$type];
$imagePath = "../assets/img/output/" . strtolower($type) . ".png";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MBTI Test Result</title>
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
    <link href="../css/styles.css" rel="stylesheet" />
    <style>
        .result-img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            border: 5px solid #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .masthead {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            background-color: #6c757d;
        }
        .masthead .container {
            z-index: 2;
            position: relative;
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
                    <li class="nav-item"><a class="nav-link" href="../index.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php#about">Panduan</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php#services">Disclaimer</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Halooooo!!!!!! <?php echo $_SESSION['username']; ?></h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Berikut adalah hasil tes MBTI Anda. Lihat gambar di bawah ini untuk mengetahui lebih lanjut.</p>
                </div>
            </div>
        </div>
    </header>
    <!-- Result Section-->
    <section class="page-section bg-primary">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <img id="result-image" class="result-img" src="<?php echo $imagePath; ?>" alt="<?php echo $type; ?>" alt="Hasil MBTI"> 
                    <a class="btn btn-light btn-xl mt-4" href="../index.php">Kembali ke Beranda</a>
                    <a class="btn btn-light btn-xl mt-4" href="reset.php">Test Ulang</a>
                </div>
            </div>
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
    <!-- Result JS -->
    <script src="js/result.js"></script>
</body>
</html>

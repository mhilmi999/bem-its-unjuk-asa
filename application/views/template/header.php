<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?= base_url(); ?>assets/css/base.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Maven Pro' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Beranda | BEM ITS</title>
</head>

<body>
<header class="sticky-top shadow">
    <nav class="warnabgnav navbar navbar-expand-lg navbar-custom ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url(); ?>assets/img/logounjukasa.png" alt="" height="45" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse fontnavbar fw-bold"  id="navbarSupportedContent"> <!-- Buat ganti warna di navbar Collapse di dalam css bootstrap -->
                <ul class="ms-auto navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item px-2">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu warnabgnav fontnavbar" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Unjuk Asa </a></li>
                            <li><a class="dropdown-item" href="#">Kominrel</a></li>
                            <li><a class="dropdown-item" href="#">Intra Kampus</a></li>
                            <li><a class="dropdown-item" href="#">Akar Inovasi</a></li>
                            <li><a class="dropdown-item" href="#">Kemahasiswaan</a></li>
                            <li><a class="dropdown-item" href="#">Gersospol</a></li>
                            
                        </ul>
                        
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Rilis
                        </a>
                        <ul class="dropdown-menu warnabgnav fontnavbar" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Dari KM ITS untuk Indonesia </a></li>
                            <li><a class="dropdown-item" href="#">Kabar dari BEM ITS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">Kalender</a>
                    </li>
                
                </ul>
                <form class="d-flex ps-3 pe-5">
                    <a href="#"><i class="bi bi-search"></i></a>
                </form>
            </div>
        </div>
    </nav>
</header>

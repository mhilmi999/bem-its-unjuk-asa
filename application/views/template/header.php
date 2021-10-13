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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="<?= base_url(); ?>assets/img/icon.png">

    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>


    <!-- NewBiz Template -->
    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>newbiz/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>newbiz/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>newbiz/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>newbiz/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>newbiz/assets/css/style.css" rel="stylesheet">


    <link rel='stylesheet' type='text/css' href='<?= base_url(); ?>fullcalendar/lib/main.css' />

    <title>BEM ITS | Unjuk Asa</title>

</head>

<body style="overflow-x: hidden;">
    <header class="sticky-top shadow">
        <nav class="warnabgnav navbar navbar-expand-lg navbar-custom ">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo site_url('home') ?>">
                    <img src="<?= base_url(); ?>assets/img/logounjukasa.png" alt="Kabinet Unjuk Asa" height="45" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hambergernavbar" aria-controls="hambergernavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse fontnavbar fw-bold" id="hambergernavbar">
                    <!-- Buat ganti warna di navbar Collapse di dalam css bootstrap -->
                    <ul class="ms-auto navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item px-2">
                            <a class="nav-link active" aria-current="page" href="<?php echo site_url('home') ?>">Beranda</a>
                        </li>
                        <li class="nav-item dropdown px-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu warnabgnav fontnavbar" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo site_url('profil/kabinet') ?>">Unjuk Asa </a></li>
                                <li><a class="dropdown-item" href="<?php echo site_url('profil/kominrel') ?>">Kominrel</a></li>
                                <li><a class="dropdown-item" href="<?php echo site_url('profil/inpus') ?>">Intra Kampus</a></li>
                                <li><a class="dropdown-item" href="<?php echo site_url('profil/akarinovasi') ?>">Akar Inovasi</a></li>
                                <li><a class="dropdown-item" href="<?php echo site_url('profil/kemahasiswaan') ?>">Kemahasiswaan</a></li>
                                <li><a class="dropdown-item" href="<?php echo site_url('profil/gersospol') ?>">Gersospol</a></li>

                            </ul>

                        </li>
                        <li class="nav-item dropdown px-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Rilis
                            </a>
                            <ul class="dropdown-menu warnabgnav fontnavbar" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo site_url('rilis/darikmitsuntukindonesia') ?>">Dari KM ITS untuk Indonesia </a></li>
                                <li><a class="dropdown-item" href="<?php echo site_url('rilis/kabardaribemits') ?>">Kabar dari BEM ITS</a></li>
                                <li><a class="dropdown-item" href="<?php echo site_url('rilis/posta') ?>">Contoh Post</a></li>
                            </ul>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="<?php echo site_url('kalender') ?>">Kalender</a>
                        </li>

                    </ul>
                    <form class="ps-3 pe-5">
                        <a href="#"><i class="bi bi-search"></i></a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
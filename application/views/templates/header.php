<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="<?= base_url(); ?>assets/css/scrolling-nav.css" rel="stylesheet"> -->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/lightbox.css">

    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url(); ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/main.css">
    <!--===============================================================================================-->



    <title><?= $title; ?></title>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #db2525;
    border-color: #db2525;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="<?= base_url(); ?>#home"><?= $title; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>#kontak">KONTAK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?= base_url('auth/registration'); ?>">DAFTAR
                            AKUN</a>
                    </li>

                    <!-- <li class="nav-item dropdown dmenu"> -->
                    <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            LAINNYA
                        </a> -->
                    <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
                    <!-- <div class="dropdown-menu dropdown-menu-right sm-menu" aria-labelledby="navbarDropdown"> -->
                    <!-- <a class="dropdown-item" href="<?= base_url(); ?>ppdb/login">LOGIN SISWA</a> -->
                    <!-- <a class="dropdown-item" href="<?= base_url(); ?>auth">LOGIN GURU</a> -->
                    <!-- <a class="dropdown-item" href="<?= base_url(); ?>auth">LOGIN TAMU</a> -->
                    <!-- <div class="dropdown-divider"></div> -->
                    <!-- <a class="dropdown-item" href="<?= base_url(); ?>#contact">ppdb ONLINE</a> -->
                    <!-- </div> -->
                    </li>
                </ul>
            </div>


        </div>

    </nav>
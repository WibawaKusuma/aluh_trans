<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Aluh Trans | <?= $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/css/slick.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/css/style.css">

    <style>
        /* Font dan variabel warna */
        :root {
            --primary-color: #014b85;
            --secondary-color: #ff0000;
            --accent-color: #f8f9fa;
            --text-color: #333;
            --light-text: #6c757d;
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Header modern */
        .header-area {
            position: fixed;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            background-color: #fff;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        /* .header-sticky {
            transition: var(--transition);
        }

        .header-sticky.sticky-bar {
            background: #fff;
        }

        .header-sticky.sticky-bar.sticky {
            animation: 500ms ease-in-out 0s normal none 1 running fadeInDown;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
        } */

        .logo img {
            max-height: 60px;
            transition: var(--transition);
        }

        /* .header-sticky.sticky-bar.sticky .logo img {
            max-height: 50px;
        } */

        /* Menu styling */
        .main-menu {
            display: flex;
            justify-content: flex-end;
        }

        #navigation {
            display: flex;
            margin: 0;
            padding: 0;
        }

        #navigation li {
            list-style: none;
            padding: 0 5px;
            position: relative;
        }

        #navigation li a {
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            font-weight: 500;
            color: var(--text-color);
            padding: 30px 15px;
            display: block;
            text-transform: uppercase;
            transition: var(--transition);
            position: relative;
            text-decoration: none;
        }

        #navigation li a:hover {
            color: var(--primary-color);
        }

        /* Indikator menu aktif - hanya warna teks */
        #navigation li.active a {
            color: var(--secondary-color);
            font-weight: 600;
        }

        /* Indikator menu aktif untuk mobile - hanya warna teks */
        .slicknav_nav li.active a {
            color: var(--secondary-color) !important;
            font-weight: 600;
        }

        /* Mobile menu styling */
        .slicknav_menu {
            background: transparent;
            padding: 0;
        }

        .slicknav_nav {
            background: #fff;
            margin-top: 0;
            border-radius: 0 0 5px 5px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .slicknav_nav a {
            color: var(--text-color);
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            padding: 12px 15px;
        }

        .slicknav_nav a:hover {
            background: var(--accent-color);
            color: var(--primary-color);
            border-radius: 0;
        }

        .slicknav_btn {
            margin: 15px 15px 15px 0;
            background: transparent;
        }

        .slicknav_icon-bar {
            background-color: var(--primary-color) !important;
            height: 2px;
            margin: 5px 0;
            width: 25px;
        }

        /* Responsive adjustments */
        @media (max-width: 991px) {
            .header-area {
                padding: 10px 0;
            }

            .logo img {
                max-height: 45px;
            }

            /* .header-sticky.sticky-bar.sticky .logo img {
                max-height: 40px;
            } */
        }

        /* Adjust main content to account for fixed header */
        main {
            padding-top: 100px;
        }

        @media (max-width: 991px) {
            main {
                padding-top: 80px;
            }
        }
    </style>
</head>


<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url('assets/template') ?>/img/logo/logo-aluh-trans.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header">
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                                <div class="logo">
                                    <a href="<?= base_url('landing_page') ?>">
                                        <img src="<?= base_url('assets/template') ?>/img/logo/logo-aluh-trans.png" alt="Aluh Trans Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-6 col-6">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="<?= ($title == 'Home') ? 'active' : '' ?>">
                                                <a href="<?= base_url('landing_page') ?>">Home</a>
                                            </li>
                                            <li class="<?= ($title == 'About Us') ? 'active' : '' ?>">
                                                <a href="<?= base_url('landing_page/about') ?>">About Us</a>
                                            </li>
                                            <li class="<?= ($title == 'Package') ? 'active' : '' ?>">
                                                <a href="<?= base_url('landing_page/package') ?>">Package</a>
                                            </li>
                                            <li class="<?= ($title == 'Armada') ? 'active' : '' ?>">
                                                <a href="<?= base_url('landing_page/armada') ?>">Armada</a>
                                            </li>
                                            <li class="<?= ($title == 'Contact') ? 'active' : '' ?>">
                                                <a href="<?= base_url('landing_page/contact') ?>">Contact Us</a>
                                            </li>
                                            <li class="<?= ($title == 'Login') ? 'active' : '' ?>">
                                                <a href="<?= base_url('auth') ?>">Login</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>
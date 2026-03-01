<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PT.RSK</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="images/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <!-- <link href="lib/animate/animate.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/HomeTemplate/lib/animate/animate.min.css'); ?>" rel="stylesheet">
    <!-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/HomeTemplate/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/HomeTemplate/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/HomeTemplate/css/style.css'); ?>" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Roboto Flex Normal Thin';
            src: url('<?php echo base_url("assets/font/RobotoFlex-VariableFont_GRAD,XTRA,YOPQ,YTAS,YTDE,YTFI,YTLC,YTUC,opsz,slnt,wdth,wght.ttf"); ?>') format('truetype');
            /* Pastikan path ke font sesuai dengan yang benar */
        }

        .custom-font {
            font-family: 'Roboto Flex Normal Thin', sans-serif;
            color: #ff0000;
            /* contoh warna merah */
            /* Gunakan font Roboto Flex Normal Thin */
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">

        <a href="" class="navbar-brand d-flex align-items-center px-4 px-lg-5"> 
        
            <img src="images/logo.png" alt="IT-PROJECT" class="m-0 text-primary me-3" style="height: 60px; width: 75px;">
            <div>
                <!-- <h2 class="m-0 custom-font" style="margin-bottom: 20px; color: #154f75;"><?php
                                                                                            foreach ($DATA_HOMEPAGE as $row) {
                                                                                                if ($row->NAMA == "COMPANY") {
                                                                                                    echo $row->KETERANGAN;
                                                                                                }
                                                                                            }
                                                                                            ?></h2> -->
                                                                                            <img src="images/namaptv3.png" alt="IT-PROJECT" class="m-0 text-primary me-3"  style="width: 550px; height: auto;"></br>
                <marquee style="font-size: 20px;">Your Valuable Partner</marquee>
            </div>
        </a>



        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo base_url('Home'); ?>" class="nav-item nav-link <?php if ($ID == "Home") {
                                                                                        echo "active";
                                                                                    } ?>">Home</a>
                <a href="<?php echo base_url('About'); ?>" class="nav-item nav-link <?php if ($ID == "About") {
                                                                                        echo "active";
                                                                                    } ?>">About</a>
                <a href="<?php echo base_url('Services'); ?>" class="nav-item nav-link <?php if ($ID == "Services") {
                                                                                            echo "active";
                                                                                        } ?>">Services</a>
                <a href="<?php echo base_url('Project'); ?>" class="nav-item nav-link <?php if ($ID == "Project") {
                                                                                            echo "active";
                                                                                        } ?>">Project</a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> -->
                <a href="<?php echo base_url('Contact'); ?>" class="nav-item nav-link <?php if ($ID == "Contact") {
                                                                                            echo "active";
                                                                                        } ?>">Contact</a>
            </div>
            <!-- <a class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" href="<?php echo base_url('Login'); ?>"> <i class="fa fa-arrow-right ms-3" aria-hidden="true"></i> Login</a> -->

        </div>
        </br>
    </nav>
    <!-- Navbar End -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <title><?= $setting['site_title'] ?></title>
    <meta content="<?= $setting['meta_description'] ?>" name="description">
    <meta content="<?= $setting['meta_keywords'] ?>" name="keywords">



    <!-- Favicons -->
    <link href="<?= PATH_URL . $setting['favicon_url'] ?>" rel="icon">
    <link href="<?= PATH_URL ?>images/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= PATH_URL ?>plugins/aos/aos.css" rel="stylesheet">
    <link href="<?= PATH_URL ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= PATH_URL ?>plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= PATH_URL ?>plugins/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= PATH_URL ?>plugins/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= PATH_URL ?>css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center">


            <h1 class="logo me-auto"><a href="/home"><?php echo $setting['logo_url'] ?></a></h1>

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="<?= PATH_URL ?>images/logo.png" alt="" class="img-fluid"></a>-->
            <?php
            include('navbar.php');
            ?>

            <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>

        </div>
    </header><!-- End Header -->
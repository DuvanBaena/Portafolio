<?php
include __DIR__ . '../../BackEnd/Model/Bridgedb.php';
$data=new BaseDatos;
//$records2=$data->ListVersion();
$records=$data->ListPersonalInformation();
?>


<!DOCTYPE html>
<html lang="en">

<head><meta charset="gb18030">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- All CSS Files -->

  <?php include __DIR__ . '/Modules/StylesAll.php'; ?>


</head>

<body>

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
    
     <!-- ======= Mobile nav toggle button ======= -->

     <button type="button" class="mobile-nav-toggle"><i class="icofont-navigation-menu"></i></button>

     <!-- ======= Header ======= -->

     <?php include __DIR__ . '/Modules/index/NavbarLateral.php'; ?>

     <!-- End Header -->

     <!-- ======= Hero Section ======= -->

     <?php include __DIR__ . '/Modules/index/Hero.php'; ?>

     <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->

    <?php include __DIR__ . '/Modules/index/About.php'; ?>

    <!-- End About Section -->

    <!-- ======= Resume Section ======= -->

    <?php include __DIR__ . '/Modules/index/Summary.php'; ?>

    <!-- End Resume Section -->

    <!-- ======= Skills Section ======= -->

    <?php include __DIR__ . '/Modules/index/Skills.php'; ?>

    <!-- End Skills Section -->

    <!-- ======= CV Section ======= -->

    <?php include __DIR__ . '/Modules/index/Cv.php'; ?>

    <!-- End Cta Section -->

    <!-- ======= Portfolio Book Section ======= -->

    <?php include __DIR__ . '/Modules/index/Book.php'; ?>

    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->

    <?php include __DIR__ . '/Modules/index/Testimonial.php'; ?>

    <!-- End Testimonials Section -->

    <!-- ======= Services Section ======= -->

    <?php include __DIR__ . '/Modules/index/Certification.php'; ?>

    <!-- End Services Section -->


    <!-- ======= Contact Section ======= -->

    <?php include __DIR__ . '/Modules/index/Contact.php'; ?>

    <!-- End Contact Section -->

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    <?php include __DIR__ . '/Modules/Footer.php'; ?>

    <!-- End  Footer -->


  <!-- ======= Link WhatsApp ======= -->
  <a href="https://wa.me/573122988419?text=Me%20gustaría%20comunicarme%20contigo." class="float" target="_blank">
    <i class="icofont-brand-whatsapp" title=""></i>
  </a>
  <!-- End  WhatsApp -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

 <!-- All Files  JAvaScripts -->

    <?php include __DIR__ . '/Modules/FilesJs.php'; ?>

  <!-- End  JAvaScripts -->


</body>

</html>


<header id="header">
    <div class="d-flex flex-column">
      <div class="profile" style="text-transform: capitalize">

      <?php
      if(count($records)>0){
      for($i=0;$i<count($records);$i++){?>
      <?php $FullName = $records[$i]["UserName"] ." ". $records[$i]["UserLastName"];?>

        <img src="<?php echo UrlServer ?>/FrontEnd/Resources/img/profile-img.png" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"> <a href="index.html"><?php echo $FullName;?></a></h1>

        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/djb349" class="twitter" target="_blank"><i class="bx bxl-twitter"
              title="twitter"></i></a>
          <a href="https://www.facebook.com/duvan.puerta" class="facebook" target="_blank"><i class="bx bxl-facebook"
              title="facebook"></i></a>
          <a href="https://www.instagram.com/djbpuerta" class="instagram" target="_blank"><i class="bx bxl-instagram"
              title="instagram"></i></a>
          <a href="https://github.com/DuvanBaena" class="github" target="_blank"><i class="bx bxl-github"
              title="github"></i></a>
          <a href="https://www.linkedin.com/in/djbp349" class="linkedin" target="_blank"><i class="bx bxl-linkedin"
              title="linkedin"></i></a>
        </div>

          <?php 
        }
      }
    ?>

      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#about"><i class='bx bxs-user-pin'></i> <span>About</span></a></li>
          <li><a href="#resume"><i class="bx bx-line-chart-down"></i> <span>Resumen</span></a></li>
          <li><a href="#portfolio"><i class='bx bx-book-heart'></i> Books</a></li> 
          <li><a href="#contact"><i class="icofont-ui-contact-list"></i> Contact</a></li>
          <li><a href="<?php echo UrlServer?>/FrontEnd/Pages/login.php"><i class="icofont-code"></i> Administrator</a></li>
          <!-- <li><a href="#services"><i class='bx bx-line-chart-down'></i> Experience</a></li> -->
        </ul>

      </nav>
      <!-- .nav-menu -->
    </div>
  </header>

  


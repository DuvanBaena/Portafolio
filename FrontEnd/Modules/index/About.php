 <?php
  if(count($records)>0){
  for($i=0;$i<count($records);$i++){?>

   <section id="about" class="about ">
      <div class="container">
        <div class="section-title">
          <span>about</span>
          <h2>about</h2>
          <p><?php echo $records[$i]["UserTopDescription"];?></p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="http://localhost:81/Portafolio/FrontEnd/Resource/img/profile-img.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Cloud Engineer &amp; Technology Enthusiasts.</h3>
            <p class="font-italic">
            <?php echo $records[$i]["UserBodyDescription"];?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-headphone-alt-1"></i></i></i> <strong>Birthday:</strong> 15 Dec 1986</li>
                  <li><i class="icofont-keyboard-alt"></i> <strong>Website:</strong> <?php echo $records[$i]["UserURL"];?></li>
                  <li><i class="icofont-iphone"></i> <strong>Phone:</strong> <?php echo $records[$i]["UserPhone"];?></li>
                  <li><i class="icofont-wifi-router"></i></i> <strong>City:</strong> <?php echo $records[$i]["UserCity"];?>, COL</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-apple-watch"></i> <strong>Age:</strong> <?php echo $records[$i]["UserAge"];?></li>
                  <li><i class="icofont-playstation-alt"></i> <strong>Degree:</strong> <?php echo $records[$i]["UserDegree"];?></li>
                  <li><i class="icofont-game"></i></i> <strong>Email:</strong> contac@duvanbaena.com</li>
                  <li><i class="icofont-money-bag"></i> <strong>Hour:</strong> <?php echo $records[$i]["UserHour"];?> USD</li>
                </ul>
              </div>
            </div>
            <p>
            <?php echo $records[$i]["UserFooterDescription"];?>
            </p>
          </div>
        </div>
      </div>
  </section>

  <?php 
      }
    }
  ?>
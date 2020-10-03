<?php

$records=$data->ListTestimonial();
?>
  <section id="testimonials" class="testimonials  section-bg">
      <div class="container">

        <div class="section-title">
          <h2>testimonials</h2>
          <p>I have known some people whose advice or ways of analyzing life have contributed to my way of thinking.</p>
        </div>
        <div class="owl-carousel testimonials-carousel">
        <?php
            if(count($records)>0){
            for($i=0;$i<count($records);$i++){?>
          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <?php echo $records[$i]["Remark"];?>.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="<?php echo UrlServer?>/FrontEnd/Resources/img/testimonials/<?php echo $records[$i]["ImgUser"];?>" style="width:90px;height:107px;" class="testimonial-img" alt="">
            <h3><?php echo $records[$i]["UserName"];?></h3>
            <h4><?php echo $records[$i]["RolUserName"];?></h4>
          </div>
          <?php
              }
            }
          ?>          
        </div>
      </div>
    </section>
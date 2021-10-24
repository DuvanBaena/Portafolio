<?php
$records=$data->ListCertification();
?>
  <section id="clients" class="clients">
      <div class="container">
          <div class="section-title" data-aos="fade-up">
            <span>Hard Skill</span>
            <h2>certification</h2>
            <p>These are any certification, my golad is never stop to learnig.</p>
          </div> 
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
        <?php
            if(count($records)>0){
            for($i=0;$i<count($records);$i++){?>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="<?php echo UrlServer?>/FrontEnd/Resources/img/Certification//<?php echo $records[$i]["ImgBadge"];?>" class="img-fluid" alt=""> 
              <!-- <img src="<?php echo UrlServer?>/FrontEnd/Resources/img/Certification/AZ-900.png" class="img-fluid" alt=""> -->
            </div>
          </div>
          <?php
              }
            }
          ?> 
        </div>
      </div>
  </section>

 

<!-- <section id="services" class="services">
          <div class="container">    
            <div class="section-title" data-aos="fade-up">
              <span>area of ​​interest</span>
              <h2>area of ​​interest</h2>
              <p>These are the areas of technology that most capture my attention.</p>
            </div> 

            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="icofont-architecture"></i></div>
                  <h4 class="title"><a href="">Architecture</a></h4>
                  <p class="description">Software Architecture is the highest level design of a system structure.
                  </p>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4 class="title"><a href="">Development</a></h4>
                  <p class="description">Developing software means building it simply by describing it</p>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon"><i class="icofont-cloudapp"></i></div>
                  <h4 class="title"><a href="">Cloud Solutions</a></h4>
                  <p class="description">Replace local machines and private data centers with virtual infrastructure.</p>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon"><i class="icofont-paint"></i></div>
                  <h4 class="title"><a href="">UX / UI</a></h4>
                  <p class="description">It is what a person perceives when interacting with a product or service.</p>
                </div>
              </div>    
            </div> 

         </div>
</section> -->



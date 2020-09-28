<?php
$records=$data->ListBooks();
?>
  <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title">
          <span>book's</span>
          <h2>Book's</h2>
          <p>
           Maybe it's useful to you, I would like to recommend some books that have inspired me.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">View</li>
              <li data-filter=".filter-web">Hide</li>
            </ul>
          </div>
        </div>
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php
              if(count($records)>0){
              for($i=0;$i<count($records);$i++){?>        
            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <figure>
                  <img src="<?php echo UrlServer?>/FrontEnd/Resources/img/Books/<?php echo $records[$i]["ImgFront"];?>" class="img-fluid">
                  <a href="<?php echo UrlServer?>/FrontEnd/Resources/img/Books/<?php echo $records[$i]["ImgBack"];?>" data-lightbox="portfolio" class="link-preview venobox" title="<?php echo $records[$i]["Thematic"];?>"><i class="icofont-eye-alt"></i></a>
                </figure>
                <div class="portfolio-info">
                  <h4><?php echo $records[$i]["Thematic"];?></h4>
                  <p>by <?php echo $records[$i]["Author"];?></p>
                </div>
              </div>
            </div>
            <?php
            }
          }
        ?>
    </div>
   </div>
</section>
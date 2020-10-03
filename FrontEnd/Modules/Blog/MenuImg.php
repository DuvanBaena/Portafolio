<?php
include __DIR__ . '../../../../BackEnd/Model/Bridgedb.php';
$data=new BaseDatos;
$records=$data->ListBlogs();
?>
  <section class="news-grid grid">
        <div class="container">
          <div class="row">
          <?php
              if(count($records)>0){
              for($i=0;$i<count($records);$i++){?>  
            <div class="col-md-4">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="<?php echo UrlServer?>/FrontEnd/Resources/img/blog/<?php echo $records[$i]["img"];?>" style="width:330px;height:330px;" class="img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="BlogSingle.php?id=<?php echo $records[$i]["IdBlog"];?>" class="category-b"><?php echo $records[$i]["Category"];?></a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                      <?php echo $records[$i]["TitleBlog"];?>                        
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b"><?php echo $records[$i]["DateCreate"];?></span>
                    </div>
                  </div>
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
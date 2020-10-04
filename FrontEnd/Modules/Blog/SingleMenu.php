<?php
if (isset($_REQUEST['id'])){
   include __DIR__ . '../../../../BackEnd/Model/Bridgedb.php';
   $data=new BaseDatos;
   $records=$data->GetBlogById($_REQUEST['id']); 
 }
?>
  <section class="news-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="news-img-box">
              <img src="../Resources/img/blog/<?php echo $records[0]['ImgBlogCover'];?>" style="width:1110px;height:474px;" class="img-fluid">
            </div>
          </div>
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="post-information">
              <ul class="list-inline text-center color-a">
                <li class="list-inline-item mr-2">
                  <strong>Author: </strong>
                  <span class="color-text-a"><?php echo $records[0]['Author'];?></span>
                </li>
                <li class="list-inline-item mr-2">
                  <strong>Category: </strong>
                  <span class="color-text-a"><?php echo $records[0]['Category'];?></span>
                </li>
                <li class="list-inline-item">
                  <strong>Date: </strong>
                  <span class="color-text-a"><?php echo $records[0]['DateCreate'];?></span>
                </li>
              </ul>
            </div>
            <div class="post-content color-text-a" >
              <p class="post-intro">
              <?php echo $records[0]['interviewBlog'];?>
              </p>
              <p>
              <?php echo $records[0]['FirstParagraph'];?>
              </p>
              <p>
              <?php echo $records[0]['SecondParagraph'];?>
              </p>
              <p>
              <?php echo $records[0]['ThreeParagraph'];?>
              </p>
              <p>
              <?php echo $records[0]['FourParagraph'];?>
              </p>

              <blockquote class="blockquote">
                <p class="mb-4"><?php echo $records[0]['ReferencePhrase'];?></p>
                <footer class="blockquote-footer">
                  <strong><?php echo $records[0]['AuthorReference'];?></strong>                  
                </footer>
              </blockquote>
            </div>
            <div class="post-footer">
              <div class="post-share">
                <span>Share: </span>
                <ul class="list-inline socials">
                  <li class="list-inline-item">
                    <a href="#">                      
                      <i class="icofont-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">                      
                      <i class="icofont-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">                      
                      <i class="icofont-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
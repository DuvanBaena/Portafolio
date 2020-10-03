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
              <img src="../Resources/img/blog/Gamificacionportada.jpg" alt="" class="img-fluid">
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
                xxxxxxxxxxem ipsum dolor sit amet, consectetur
                <strong>adipiscing</strong> elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
              </p>
              <p>
                Pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac
                lectus. Curabitur
                non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Curabitur non
                nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada.
                Quisque velit nisi.
              </p>
              <p>
                Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit
                tortor eget felis
                porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
              </p>
              <p>
                Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit
                tortor eget felis
                porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
              </p>
              <p>
                Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit
                tortor eget felis
                porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
              </p>

              <blockquote class="blockquote">
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                  <strong>Albert Vargas</strong>                  
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
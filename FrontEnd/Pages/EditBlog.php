<?php
if (isset($_REQUEST['id'])){
   include __DIR__ . '../../../BackEnd/Model/Bridgedb.php';
   $data=new BaseDatos;
   $records=$data->GetBlogById($_REQUEST['id']); 
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
   
   <!-- Favicons -->
   <link href="../Resources/img/favicon.ico" rel="icon">

  <title>Administrator</title>

  <!-- All CSS -->
  <link href="../Resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Resources/vendor/bootstrap/css/bootstrap-themev3.0.0.css" rel="stylesheet">
  <link href="../Resources/vendor/elegant/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../Resources/css/dashboard.css" rel="stylesheet">
  <link href="../Resources/vendor/elegant/css/style-responsive.css" rel="stylesheet" />
  <link href="../Resources/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../Resources/vendor/toastr/toastr.css" rel="stylesheet">
  <link href="../Resources/vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
    <!--header start-->

    <?php include __DIR__ . '../../Modules/Dashboard/MasterPages.php'; ?>

    <!-- sidebar menu end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">          
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="Dashboard.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Blog</li>
              <li><i class="fa fa-files-o"></i>Edit Blog</li>
            </ol>
          </div>
        </div>        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Edit Detail Blog
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-horizontal" id="FrmUpdateBlog" autocomplete="off">
                  <div class="form-group" style="display: none">
                      <label  class="control-label col-lg-2">Id</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="IdBlog" type="text" name="IdBlog"
                        value="<?php echo $records[0]['IdBlog'];?>" disabled>                        
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="Category" class="control-label col-lg-2">Category</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="Category" type="text" name="Category" 
                        placeholder="DevOps" value="<?php echo $records[0]['Category'];?>">
                       </div>
                    </div>   

 
                    <div class="form-group ">
                      <label for="TitleBlog" class="control-label col-lg-2">Title Blog</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="TitleBlog" type="text" name="TitleBlog" 
                        placeholder="Text about the topic" value="<?php echo $records[0]['TitleBlog'];?>">
                       </div>
                    </div>

                    <div class="form-group ">
                      <label for="Author" class="control-label col-lg-2">Athor</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="Author" type="text" name="Author" 
                        placeholder="Duvan Baena" value="<?php echo $records[0]['Author'];?>" >
                       </div>
                    </div>     
                    
                    <div class="form-group">
                      <label class="control-label col-lg-2">Img Blog</label>
                      <div class="col-lg-10">
                        <input class="form-control date"  id="ImgBlog" name="ImgBlog"
                        placeholder="JavaScript" value="<?php echo $records[0]['img'];?>">
                       </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-2">Img Blog Cover</label>
                      <div class="col-lg-10">
                        <input class="form-control date"  id="ImgBlogCover" name="ImgBlogCover"
                        placeholder="JavaScript" value="<?php echo $records[0]['ImgBlogCover'];?>">
                       </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-2">Date Create</label>
                      <div class="col-lg-10">
                        <input class="form-control date"  id="DateCreate" name="DateCreate"
                        placeholder="2020-08-30" value="<?php echo $records[0]['DateCreate'];?>">                     
                       </div>
                    </div>          
                    

                    <div class="form-group ">
                      <label for="interviewBlog" class="control-label col-lg-2">Interview Blog</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" id="interviewBlog" name="interviewBlog" 
                        placeholder="Description" rows="2">
                        </textarea>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="FirstParagraph" class="control-label col-lg-2">First Paragraph</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" id="FirstParagraph" name="FirstParagraph" 
                        placeholder="First Paragraph" rows="2">
                        </textarea>
                      </div>
                    </div> 

                    <div class="form-group ">
                      <label for="SecondParagraph" class="control-label col-lg-2">Second Paragraph</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" id="SecondParagraph" name="SecondParagraph" 
                        placeholder="Second Paragraph" rows="2">
                        </textarea>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="ThreeParagraph" class="control-label col-lg-2">Three Paragraph</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" id="ThreeParagraph" name="ThreeParagraph" 
                        placeholder="Three Paragraph" rows="2">
                        </textarea>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="FourParagraph" class="control-label col-lg-2">Four Paragraph</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" id="FourParagraph" name="FourParagraph" 
                        placeholder="Four Paragraph" rows="2">
                        </textarea>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="ReferenceParagraph" class="control-label col-lg-2">Reference phrase</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" id="ReferenceParagraph" name="ReferenceParagraph" 
                        placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.">
                        </textarea>
                      </div>
                    </div>
                   
                    <div class="form-group ">
                      <label for="Author" class="control-label col-lg-2">Author's reference</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="AuthorReference" type="Author" name="AuthorReference" 
                        placeholder="Duvan Baena" value="<?php echo $records[0]['AuthorReference'];?>">
                       </div>
                    </div> 

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">                     
                        <button type="button" class="btn btn-primary" id="BtnUpdateBlog">Save</button> 
                        <button class="btn btn-default" type="button" onclick="ReturnBlog()">Cancel</button>                       
                       </div>
                    </div>                   
                  </form>
                </div>
              </div>              
            </section>                       
          </div>
        </div>       
      </section>       
    </section>       
  </section>          
  <!-- javascripts -->
  <script src="../Resources/vendor/jquery/jquery.js"></script>
  <script src="../Resources/vendor/bootstrap/js/bootstrapv3.0.0.min.js"></script>
  <script src="../Resources/vendor/bootstrap/js/jquery.scrollTo.min.js"></script>
  <script src="../Resources/vendor/bootstrap/js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="../Resources/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="../Resources/vendor/toastr/toastr.js"></script>
  <script src="../Resources/js/scriptsDashboard.js"></script>
  <script src="../Resources/js/script.js"></script>

  <script type="text/javascript">
  document.getElementById("BtnUpdateBlog").onclick = UpdateBlog; 
  document.getElementById("interviewBlog").innerHTML="<?php echo $records[0]['interviewBlog'];?>";
  document.getElementById("FirstParagraph").innerHTML="<?php echo $records[0]['FirstParagraph'];?>";
  document.getElementById("SecondParagraph").innerHTML="<?php echo $records[0]['SecondParagraph'];?>";
  document.getElementById("ThreeParagraph").innerHTML="<?php echo $records[0]['ThreeParagraph'];?>";
  document.getElementById("FourParagraph").innerHTML="<?php echo $records[0]['ThreeParagraph'];?>";
  document.getElementById("ReferenceParagraph").innerHTML="<?php echo $records[0]['ReferencePhrase'];?>";

  </script>

  <script>
    $('#DateCreate').datepicker({
        format: 'yyyy/mm/dd',
        startDate: '-3d',
        orientation: 'bottom'
    });
    
    $('document').ready(function()
    {
    $('textarea').each(function(){
            $(this).val($(this).val().trim());
          }
        );
    });
  </script>

</body>
</html>

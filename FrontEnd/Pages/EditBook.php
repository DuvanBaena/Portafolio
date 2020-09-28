
<?php
if (isset($_REQUEST['id'])){
   include __DIR__ . '../../../BackEnd/Model/Bridgedb.php';
   $data=new BaseDatos;
   $records=$data->GetBookById($_REQUEST['id']); 
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
              <li><i class="icon_document_alt"></i>Book</li>
              <li><i class="fa fa-files-o"></i>Add Book's</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Add Book's
              </header>
              <div class="panel-body">
                <div class="form">
                  <form method="POST"  action="AddBook.php" class="form-horizontal" id="FrmUpdateBook" autocomplete="off" enctype="multipart/form-data">
                  <div class="form-group" style="display: none">
                      <label  class="control-label col-lg-2">Id</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="IdBook" type="text" name="IdBook"
                        value="<?php echo $records[0]['IdBook'];?>" disabled>                        
                      </div>
                    </div>                   
                    
                    <div class="form-group ">
                      <label for="Author" class="control-label col-lg-2">Author </label>
                      <div class="col-lg-10">
                        <input class="form-control " id="Author" type="text" name="Author"
                        placeholder="Duvan Baena" value="<?php echo $records[0]['Author'];?>">
                       </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-2">Thematic</label>
                      <div class="col-lg-10">
                        <input class="form-control date"  id="Thematic" name="Thematic"
                        placeholder="JavaScript" value="<?php echo $records[0]['Thematic'];?>">
                       </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-2">Img Front</label>
                      <div class="col-lg-10">
                        <input class="form-control date"  id="ImgFront" name="ImgFront"
                        placeholder="JavaScript" value="<?php echo $records[0]['ImgFront'];?>">
                       </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-2">Img Back</label>
                      <div class="col-lg-10">
                        <input class="form-control date"  id="ImgBack" name="ImgBack"
                        placeholder="JavaScript" value="<?php echo $records[0]['ImgBack'];?>">
                       </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button type="button" class="btn btn-primary" id="BtnUpdateBook">Save</button>
                        <button class="btn btn-default" type="button" onclick="ReturnBook()">Cancel</button>
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
    document.getElementById("BtnUpdateBook").onclick = UpdateBook;
  </script>

  <script>
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

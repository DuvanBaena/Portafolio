
<?php
 include __DIR__ . '../../../BackEnd/Model/Bridgedb.php';
$data=new BaseDatos;
if (count($_FILES)>0) $mensaje=$data->cargararchivo();
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

  <title>Form Abouth me</title>

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
              <li><i class="icon_document_alt"></i>Testimonial</li>
              <li><i class="fa fa-files-o"></i>Add Testimonials</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Add testimonial
              </header>
              <div class="panel-body">
                <div class="form">
                  <form method="POST"  action="AddTestimonial.php" class="form-horizontal" id="FrmAddTestimonial" autocomplete="off" enctype="multipart/form-data">
                    <div class="form-group ">
                      <label for="UserName" class="control-label col-lg-2">Name </label>
                      <div class="col-lg-10">
                        <input class="form-control " id="UserName" type="text" name="UserName"
                        placeholder="Duvan Baena">
                       </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-2">Position</label>
                      <div class="col-lg-10">
                        <input class="form-control date"  id="RolUserName" name="RolUserName"
                        placeholder="CEO">
                       </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-2">Img</label>
                      <div class="col-lg-10">
                        <input type="file" class="form-control date"  id="UserImg" name="archivo"
                        placeholder="img">
                       </div>
                    </div>

                    <div class="form-group ">
                      <label for="Remark" class="control-label col-lg-2">Remark</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" id="Remark" name="Remark"
                        placeholder="Remark">
                        </textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button type="button" class="btn btn-primary" id="BtnAddTestimonial">Save</button>
                        <button class="btn btn-default" type="button" onclick="ReturnTestimonial()">Cancel</button>
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
    document.getElementById("BtnAddTestimonial").onclick = AddTestimonial;
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

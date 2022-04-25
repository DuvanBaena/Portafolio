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

  <!-- Bootstrap CSS -->
  <link href="../Resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Resources/vendor/bootstrap/css/bootstrap-themev3.0.0.css" rel="stylesheet">
  <link href="../Resources/vendor/elegant/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../Resources/vendor/datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />  
  <link href="../Resources/vendor/toastr/toastr.css" rel="stylesheet">
  <link href="../Resources/css/dashboard.css" rel="stylesheet">
  <link href="../Resources/vendor/elegant/css/style-responsive.css" rel="stylesheet" />
  <link href="../Resources/vendor/icofont/icofont.min.css" rel="stylesheet">

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YW1YKY58T9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YW1YKY58T9');
</script>

</head>

<body>

  <!-- container section start -->

  <section id="container" class="">

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

    <!--header start-->

    <?php include __DIR__ . '../../Modules/Dashboard/MasterPages.php'; ?>

    <!-- sidebar menu end-->

    <section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12">          
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="Dashboard.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Certification</li>
              <li><i class="fa fa-square-o"></i>Certification Summary</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Area Certification
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-horizontal" id="FrmAddCertification" autocomplete="off">
                   <div class="form-group ">
                      <label  class="control-label col-lg-2">Code Certification</label>
                      <div class="col-lg-5">
                          <input class="form-control" id="NameCertification" name="NameCertification" placeholder="Example AZ-900">
                        </div>                 
                                            
                        <div class="col-lg-5">
                        <input type="file" class="form-control date"  id="ImgBadge" name="ImgBadge" placeholder="img">
                        </div>
                    </div>                     
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">                                            
                      <button type="button" class="btn btn-primary" id="BtnAddCertification">Save</button>                       
                        <button class="btn btn-default" type="button" onclick="ReturnCertification()">Cancel</button>
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
  <!-- container section start -->


  <!-- javascripts -->
  <script src="../Resources/vendor/jquery/jquery.js"></script>
  <script src="../Resources/vendor/bootstrap/js/bootstrapv3.0.0.min.js"></script>
  <script src="../Resources/vendor/bootstrap/js/jquery.scrollTo.min.js"></script>
  <script src="../Resources/vendor/bootstrap/js/jquery.nicescroll.js" type="text/javascript"></script>  
  <script src="../Resources/vendor/datepicker/js/bootstrap-datepicker.js"></script>
  <script src="../Resources/vendor/toastr/toastr.js"></script>
  <script src="../Resources/js/scriptsDashboard.js"></script>
  <script src="../Resources/js/script.js"></script>

  <script>  
  document.getElementById("BtnAddCertification").onclick = AddCertification;

  </script>

</body>

</html>
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

  <title>Blank</title>

  <!-- All CSS -->
  <link href="../Resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Resources/vendor/bootstrap/css/bootstrap-themev3.0.0.css" rel="stylesheet">
  <link href="../Resources/vendor/elegant/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../Resources/css/dashboard.css" rel="stylesheet">
  <link href="../Resources/vendor/elegant/css/style-responsive.css" rel="stylesheet" />
  <link href="../Resources/vendor/icofont/icofont.min.css" rel="stylesheet">
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

    <?php include __DIR__ . '../../Modules/Dashboard/MasterPages.php'; ?>

    <!-- sidebar menu end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> Version</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="Dashboard.php">Home</a></li>
              <li><i class="fa fa-bars"></i>version</li>
              <li><i class="fa fa-square-o"></i>Version Detail</li>
            </ol>
         
          <div class="row">
            <div class="col-lg-12">            
              <a class="btn btn-success" href="AddVersion.php"><i class="icofont-save"></i></a>                 
            </div>
          </div>
          </br>  

          <div class="row">
           <div class="col-lg-12">
            <section class="panel">
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icofont-listing-number"></i>#</th>
                    <th><i class="icofont-id"></i>Version Code</th>
                    <th><i class="icofont-file-document"></i>Comment</th>
                    <th><i class="icofont-calendar"></i>Date</th>    
                    <th><i class="icofont-options"></i>Option</th>  
                  </tr>
                  <tr>
                  <td>1</td>
                    <td>0.1.0.20200809</td>
                    <td>Fix the bug loggin </td>
                    <td>2020/08/09</td>
                    <td>
                      <div class="btn-group">                         
                        <a class="btn btn-warning" href="#" title="Edit"><i class="icofont-ui-edit"></i></a>
                        <a class="btn btn-danger" href="#" title="Delete"><i class="icofont-garbage"></i></a>
                     </div>
                    </td>
                  </tr>         
                </tbody>
              </table>
            </section>
          </div>
         </div>

       </div>
      </div>
    </section>
    <!--main content end-->
  </section>

  <!-- javascripts -->
  <script src="../Resources/vendor/jquery/jquery.js"></script>
  <script src="../Resources/vendor/bootstrap/js/bootstrapv3.0.0.min.js"></script>
  <script src="../Resources/vendor/bootstrap/js/jquery.scrollTo.min.js"></script>
  <script src="../Resources/vendor/bootstrap/js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="../Resources/js/scriptsDashboard.js"></script>



</body>

</html>

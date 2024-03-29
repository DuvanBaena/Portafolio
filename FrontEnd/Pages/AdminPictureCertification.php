<?php
include __DIR__ . '../../../BackEnd/Model/Bridgedb.php';
$data=new BaseDatos;
if (isset($_REQUEST['n'])) $mensaje=$data->DeletePictureCertification();
if (count($_FILES)>0) $mensaje=$data->UploadImgCertification();
$records=$data->ListPictureCertification();
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

  <!-- Bootstrap CSS -->
  <link href="../Resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Resources/vendor/bootstrap/css/bootstrap-themev3.0.0.css" rel="stylesheet">
  <link href="../Resources/vendor/elegant/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../Resources/vendor/DataTable/css/datatables.min.css" rel="stylesheet" />
  <link href="../Resources/vendor/datepicker/css/bootstrap-datepicker.css" rel="stylesheet" /> 
  <link href="../Resources/vendor/toastr/toastr.css" rel="stylesheet">
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

    <section id="main-content">
      <section class="wrapper">
        <div class="row">
        <div id="loader-wrapper" style="display: none">
            <div id="loader"></div>   
          </div>
          <div id="preloader"></div>
          <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a> 
          <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa fa-bars"></i><?php 
            if (isset($mensaje)) echo $mensaje;
          ?></h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="Dashboard.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Certification</li>
              <li><i class="fa fa-square-o"></i>Certification Img Detail</li>
            </ol>
          </div>          
        </div>
        <div class="row">
            <div class="col-lg-12">            
            <a onclick="document.getElementById('InputFile').style.display=''" class="btn btn-warning te"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Upload File</a>
            <div id="InputFile" style="display:none">
              <div>
                <form method="POST" action="AdminPictureCertification.php" enctype="multipart/form-data" class="form-inline">
                <div class="form-group">                  
                  <input type="file" class="form-control" name="archivo">
                </div>
                <button type="submit" class="btn btn-primary mx-sm-2 mb-1">Send Img</button>
                </form>    
              </div>            
           </div>
          </div>
        </div>    
			  </br> 
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
            </br>
              <table class="table table-striped table-advance table-hover" id="tableDetail">
              <thead>     
                  <tr class="text-center">
                    <th><i class="icofont-listing-number"></i> #</th>
                    <th><i class="icofont-picture"></i> Img</th>
                    <th><i class="icofont-key"></i> Name</th>
                    <th><i class="icofont-picture"></i> Size</th>    
                    <th><i class="icofont-picture"></i> Type</th>  
                    <th><i class="icofont-options"></i> Option</th>  
                  </tr>
              </thead>           
              <tbody>       
                <?php
                if(count($records)>0){
                 for($i=0;$i<count($records);$i++){ ?>
                  <tr>                                    
                    <td><?php echo $i+1;?></td> 
                    <td><?php echo "<img src='../../FrontEnd/Resources/img/Certification/".$records[$i]["nombre"]."' width=80>";?></td>            
                    <td><?php echo $records[$i]["nombre"];?></td>
                    <td><?php echo $records[$i]["tamano"];?></td> 
                    <td><?php echo $records[$i]["tipo"];?></td> 
                                       
                    <td>
                      <div class="btn-group">                         
                        <a class="btn btn-primary" href="../../BackEnd/Model/DownLoadFileCertification.php?n=<?php echo $records[$i]["nombre"];?>" title="DownLoad"><i class="icofont-download"></i></a>
                        <a class="btn btn-danger" href="AdminPictureCertification.php?n=<?php echo $records[$i]["nombre"];?>" title="Delete"  id="BtnDelete"><i class="icofont-garbage"></i></a>
                      </div>
                    </td>
                  </tr> 
                  <?php 
                    }
                  }
                ?>
                </tbody>
              </table>
              
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
  <script src="../Resources/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="../Resources/vendor/DataTable/js/datatables.min.js" type="text/javascript"></script>
  <script src="../Resources/vendor/toastr/toastr.js"></script> 
  <script src="../Resources/js/scriptsDashboard.js"></script>
  <script src="../Resources/js/script.js"></script>

<script type="text/javascript"> 
    $(document).ready(function() {
      $('#tableDetail').DataTable( {
        "paging":   true,
        "ordering": true,
        "info":     true,
        "searching": true
       } ); 
    });  
</script>
</body>

</html>





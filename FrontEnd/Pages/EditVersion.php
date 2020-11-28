<?php
if (isset($_REQUEST['id'])){
   include __DIR__ . '../../../BackEnd/Model/Bridgedb.php';
   $data=new BaseDatos;
   $records=$data->GetById($_REQUEST['id']); 
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

  <!-- Bootstrap CSS -->
  <link href="../Resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Resources/vendor/bootstrap/css/bootstrap-themev3.0.0.css" rel="stylesheet">
  <link href="../Resources/vendor/elegant/css/elegant-icons-style.css" rel="stylesheet" />
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
          <div class="col-lg-12">          
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="Dashboard.php">Home</a></li>
              <li><i class="fa fa-bars"></i>version</li>
              <li><i class="fa fa-files-o"></i>Edit Version</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Add Detail Version
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-horizontal" id="EditFrmVersion">
                  <div class="form-group ">
                      <label  class="control-label col-lg-2">Version id</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="VersionId" type="text" name="VersionId"
                         value="<?php echo $records[0]['VersionId'];?>" disabled>
                      </div>
                    </div>  
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Version Code</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="versionCode" type="text" name="versionCode" 
                        placeholder="1.2.15.270920" value="<?php echo $records[0]['VersionCode'];?>">
                      </div>
                    </div>        
                    <div class="form-group ">
                      <label class="control-label col-lg-2">Version Date</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="VersionDate" name="VersionDate"  
                        placeholder="2020-08-30" value="<?php echo $records[0]['VersionDate'];?>">
                      </div>
                    </div>               
                    
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Version Comment</label>
                      <div class="col-lg-10">                 
                        <textarea class="form-control" id="VersionComment" name="VersionComment" 
                        placeholder="Descripcion">
                        </textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">                                            
                      <button type="button" class="btn btn-primary" id="BtnAUpdateVersion">Save</button>                       
                        <button class="btn btn-default" type="button" onclick="ReturnIndexVersion()">Cancel</button>
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
  <script src="../Resources/vendor/toastr/toastr.js"></script>
  <script src="../Resources/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="../Resources/js/scriptsDashboard.js"></script>
  <script src="../Resources/js/script.js"></script>

  <script>
  document.getElementById("VersionComment").innerHTML="<?php echo $records[0]['VersionComment'];?>";
  document.getElementById("BtnAUpdateVersion").onclick = UpdateVersion;
 
  $('#VersionDate').datepicker({
        format: 'yyyy/mm/dd',
        startDate: '-3d',
        orientation: 'bottom'
    });
  </script>
</body>

</html>
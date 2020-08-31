<?php
if (isset($_REQUEST['id'])){
   include __DIR__ . '../../../BackEnd/Model/Bridgedb.php';
   $data=new BaseDatos;
   $records=$data->GetInfoSumaryById($_REQUEST['id']); 
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
              <li><i class="icon_document_alt"></i>Sumary</li>
              <li><i class="fa fa-files-o"></i>Edit Sumary</li>
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
                  <form class="form-horizontal" id="FrmEditSummary">
                  <div class="form-group ">
                      <label  class="control-label col-lg-2">Summary id</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="idSummary" type="text" name="idSummary"
                         value="<?php echo $records[0]['idSummary'];?>" disabled>
                      </div>
                    </div>  
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Title</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="Title" type="text" name="Title" 
                         value="<?php echo $records[0]['Title'];?>">
                      </div>
                    </div>                    
                
                    <div class="form-group">
                      <label class="control-label col-lg-2">Start Year</label>
                      <div class="col-lg-10">
                        <input class="form-control date"  type= "text" id="StartYear" name="StartYear" 
                        value="<?php echo $records[0]['StartYear'];?>">
                      </div>
                    </div> 

                    <div class="form-group">
                      <label class="control-label col-lg-2">Final Year</label>
                      <div class="col-lg-10">
                        <input class="form-control date"  id="FinalYear" name="FinalYear" 
                        value="<?php echo $records[0]['FinalYear'];?>">
                      </div>
                    </div> 

                    <div class="form-group ">
                      <label  class="control-label col-lg-2">School</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="School" type="text"  name="School" 
                         value="<?php echo $records[0]['School'];?>">
                      </div>
                    </div>             
                    
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Remark</label>
                      <div class="col-lg-10">                 
                        <textarea class="form-control" id="Remark" name="Remark" 
                        placeholder="descripcion">
                        </textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">                                            
                      <button type="button" class="btn btn-primary" id="BtnAUpdateSummary">Save</button>                       
                        <button class="btn btn-default" type="button" onclick="ReturnIndexSummary()">Cancel</button>
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
  <script src="../Resources/vendor/datepicker/js/bootstrap-datepicker.js"></script>
  <script src="../Resources/js/scriptsDashboard.js"></script>
  <script src="../Resources/js/script.js"></script>

  <script>
  document.getElementById("Remark").innerHTML="<?php echo $records[0]['Remark'];?>";
  document.getElementById("BtnAUpdateSummary").onclick = UpdateSummanry;
 
    $('.date').datepicker({
      format: 'yyyy',
      viewMode: "years", 
      minViewMode: "years",
			container: container,
			todayHighlight: true,
			autoclose: true,
      orientation: 'bottom'
    });
    
  </script>


</body>

</html>
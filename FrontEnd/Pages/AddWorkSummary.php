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
              <li><i class="fa fa-bars"></i>Work</li>
              <li><i class="fa fa-files-o"></i>Edit Work</li>
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
                  <form class="form-horizontal" id="FrmAddWorkSummary" autocomplete="off"> 
                    <div class="form-group">
                      <label class="control-label col-lg-2">Start Year</label>
                      <div class="col-lg-10">
                        <input class="form-control date"  id="StartYear" name="StartYear" 
                        placeholder="2020">
                      </div>
                    </div> 
                    <div class="form-group">
                      <label class="control-label col-lg-2">Final Year</label>
                      <div class="col-lg-10">
                        <input class="form-control date"  id="FinalYear" name="FinalYear" 
                        placeholder="2020">
                      </div>
                    </div>  
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Title</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="TitleWork" type="text" name="TitleWork" 
                        placeholder="Engineering Specialist">
                      </div>
                    </div>                     
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Company</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="Company" type="text" name="Company" 
                        placeholder="Microsoft">
                      </div>
                    </div>                   
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Remark Nro 1</label>
                      <div class="col-lg-10">                 
                        <textarea class="form-control" id="Remark1" name="Remark1" 
                        placeholder="Descripcion">
                        </textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Remark Nro 2</label>
                      <div class="col-lg-10">                 
                        <textarea class="form-control" id="Remark2" name="Remark2" 
                        placeholder="Descripcion">
                        </textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Remark Nro 3</label>
                      <div class="col-lg-10">                 
                        <textarea class="form-control" id="Remark3" name="Remark3" 
                        placeholder="Descripcion">
                        </textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">                                            
                      <button type="button" class="btn btn-primary" id="BtnAddWork">Save</button>                       
                        <button class="btn btn-default" type="button" onclick="ReturnWorkSummary()">Cancel</button>
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
  document.getElementsByTagName("textarea");
  // document.getElementById("Remark").innerHTML="";
  document.getElementById("BtnAddWork").onclick = AddWorkSummary;
 
  $('.date').datepicker({
      format: 'yyyy',
      viewMode: "years", 
      minViewMode: "years",
			container: container,
			todayHighlight: true,
			autoclose: true,
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
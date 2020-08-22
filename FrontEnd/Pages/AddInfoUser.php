<?php
if (isset($_REQUEST['id'])){
   include __DIR__ . '../../../BackEnd/Model/Bridgedb.php';
   $data=new BaseDatos;
   $records=$data->GetInfoUserById($_REQUEST['id']);
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
                <li><i class="icon_document_alt"></i>Version</li>
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
                  <form class="form-horizontal" id="UpdateUserInfo">
                  <div class="form-group ">
                      <label  class="control-label col-lg-2">Version id</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="UserID" type="text" name="UserID"
                         value="<?php echo $records[0]['UserID'];?>" disabled>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Name</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="UserName" type="text" name="UserName"
                         value="<?php echo $records[0]['UserName'];?>">
                      </div>
                    </div>
                    <div class="form-group ">
                      <label class="control-label col-lg-2">Last Name</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="userLastName" name="userLastName"
                        value="<?php echo $records[0]['UserLastName'];?>">
                      </div>
                    </div>
                    <div class="form-group ">
                      <label class="control-label col-lg-2">Email</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="UserEmail" name="UserEmail"
                        value="<?php echo $records[0]['UserEmail'];?>">
                      </div>
                    </div>

                    <div class="form-group ">
                      <label class="control-label col-lg-2">Number Phone</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="UserPhone" name="UserPhone"  type="tel"
                        value="<?php echo $records[0]['UserPhone'];?>">
                      </div>
                    </div>

                    <div class="form-group ">
                      <label class="control-label col-lg-2">City</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="UserCity" name="UserCity"
                        value="<?php echo $records[0]['UserCity'];?>">
                      </div>
                    </div>

                   <div class="form-group ">
                      <label class="control-label col-lg-2">Age</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="UserAge" name="UserAge" type="number"  min="0" max="100"
                        value="<?php echo $records[0]['UserAge'];?>">
                      </div>
                    </div>

                    <div class="form-group ">
                      <label class="control-label col-lg-2">Degree</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="UserDegree" name="UserDegree"
                        value="<?php echo $records[0]['UserDegree'];?>">
                      </div>
                    </div>

                    <div class="form-group ">
                      <label class="control-label col-lg-2">URL WebSites</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="UserURL" name="UserURL"
                        value="<?php echo $records[0]['UserURL'];?>">
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label class="control-label col-lg-2">Price Hour</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="UserHour" name="UserHour"
                        value="<?php echo $records[0]['UserHour'];?>">
                      </div>
                    </div>

                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Top Description</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" id="UserTopDescription" name="UserTopDescription"
                        placeholder="descripcion">
                        </textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Body Description</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" id="UserBodyDescription" name="UserBodyDescription"
                        placeholder="descripcion">
                        </textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Footer Description</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" id="UserFooterDescription" name="UserFooterDescription"
                        placeholder="descripcion">
                        </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                      <button type="button" class="btn btn-primary" id="BtnAUpdateUserInfo">Save</button>
                        <button class="btn btn-default" type="button" onclick="ReturnIndex()">Cancel</button>
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
  document.getElementById("UserTopDescription").innerHTML="<?php echo $records[0]['UserTopDescription'];?>";
  document.getElementById("UserBodyDescription").innerHTML="<?php echo $records[0]['UserBodyDescription'];?>";
  document.getElementById("UserFooterDescription").innerHTML="<?php echo $records[0]['UserFooterDescription'];?>";
  document.getElementById("BtnAUpdateUserInfo").onclick = UpdateUserInfo;
  </script>

</body>

</html>
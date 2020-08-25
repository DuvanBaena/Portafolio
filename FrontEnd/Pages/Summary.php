<?php
include __DIR__ . '../../../BackEnd/Model/Bridgedb.php';
$data=new BaseDatos;
//$records=$data->ListVersion();
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
          <h3 class="page-header"><i class="fa fa fa-bars"></i> Version</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="Dashboard.php">Home</a></li>
              <li><i class="fa fa-bars"></i>version</li>
              <li><i class="fa fa-square-o"></i>Version Detail</li>
            </ol>
          </div>          
        </div>
        <div class="row">
            <div class="col-lg-12">            
              <a class="btn btn-success" href="AddVersion.php"><i class="icofont-save"></i></a>  
            </div>
          </div>    
			   </br> 
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <table class="table table-striped table-advance table-hover" id="tableDetail">
              <thead>     
                    <tr>
                      <th><i class="icofont-listing-number"></i> #</th>
                      <th><i class="icofont-id"></i> Title</th>
                      <th><i class="icofont-file-document"></i> Start Year</th>
                      <th><i class="icofont-calendar"></i> Final Year</th> 
                      <th><i class="icofont-calendar"></i> School</th>   
                      <th><i class="icofont-options"></i> Option</th>  
                    </tr>
                  </thead>           
              <tbody>
                  <tr>                                    
                    <td>2</td>            
                    <td>ENGINEERING SPECIALIST</td>
                    <td>2019</td> 
                    <td>2020</td>
                    <td>University of Medellin, Col</td>                  
                     <td>
                      <div class="btn-group">                         
                        <a class="btn btn-warning" href="EditVersion.php?id=" title="Edit"><i class="icofont-ui-edit"></i></a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#ModalDeleteVersion" title="Delete">
                        <i class="icofont-garbage"></i><span></span></a>                      
                     </div>
                    </td>                    
                  </tr> 
                  <tr>                                    
                    <td>2</td>            
                    <td>ENGINEERING SPECIALIST</td>
                    <td>2019</td> 
                    <td>2020</td>
                    <td>University of Medellin, Col</td>                  
                     <td>
                      <div class="btn-group">                         
                        <a class="btn btn-warning" href="EditVersion.php?id=" title="Edit"><i class="icofont-ui-edit"></i></a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#ModalDeleteVersion" title="Delete">
                        <i class="icofont-garbage"></i><span></span></a>                      
                     </div>
                    </td>                    
                  </tr> 
                  <td>2</td>            
                    <td>ENGINEERING SPECIALIST</td>
                    <td>2019</td> 
                    <td>2020</td>
                    <td>University of Medellin, Col</td>                  
                     <td>
                      <div class="btn-group">                         
                        <a class="btn btn-warning" href="EditVersion.php?id=" title="Edit"><i class="icofont-ui-edit"></i></a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#ModalDeleteVersion" title="Delete">
                        <i class="icofont-garbage"></i><span></span></a>                      
                     </div>
                    </td>                    
                  </tr> 
                  <td>2</td>            
                    <td>ENGINEERING SPECIALIST</td>
                    <td>2019</td> 
                    <td>2020</td>
                    <td>University of Medellin, Col</td>                  
                     <td>
                      <div class="btn-group">                         
                        <a class="btn btn-warning" href="EditVersion.php?id=" title="Edit"><i class="icofont-ui-edit"></i></a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#ModalDeleteVersion" title="Delete">
                        <i class="icofont-garbage"></i><span></span></a>                      
                     </div>
                    </td>                    
                  </tr> 
                  <td>2</td>            
                    <td>ENGINEERING SPECIALIST</td>
                    <td>2019</td> 
                    <td>2020</td>
                    <td>University of Medellin, Col</td>                  
                     <td>
                      <div class="btn-group">                         
                        <a class="btn btn-warning" href="EditVersion.php?id=" title="Edit"><i class="icofont-ui-edit"></i></a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#ModalDeleteVersion" title="Delete">
                        <i class="icofont-garbage"></i><span></span></a>                      
                     </div>
                    </td>                    
                  </tr> 

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

  <script src="../Resources/vendor/jquery/jquery.js" type="text/javascript"></script>
  <script src="../Resources/vendor/bootstrap/js/bootstrapv3.0.0.min.js" type="text/javascript"></script>
  <script src="../Resources/vendor/bootstrap/js/jquery.scrollTo.min.js" type="text/javascript"></script>
  <script src="../Resources/vendor/bootstrap/js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="../Resources/vendor/datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
  <script src="../Resources/vendor/toastr/toastr.js" type="text/javascript"></script>
  <script src="../Resources/vendor/DataTable/js/datatables.min.js" type="text/javascript"></script>
  <script src="../Resources/js/scriptsDashboard.js" type="text/javascript"></script>
  <script src="../Resources/js/script.js" type="text/javascript"></script>

  

  <!-- <script type="text/javascript"> 
    function btnEliminar(id){
      if(confirm("¿Seguro desea Eliminar el Registro?")){
          Eliminar(id);
       }
    }  
</script> -->
<script type="text/javascript"> 
    function btnEliminar(id){
      {
          Eliminar(id);
       }
    } 
</script>

<script type="text/javascript"> 
    $(document).ready(function() {
      $('#tableDetail').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false
       } ); 
    });  
</script>

</body>

</html>



<div class="modal fade" id="ModalDeleteVersion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form name="delete_product" id="delete_product">
        <div class="modal-body">					
          <p>¿Seguro que quieres eliminar este registro?</p>
          <p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>          
        </div>
        <div class="modal-footer">           
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar"> 
          <button type="button" class="btn btn-danger" onclick="btnEliminar(<?php echo $records[0]['VersionId'];?>)"> <i class="icofont-garbage" aria-hidden="true"></i> Eliminar</button>         
        </div>
      </form>
    </div> 
  </div>
 </div>
<div>



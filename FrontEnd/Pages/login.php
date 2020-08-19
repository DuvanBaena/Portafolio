<?php
include __DIR__ . '../../../BackEnd/Model/Bridgedb.php';
 $data=new BaseDatos;
 $registro=$data->SlotVersion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">

  <title>Login</title>

   <!-- Favicons -->
   <link href="../Resources/img/favicon.ico" rel="icon"> 

  <!-- All CSS Files -->

  <?php include __DIR__ . '../../Modules/StylesAll.php'; ?> 

</head>

<body class="login-img3-body">
  <div class="container">
    <form class="login-form" >
      <div class="login-wrap">        
        <div class="text-center">                       
            <span class="pull-right" style="display: none" id="capa"></span> 
             <p class="login-img">
                <a href="../Home.php" class="login-img"><i class="icofont-funky-man"></i></a>
             </p>         
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icofont-headphone-alt-1"></i></span>
          <input type="text" class="form-control" id="Username" placeholder="Username@exaple.com" autofocus>
          <span class="help-block"></span>   
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icofont-monkey-face"></i></span>
          <input type="password" class="form-control" id="Password" placeholder="Password">
        </div>
        <button type="button" class="btn btn-primary btn-lg btn-block" id="btnGuardar">Guardar</button>
        <div id="capa2" style="display: none"></div> 
        <div class="text-right">  
        <?php 
          if(count($registro)>0){
            for($i=0;$i<count($registro);$i++){?>
            <span class="pull-right">Version - <?php echo $registro[$i]["VersionCode"];?></span>   
            <?php 
             }
            }
           ?>
        </div>
      </div>     
    </div>       
    </form>
  </div>

  <!-- All Files  JAvaScripts -->

  <?php include __DIR__ . '../../Modules/FilesJs.php'; ?>

  <!-- End  JAvaScripts -->

  <script type="text/javascript">
    document.getElementById("btnGuardar").onclick = login;
  </script>

</body>
</html>

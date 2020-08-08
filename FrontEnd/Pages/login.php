
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
    <form class="login-form" action="index.html">
      <div class="login-wrap">
        <p class="login-img"><i class="icofont-ui-lock"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icofont-headphone-alt-1"></i></span>
          <input type="text" class="form-control" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icofont-monkey-face"></i></span>
          <input type="password" class="form-control" placeholder="Password">
        </div>
        <!-- <a href="dashboard.html"><i class='bx bx-book-heart'></i> Test</a></li>   -->
        <!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button> -->
        <button type="button" class="btn btn-primary btn-lg btn-block" id="btnGuardar">Guardar</button>
        <div class="text-right">                       
            <span class="pull-right">Version - 0.1.0.070820</span>           
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

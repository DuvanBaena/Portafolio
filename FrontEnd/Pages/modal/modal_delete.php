
  <!-- Bootstrap CSS -->
  <link href="../../Resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../Resources/vendor/bootstrap/css/bootstrap-themev3.0.0.css" rel="stylesheet">
  <link href="../../Resources/vendor/elegant/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../../Resources/vendor/DataTable/css/datatables.min.css" rel="stylesheet" />
  <link href="../../Resources/css/dashboard.css" rel="stylesheet">
  <link href="../../Resources/vendor/elegant/css/style-responsive.css" rel="stylesheet" />
  <link href="../../Resources/vendor/icofont/icofont.min.css" rel="stylesheet">

<div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <input type="hidden" name="delete_id" id="delete_id">          
        </div>
        <div class="modal-footer">           
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">          
          <button type="button" class="btn btn-danger" > <i class="icofont-garbage" aria-hidden="true"></i> Eliminar</button>         
        </div>
      </form>
    </div> 
  </div>
 </div>
<div>

  <!-- javascripts -->
  <script src="../../Resources/vendor/jquery/jquery.js"></script>
  <script src="../../Resources/vendor/bootstrap/js/bootstrapv3.0.0.min.js"></script>
  <script src="../../Resources/vendor/bootstrap/js/jquery.scrollTo.min.js"></script>
  <script src="../../Resources/vendor/bootstrap/js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="../../Resources/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="../../Resources/vendor/DataTable/js/datatables.min.js" type="text/javascript"></script>
  <script src="../../Resources/vendor/toastr/toastr.js"></script> 
  <script src="../../Resources/js/scriptsDashboard.js"></script>
  <script src="../../Resources/js/script.js"></script>
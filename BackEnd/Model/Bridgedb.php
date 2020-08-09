<?php 

include __DIR__ . '../../Config/Connecteddb.php';

class BaseDatos extends Conexion{


    var $UsuLogin;
    var $ClaLogin;

    
    public function __construct(){
        parent:: __construct();

     if (isset($_REQUEST['Username']) && $_REQUEST['Username']<>""){
         $this->UsuLogin=$_REQUEST['Username'];
         $this->ClaLogin=$_REQUEST['Password'];

       }   

    }

 
   
    public function validaringreso(){

        $sql="SELECT * FROM tbluser ";
        $sql.=" WHERE UsuCli='".$this->UsuLogin."' ";
        $sql.=" AND ClavCli=MD5('".$this->ClaLogin."') ";
         
         if($this->conector->query($sql)){
              $resultado=$this->conector->query($sql);
             // si tiene los resultados pasan todos los campos y sus respectivos datos
             $vector=$resultado->fetch_array();
         }
         else {
 
         }
 
         return $vector;
 
     }




    }

?>
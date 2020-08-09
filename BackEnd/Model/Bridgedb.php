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
       
       
     if (isset($_REQUEST['versionCode']) && $_REQUEST['VersionDate']<>"") {

     $this->versionCode=$_REQUEST['versionCode'];
     $this->versionDate=$_REQUEST['VersionDate'];
     $this->versionComment=$_REQUEST['VersionComment'];

    } 

    } 
   
    public function validaringreso(){

        $sql="SELECT * FROM tbluser ";
        $sql.=" WHERE UserEmail='".$this->UsuLogin."' ";
        $sql.=" AND UserPassword=MD5('".$this->ClaLogin."') ";
         
         if($this->conector->query($sql)){
            $resultado=$this->conector->query($sql);            
            $vector=$resultado->fetch_array();
         }
         else {
 
         }
 
         return $vector;
 
     }

    /* En este parte ira toda la logica de la base de datos para el tema de la Version (CRUD) */
    
     public function AddVersion(){

        $sql="INSERT INTO `tblversion`(`VersionCode`, `VersionDate`, `VersionComment`) VALUES 
        (       
        '".$this->versionCode."',
        '".$this->versionDate."',  
        '". $this->versionComment."'
        )";

        if($this->conector->query($sql)){

            $mensaje="<strong>Attention</strong> the data was inserted correctly.";


        }else{

            $mensaje="Datos con problemas";
        }
       

        return $mensaje;
     } 



    }

?>
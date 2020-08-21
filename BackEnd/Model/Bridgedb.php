<?php 

include __DIR__ . '../../Config/Connecteddb.php';

class BaseDatos extends Conexion{

    var $versionId;
    var $versionDate;
    var $versionComment;
    var $versionCode;


    var $UsuLogin;
    var $ClaLogin;
 

    
    public function __construct(){
        parent:: __construct();

     if (isset($_REQUEST['Username']) && $_REQUEST['Username']<>""){
         $this->UsuLogin=$_REQUEST['Username'];
         $this->ClaLogin=$_REQUEST['Password'];

       } 
       
       
     if (isset($_REQUEST['versionCode']) && $_REQUEST['VersionComment']<>"") {
        //$this->versionId=$_REQUEST['VersionId'];   
        $this->versionDate=$_REQUEST['VersionDate'];
        $this->versionCode=$_REQUEST['versionCode'];    
        $this->versionComment=$_REQUEST['VersionComment']; 
      

    } 
           
    if (isset($_REQUEST['VersionId']) && $_REQUEST['VersionId']<>"") {

        $this->versionId=$_REQUEST['VersionId'];
      
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


     public function ListVersion(){

        $sql="SELECT * FROM `tblversion` ";        
        $vector=array();        
        if($this->conector->query($sql)){              
            $resultado=$this->conector->query($sql);           
            while($fila=$resultado->fetch_array()){
                $vector[]=$fila;
            }
        }else{

        }
        return $vector;

     }


     public function GetById($id){

        $sql="SELECT * FROM `tblversion` WHERE VersionId ='".$id."'";        
                         
        $vector=array();
        $resultado= $this->conector->query($sql);
        if (!empty($resultado)){
            while ($fila = $resultado->fetch_array()) {
                $vector[]=$fila;
                
            }
        }else{

        }
         return $vector;   

     }


     public function UpdateVersion(){                 
            
        $sql="UPDATE `tblversion` SET `VersionCode`='".$this->versionCode."',
        `VersionDate`='".$this->versionDate."',
        `VersionComment`='".$this->versionComment."'       
         WHERE VersionId = '".$this->versionId."'";
       
       if ($this->conector->query($sql)) {
           $mensaje="<strong>Attention</strong> the data was update correctly.";           
      } else {
           $mensaje="Datos con problemas";
      }
      return $mensaje;

     }


     public function DeleteVersion(){
   
        $sql=" DELETE FROM tblversion where VersionId='".$_REQUEST['id']."'";
             
         if ($this->conector->query($sql)){
             $mensaje=1;
           }else{
              $mensaje=0;
            }       
          return $mensaje;
         }


        public function SlotVersion(){            
       
        $sql="SELECT * FROM `tblversion` ORDER BY `VersionId` DESC LIMIT 1";        
        
        $vector=array();        
        if($this->conector->query($sql)){              
            $resultado=$this->conector->query($sql);           
            while($fila=$resultado->fetch_array()){
                $vector[]=$fila;
            }
        }else{
    
        }
        
        return $vector;
    
        }


    /* En este parte ira toda la logica de la base de datos para el tema de la informacion personal del usuario */



        public function ListPersonalInformation(){


            
        $sql="SELECT * FROM `tbluser` ";        
        $vector=array();        
        if($this->conector->query($sql)){              
            $resultado=$this->conector->query($sql);           
            while($fila=$resultado->fetch_array()){
                $vector[]=$fila;
            }
        }else{

        }
        return $vector;


        }
     


   }

?>
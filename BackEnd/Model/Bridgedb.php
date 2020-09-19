<?php

include __DIR__ . '../../Config/Connecteddb.php';

class BaseDatos extends Conexion{

    var $versionId;
    var $versionDate;
    var $versionComment;
    var $versionCode;
    
    var $userID;
    var $userInfoName;
    var $userLastName;
    var $userEmail;
    var $userURL;
    var $userPhone;
    var $userCity;
    var $userAge;
    var $userDegree;
    var $userHour;    
    var $userTopDescription;
    var $userBodyDescription;
    var $userFooterDescription;


    var $summaryId;
    var $summaryTitle;
    var $summaryStartYear;
    var $summaryFinalYear;
    var $summarySchool;
    var $summaryRemark;


    var $currentId;
    var $placeStudy;
    var $remark;

    var $workId;
    var $workStartYear;
    var $workFinalYear;
    var $workTitle;
    var $workCompany;
    var $workRemarkA;
    var $workRemarkB;
    var $workRemarkC;
    
    
    var $skillId;
    var $skillName;
    var $skillValue;
    var $skillCategory;
    
    
    var $testimonialId;
    var $testimonialUserName;
    var $testimonialRol;
    var $testimonialImg;
    var $testimonialRemark;


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

        if (isset($_REQUEST['UserID']) && $_REQUEST['UserID']<>"") {

            $this->userID=$_REQUEST['UserID'];
            $this->userInfoName=$_REQUEST['UserName'];
            $this->userLastName=$_REQUEST['userLastName'];  
            $this->userEmail=$_REQUEST['UserEmail']; 
            $this->userURL=$_REQUEST['UserURL'];
            $this->userPhone=$_REQUEST['UserPhone'];
            $this->userCity=$_REQUEST['UserCity'];  
            $this->userAge=$_REQUEST['UserAge']; 
            $this->userDegree=$_REQUEST['UserDegree'];
            $this->userHour=$_REQUEST['UserHour'];          
            $this->userTopDescription=$_REQUEST['UserTopDescription'];
            $this->userBodyDescription=$_REQUEST['UserBodyDescription']; 
            $this->userFooterDescription=$_REQUEST['UserFooterDescription'];     
           }


           if (isset($_REQUEST['Title']) && $_REQUEST['Title']<>"") {

            $this->summaryTitle=$_REQUEST['Title'];
            $this->summaryStartYear=$_REQUEST['StartYear'];  
            $this->summaryFinalYear=$_REQUEST['FinalYear']; 
            $this->summarySchool=$_REQUEST['School'];
            $this->summaryRemark=$_REQUEST['Remark'];
               
           }

           if (isset($_REQUEST['idSummary']) && $_REQUEST['idSummary']<>"") {

            $this->summaryId=$_REQUEST['idSummary'];

        }

        if (isset($_REQUEST['PlaceStudy']) && $_REQUEST['PlaceStudy']<>"") {

            $this->placeStudy=$_REQUEST['PlaceStudy'];
            $this->remark=$_REQUEST['Remark'];                
           }

           if (isset($_REQUEST['IdActually']) && $_REQUEST['IdActually']<>"") {

            $this->currentId=$_REQUEST['IdActually'];

        }


        if (isset($_REQUEST['TitleWork']) && $_REQUEST['TitleWork']<>"") {
            $this->workStartYear=$_REQUEST['StartYear'];
            $this->workFinalYear=$_REQUEST['FinalYear'];   
            $this->workTitle=$_REQUEST['TitleWork'];
            $this->workCompany=$_REQUEST['Company']; 
            $this->workRemarkA=$_REQUEST['Remark1'];
            $this->workRemarkB=$_REQUEST['Remark2'];   
            $this->workRemarkC=$_REQUEST['Remark3'];              
           }

           if (isset($_REQUEST['IdWork']) && $_REQUEST['IdWork']<>"") {

            $this->workId=$_REQUEST['IdWork'];

        }

        if (isset($_REQUEST['SkillName']) && $_REQUEST['SkillName']<>"") {
            $this->skillName=$_REQUEST['SkillName'];
            $this->skillValue=$_REQUEST['SkillValue']; 
            $this->skillCategory=$_REQUEST['Category'];          
            
           }

           if (isset($_REQUEST['SkillId']) && $_REQUEST['SkillId']<>"") {

            $this->skillId=$_REQUEST['SkillId'];

        }

        if (isset($_REQUEST['UserName']) && $_REQUEST['UserName']<>"") {
            $this->testimonialUserName=$_REQUEST['UserName'];
            $this->testimonialRol=$_REQUEST['RolUserName']; 
            $this->testimonialImg=$_REQUEST['UserImg'];    
            $this->testimonialRemark=$_REQUEST['Remark'];      
            
           }

           if (isset($_REQUEST['IdTestimony']) && $_REQUEST['IdTestimony']<>"") {

            $this->testimonialId=$_REQUEST['IdTestimony'];

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

    /* In this part will go all the logic of the database for the version issue. */

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

            $mensaje="Failed data";
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
           $mensaje="Failed data";
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


    /* In this part will go all the logic of the database for the subject of the user's personal information */



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


        public function GetInfoUserById($id){

            $sql="SELECT * FROM `tbluser` WHERE UserID ='".$id."'";

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


        public function UpdateInfoUser(){

            $sql="UPDATE `tbluser` SET `UserName`='".$this->userInfoName."',       
            `UserLastName`='".$this->userLastName."',
            `UserEmail`='".$this->userEmail."',
            `UserURL`='".$this->userURL."',
            `UserPhone`='".$this->userPhone."',
            `UserCity`='".$this->userCity."',
            `UserAge`='".$this->userAge."',
            `UserDegree`='".$this->userDegree."',
            `UserHour`='".$this->userHour."',
            `UserTopDescription`='".$this->userTopDescription."',
            `userBodyDescription`='".$this->userBodyDescription."',
            `UserFooterDescription`='".$this->userFooterDescription."'           
            WHERE UserID = '".$this->userID."'";
    
           if ($this->conector->query($sql)) {
               $mensaje="<strong>Attention</strong> the data was update correctly.";
          } else {
               $mensaje="Failed data";
          }
          return $mensaje;
    
         }

    /* In this part you will go all the logic of the database for the summary topic. */


          public function ListSumaryInformation(){
            $sql="SELECT * FROM `tblsummary` ";
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
   
   
        public function GetInfoSumaryById($id){

            $sql="SELECT * FROM `tblsummary` WHERE idSummary ='".$id."'";

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


        public function UpdateInfoSummary(){

            $sql="UPDATE `tblsummary` SET `Title`='".$this->summaryTitle."',       
            `StartYear`='".$this->summaryStartYear."',
            `FinalYear`='".$this->summaryFinalYear."',
            `School`='".$this->summarySchool."',            
            `Remark`='".$this->summaryRemark."'           
            WHERE idSummary = '".$this->summaryId."'";
    
           if ($this->conector->query($sql)) {
               $mensaje="<strong>Attention</strong> the data was update correctly.";
          } else {
               $mensaje="Failed data";
          }
          return $mensaje;

        }


        public function DeleteSummary(){

            $sql=" DELETE FROM tblsummary where idSummary='".$_REQUEST['id']."'";
    
             if ($this->conector->query($sql)){
                 $mensaje=1;
               }else{
                  $mensaje=0;
                }
              return $mensaje;
             }


        public function AddSummary(){

            $sql="INSERT INTO `tblsummary`(`Title`, `StartYear`, `School`, `Remark`, `FinalYear`) VALUES
            (
            '".$this->summaryTitle."',
            '".$this->summaryStartYear."',
            '".$this->summarySchool."',
            '". $this->summaryRemark."',
            '". $this->summaryFinalYear."'
            )";
    
            if($this->conector->query($sql)){    
                $mensaje="<strong>Attention</strong> the data was inserted correctly.";     
            }else{    
                $mensaje="Failed data";
            }    
            return $mensaje;
        }
          
        
        /* In this part you will go all the logic of the database for the Actually topic. */


        public function ListCurrentSumary(){
            $sql="SELECT * FROM `tblactually` ";
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

        public function AddCurrentSummary(){

            $sql="INSERT INTO `tblactually`(`PlaceStudy`, `Remark`) VALUES
            (
            '".$this->placeStudy."',
            '". $this->remark."'
            )";
    
            if($this->conector->query($sql)){    
                $mensaje="<strong>Attention</strong> the data was inserted correctly.";     
            }else{    
                $mensaje="Failed data";
            }    
            return $mensaje;
        }   


        public function GetCurrentSumaryById($id){

            $sql="SELECT * FROM `tblactually` WHERE IdActually ='".$id."'";

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

        public function UpdateCurrentSummary(){

            $sql="UPDATE `tblactually` SET `PlaceStudy`='".$this->placeStudy."',      
            `Remark`='".$this->remark."'           
            WHERE IdActually = '".$this->currentId."'";
    
           if ($this->conector->query($sql)) {
               $mensaje="<strong>Attention</strong> the data was update correctly.";
          } else {
               $mensaje="Failed data";
          }
          return $mensaje;

        }

        public function DeleteCurrentSummary(){

            $sql=" DELETE FROM tblactually where IdActually='".$_REQUEST['id']."'";
    
            if ($this->conector->query($sql)){
                $mensaje=1;
              }else{
                 $mensaje=0;
               }
             return $mensaje;

        }



         /* In this part you will go all the logic of the database for the Work. */


         public function ListWorkSumary(){

            $sql="SELECT * FROM `tblwork` ";
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


        public function AddWorkSummary(){

            $sql="INSERT INTO `tblwork`(`StartYear`, `FinalYear`, `TitleWork`, `Company`, `Remark1`, `Remark2`, `Remark3`)
             VALUES
            (
            '".$this->workStartYear."',
            '".$this->workFinalYear."',
            '".$this->workTitle."',
            '".$this->workCompany."',
            '".$this->workRemarkA."',
            '".$this->workRemarkB."',
            '".$this->workRemarkC."'
            )";
    
            if($this->conector->query($sql)){    
                $mensaje="<strong>Attention</strong> the data was inserted correctly.";     
            }else{    
                $mensaje="Failed data";
            }    
            return $mensaje;


        }

        public function GetWorkById($id){

            $sql="SELECT * FROM `tblwork` WHERE IdWork ='".$id."'";

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


        public function UpdateWorkSummary(){

            $sql="UPDATE `tblwork` SET `Remark1`='".$this->workRemarkA."',  
            `Company`='".$this->workCompany."',
            `StartYear`='".$this->workStartYear."',
            `FinalYear`='".$this->workFinalYear."',
            `TitleWork`='".$this->workTitle."',           
            `Remark2`='".$this->workRemarkB."',   
            `Remark3`='".$this->workRemarkC."'           
             WHERE IdWork = '".$this->workId."'";
    
           if ($this->conector->query($sql)) {
               $mensaje="<strong>Attention</strong> the data was update correctly.";
          } else {
               $mensaje="Failed data";
          }
          return $mensaje;

        }

        public function DeleteWorkSummary(){

            $sql=" DELETE FROM tblwork where IdWork='".$_REQUEST['id']."'";
    
            if ($this->conector->query($sql)){
                $mensaje=1;
              }else{
                 $mensaje=0;
               }
             return $mensaje;
        }
        

     /* In this part you will go all the logic of the database for Skill. */


     public function ListSkillSumary(){

        $sql="SELECT * FROM `tblskill` ";
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


     public function ListSkillBackEndSumary(){
        $sql="SELECT * FROM `tblskill`        
        WHERE Category = 'BackEnd'";
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


     public function ListSkillFrontEndSumary(){
        $sql="SELECT * FROM `tblskill`        
        WHERE Category = 'FrontEnd'";
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

     public function AddSkillSummary(){

        $sql="INSERT INTO `tblskill`(`SkillName`, `SkillValue`,`Category`)
         VALUES
        (
        '".$this->skillName."',
        '".$this->skillValue."',
        '".$this->skillCategory."'
        )";

        if($this->conector->query($sql)){    
            $mensaje="<strong>Attention</strong> the data was inserted correctly.";     
        }else{    
            $mensaje="Failed data";
        }    
        return $mensaje;

        }

        public function GetInfoSkillById($id){

            $sql="SELECT * FROM `tblskill` WHERE SkillId ='".$id."'";

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


        public function  UpdateSkillSummary(){

            $sql="UPDATE `tblskill` SET `SkillName`='".$this->skillName."',  
            `Category`='".$this->skillCategory."',
            `SkillValue`='".$this->skillValue."'           
             WHERE SkillId = '".$this->skillId."'";
    
           if ($this->conector->query($sql)) {
               $mensaje="<strong>Attention</strong> the data was update correctly.";
          } else {
               $mensaje="Failed data";
          }
          return $mensaje;

        }
       

        public function DeleteSkillSummary(){

            $sql=" DELETE FROM tblskill where SkillId='".$_REQUEST['id']."'";
    
            if ($this->conector->query($sql)){
                $mensaje=1;
              }else{
                 $mensaje=0;
               }
             return $mensaje;
        }

        

   /* In this part you will go all the logic of the database for Testimonial. */


        public function ListTestimonial(){

            $sql="SELECT * FROM `tbltestimony` ";
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


        public function AddTestimonialSummary(){

            $sql="INSERT INTO `tbltestimony`(`Remark`, `UserName`,`RolUserName`,`ImgUser`)
             VALUES
            (
            '".$this->testimonialRemark."',
            '".$this->testimonialUserName."',
            '".$this->testimonialRol."',
            '".$this->testimonialImg."'
            )";
    
            if($this->conector->query($sql)){    
                $mensaje="<strong>Attention</strong> the data was inserted correctly.";     
            }else{    
                $mensaje="Failed data";
            }    
            return $mensaje;
    
            }

            public function GetInfoTestimonialById($id){

                $sql="SELECT * FROM `tbltestimony` WHERE IdTestimony ='".$id."'";
    
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


            public function  UpdateTestimonialSummary(){

                $sql="UPDATE `tbltestimony` SET `Remark`='".$this->testimonialRemark."',  
                `UserName`='".$this->testimonialUserName."',
                `ImgUser`='".$this->testimonialImg."',
                `RolUserName`='".$this->testimonialRol."'           
                 WHERE IdTestimony = '".$this->testimonialId."'";
        
               if ($this->conector->query($sql)) {
                   $mensaje="<strong>Attention</strong> the data was update correctly.";
              } else {
                   $mensaje="Failed data";
              }
              return $mensaje;
    
            }
            

            public function DeleteTestimonialSummary(){

                $sql=" DELETE FROM `tbltestimony` where IdTestimony='".$_REQUEST['id']."'";
        
                if ($this->conector->query($sql)){
                    $mensaje=1;
                  }else{
                     $mensaje=0;
                   }
                 return $mensaje;
            }
            


   
    }

?>



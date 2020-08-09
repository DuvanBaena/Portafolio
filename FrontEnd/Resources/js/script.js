function login(){

    let UserName = document.getElementById("Username").value;
    let Password = document.getElementById("Password").value;

    if( UserName == null || UserName.length == 0 || /^\s+$/.test(UserName) ) {      
        toastr["info"]("Debes ingresar un usuario", "Error")       
         return false;   
      }

     else if (Password == null || Password.length == 0 || /^\s+$/.test(Password)){
        toastr["info"]("Debes ingresar una contraseña", "Error")
        $("#Password").focus();
         return false;        
     } 

     else{

        UserName=$("#Username").val();
        Password=$("#Password").val();
        let parametros = {
                     
                   "Username" : UserName,
                   "Password" : Password                       
             };


       	  $.ajax({            
            data: parametros,            
            url: "../../BackEnd/Model/Validate.Login.php",     
            type: "post",            
            beforeSend: function () {                  
                 //$("#capa").show(); // mostrar capa
                 //$("#capa").html("Un momento por favor");
              },            
            success : function (response) {
                //$("#capa").show(); 
               // $("#capa").html(response); 
    
            if (response==1)  
              {
               $("#btnGuardar").text("wait...");
               $('#btnGuardar').attr("disabled", true);
               $("#capa2").show(); 
               $("#capa2").html("<img src='../Resources/img/LOAD.gif'><br><strong>Working on the request</strong>").css("text-align", "center"); // cargar contenido
                   
                   //redireccion
                  location.href="Dashboard.php";

            }else{
               $("#capa").show(); // mostrar capa                
               txtmensaje="<strong>Invalid Username or Password</strong>";
               $("#capa").html(txtmensaje).css("text-align", "center").fadeOut(1500);;
              
                }    
    
            },
            // 3.6 cuando se presente el error
            error: function(jqXHR, textStatus, errorThrown){
                 $("#capas2").html("Se presento un problema al carga la peticion: "+textStatus+" - "+errorThrown);
            }    
    
         });    

     }

}

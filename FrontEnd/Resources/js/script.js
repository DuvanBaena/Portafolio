function Toastr(){
   toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
}








function login() {

   let UserName = document.getElementById("Username").value;
   let Password = document.getElementById("Password").value;

   if (UserName == null || UserName.length == 0 || /^\s+$/.test(UserName)) {
      toastr["info"]("Debes ingresar un usuario", "Error")
      return false;
   }

   else if (Password == null || Password.length == 0 || /^\s+$/.test(Password)) {
      toastr["info"]("Debes ingresar una contraseña", "Error")
      $("#Password").focus();
      return false;
   }

   else {

      UserName = $("#Username").val();
      Password = $("#Password").val();
      let parametros = {

         "Username": UserName,
         "Password": Password
      };


      $.ajax({
         data: parametros,
         url: "../../BackEnd/Model/Validate.Login.php",
         type: "post",
         beforeSend: function () {
         },
         success: function (response) {

            if (response == 1) {
               $("#btnGuardar").text("wait...");
               $('#btnGuardar').attr("disabled", true);
               $("#capa2").show();
               $("#capa2").html("<img src='../Resources/img/LOAD.gif'><br><strong>Working on the request</strong>").css("text-align", "center"); // cargar contenido

              
               location.href = "Dashboard.php";

            } else {
               $("#capa").show();                
               txtmensaje = "<strong>Invalid Username or Password</strong>";
               $("#capa").html(txtmensaje).css("text-align", "center").fadeOut(1500);
            }

         },
         // 3.6 cuando se presente el error
         error: function (jqXHR, textStatus, errorThrown) {
            $("#capas2").html("Se presento un problema al carga la peticion: " + textStatus + " - " + errorThrown);
         }

      });

   }

}



function AddVersion32(){
   $("span.help-block").hide();
   let versionCode = document.getElementById("versionCode").value;
   let versionDate = document.getElementById("VersionDate").value;
   let versionComment = document.getElementById("VersionComment").value;
   if (versionCode == null || versionCode.length == 0 || /^\s+$/.test(versionCode)) {
        $("#versionCode").parent().attr("class","form-group has-error has-feedback");
        $("#versionCode").parent().children("span").text("Campo requerido").show();
        //$("#versionCode").parent().append("<span class='glyphicon glyphicon-remove form-control-feedback'></span>");        
        $("#versionCode").focus();
         return false;
      }

   else if (versionDate == null || versionDate.length == 0 || /^\s+$/.test(versionDate)) { 
      $("#versionCode").parent().attr("class","form-group has-success");     
      $("#VersionDate").parent().attr("class","form-group has-error");
      $("#VersionDate").parent().children("span").text("Campo requerido").show();   
      $("#VersionDate").focus();
      return false;
   }
   else if (versionComment == null || versionComment.length == 0 || /^\s+$/.test(versionComment)) { 
      $("#VersionDate").parent().attr("class","form-group has-success");     
      $("#VersionComment").parent().attr("class","form-group has-error");
      $("#VersionComment").parent().children("span").text("Campo requerido").show();   
      $("#VersionComment").focus();
      return false;
   }
 }

function AddVersion() {
   Toastr();
   let versionCode = document.getElementById("versionCode").value;
   let versionDate = document.getElementById("VersionDate").value;
   let versionComment = document.getElementById("VersionComment").value;

   if (versionCode == null || versionCode.length == 0 || /^\s+$/.test(versionCode)) {
      toastr["error"]("Debes ingresar un versionCode", "Error")
      $("#versionCode").focus();
      return false;
   }

   else if (versionDate == null || versionDate.length == 0 || /^\s+$/.test(versionDate)) {
      toastr["error"]("Debes ingresar una VersionDate", "Error")
      $("#VersionDate").focus();
      return false;
   }

   else if (versionComment == null || versionComment.length == 0 || /^\s+$/.test(versionComment)) {
      toastr["error"]("Debes ingresar una VersionComment", "Error")
      $("#VersionComment").focus();
      return false;
   } else {


      versionCode = $("#versionCode").val();
      versionDate = $("#VersionDate").val();
      versionComment = $("#VersionComment").val();
      let parametros = {

         "versionCode": versionCode,
         "VersionDate": versionDate,
         "VersionComment": versionComment
      };
      $.ajax({
         data: parametros,
         url: "../../BackEnd/Model/Validate.AddVersion.php",
         type: "post",
         beforeSend: function () {

         },
         success: function (response) { 
            
            $('#versionCode').val('');
            $('#VersionDate').val('');
            $('#VersionComment').val('');
           
            toastr["success"](response)

         },

         error: function (jqXHR, textStatus, errorThrown) {
            $("#capas2").html("Se presento un problema al carga la peticion: " + textStatus + " - " + errorThrown);
         }

      });


   }

}


function UpdateVersion(){
   Toastr();
   let Max_Length = 50;
   let versionId = document.getElementById("VersionId").value;
   let versionCode = document.getElementById("versionCode").value; 
   let versionDate = document.getElementById("VersionDate").value;  
   let length = document.getElementById("VersionComment").value.length;
   
   if (length > Max_Length) {
      let alerttext = document.getElementById("VersionComment");      
      alerttext.parentNode.innerHTML = alerttext.parentNode.innerHTML + "<p style='color:red'>the max length of "+Max_Length + " characters is reached, you typed in  " + length + "characters</p>";
      $("#versionComment").focus();
      return false;
   }

   else if (length == 0) {
      toastr["error"]("Debes ingresar un comnetario", "Error")
      $("#VersionComment").focus();
      return false;

   }else {

      versionId = $("#VersionId").val();
      versionCode = $("#versionCode").val();
      versionDate = $("#VersionDate").val();
      length = $("#VersionComment").val();

      var parametros = {         
         "VersionId": versionId,
         "versionCode": versionCode,
         "VersionDate": versionDate,
         "VersionComment": length
      };
      

      $.ajax({
         data: parametros,
         url: "../../BackEnd/Model/Validate.UpdateVersion.php",
         type: "post",
         beforeSend: function () {

         },
         success: function (response) {             
           
            toastr["success"](response)
         },

         error: function (jqXHR, textStatus, errorThrown) {
            $("#capas").html("Se presento un problema al carga la peticion: " + textStatus + " - " + errorThrown);
         }
      });
   }
}

function Eliminar(id){

	var parametros = {"id": id};
     $.ajax({         
          data: parametros,        
          url: "../../BackEnd/Model/Validate.Delete.php",         
          type: "post",          
          beforeSend: function(){			           
          },         
              success: function(reponse){

               if (reponse==1){
                  
                   //alert("Registro eliminado.");
                   location.href = "Version.php";
               }else{              
                    toastr["success"]("Se produjo un error?")
                  }         
              },

          
          error: function(jqXHR, textStatus, errorThrown){
               $("#capaMsj").html("Se presento un problema al carga la peticion: "+textStatus+" - "+errorThrown);
          }

   });

}

function ReturnIndexVersion(){

   location.href="Version.php";

}
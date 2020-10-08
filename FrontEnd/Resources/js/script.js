function Toastr() {
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
               $("#capa2").html("<img src='../Resources/img/LOAD.gif'><br><strong>Working on the request</strong>").css("text-align", "center");

               function back() {
                  location.href = "Dashboard.php";
               }
               setTimeout(back, 2000);

            } else {
               $("#capa").show();
               txtmensaje = "<strong>Invalid Username or Password</strong>";
               $("#capa").html(txtmensaje).css("text-align", "center").fadeOut(1500);
            }

         },
         error: function (jqXHR, textStatus, errorThrown) {
            toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
         }

      });

   }

}



// function AddVersion32() {
//    $("span.help-block").hide();
//    let versionCode = document.getElementById("versionCode").value;
//    let versionDate = document.getElementById("VersionDate").value;
//    let versionComment = document.getElementById("VersionComment").value;
//    if (versionCode == null || versionCode.length == 0 || /^\s+$/.test(versionCode)) {
//       $("#versionCode").parent().attr("class", "form-group has-error has-feedback");
//       $("#versionCode").parent().children("span").text("Campo requerido").show();
//       //$("#versionCode").parent().append("<span class='glyphicon glyphicon-remove form-control-feedback'></span>");        
//       $("#versionCode").focus();
//       return false;
//    }

//    else if (versionDate == null || versionDate.length == 0 || /^\s+$/.test(versionDate)) {
//       $("#versionCode").parent().attr("class", "form-group has-success");
//       $("#VersionDate").parent().attr("class", "form-group has-error");
//       $("#VersionDate").parent().children("span").text("Campo requerido").show();
//       $("#VersionDate").focus();
//       return false;
//    }
//    else if (versionComment == null || versionComment.length == 0 || /^\s+$/.test(versionComment)) {
//       $("#VersionDate").parent().attr("class", "form-group has-success");
//       $("#VersionComment").parent().attr("class", "form-group has-error");
//       $("#VersionComment").parent().children("span").text("Campo requerido").show();
//       $("#VersionComment").focus();
//       return false;
//    }
// }

function AddVersion() {
   Toastr();
   let versionCode = document.getElementById("versionCode").value;
   let versionDate = document.getElementById("VersionDate").value;
   let versionComment = document.getElementById("VersionComment").value;
   let Max_Length = 50;
   let length = document.getElementById("VersionComment").value.length;



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

   else if (length > Max_Length) {
      let alerttext = document.getElementById("VersionComment");
      alerttext.parentNode.innerHTML = alerttext.parentNode.innerHTML + "<p style='color:red'>the max length of " + Max_Length + " characters is reached, you typed in  " + length + "characters</p>";
      $("#versionComment").focus();
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
            toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
         }

      });


   }

}


function UpdateVersion() {
   Toastr();
   let Max_Length = 50;
   let versionId = document.getElementById("VersionId").value;
   let versionCode = document.getElementById("versionCode").value;
   let versionDate = document.getElementById("VersionDate").value;
   let length = document.getElementById("VersionComment").value.length;

   if (length > Max_Length) {
      let alerttext = document.getElementById("VersionComment");
      alerttext.parentNode.innerHTML = alerttext.parentNode.innerHTML + "<p style='color:red'>the max length of " + Max_Length + " characters is reached, you typed in  " + length + "characters</p>";
      $("#versionComment").focus();
      return false;
   }

   else if (length == 0) {
      toastr["error"]("Debes ingresar un comnetario", "Error")
      $("#VersionComment").focus();
      return false;

   } else {

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
            toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
         }
      });
   }
}

function Eliminar(id) {
   Toastr();
   var parametros = { "id": id };
   $.ajax({
      data: parametros,
      url: "../../BackEnd/Model/Validate.Delete.php",
      type: "post",
      beforeSend: function () {
         $("#loader-wrapper").show();
      },
      success: function (reponse) {

         if (reponse == 1) {
            $("#loader").show();
            toastr["info"]("Record removed", "Thanks")
            //alert("Registro eliminado.");
            function back() {
               $("#loader").hide();
               location.href = "Version.php";
            }
            setTimeout(back, 5000);

         } else {
            toastr["success"]("There was an error?")
         }
      },


      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}




function UpdateUserInfo() {
   Toastr();

   vector = ["UserName", "userLastName", "UserEmail", "UserPhone", "UserCity", "UserAge", "UserDegree", "UserHour", "UserTopDescription", "UserBodyDescription"
      , "UserFooterDescription"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("Debes ingresar " + vector[i] + " no contienen ningún Información", "Error")
         document.getElementById(vector[i]).focus();
         return;
      }
   }

   let UserID = document.getElementById("UserID").value;
   let UserName = document.getElementById("UserName").value;
   let UserlastName = document.getElementById("userLastName").value;
   let UserEmail = document.getElementById("UserEmail").value;
   let UserPhone = document.getElementById("UserPhone").value;
   let UserCity = document.getElementById("UserCity").value;
   let UserAge = document.getElementById("UserAge").value;
   let UserDegree = document.getElementById("UserDegree").value;
   let UserHour = document.getElementById("UserHour").value;
   let UserTopDescription = document.getElementById("UserTopDescription").value;
   let UserBodyDescription = document.getElementById("UserBodyDescription").value;
   let UserFooterDescription = document.getElementById("UserFooterDescription").value;

   //let parametros = $("#UpdateUserInfo").serialize();

   UserID = $("#UserID").val();
   UserName = $("#UserName").val();
   UserlastName = $("#userLastName").val();
   UserEmail = $("#UserEmail").val();
   UserPhone = $("#UserPhone").val();
   UserCity = $("#UserCity").val();
   UserAge = $("#UserAge").val();
   UserDegree = $("#UserDegree").val();
   UserURL = $("#UserURL").val();
   UserHour = $("#UserHour").val();
   UserTopDescription = $("#UserTopDescription").val();
   UserBodyDescription = $("#UserBodyDescription").val();
   UserFooterDescription = $("#UserFooterDescription").val();

   var parametros = {
      "UserID": UserID,
      "UserName": UserName,
      "userLastName": UserlastName,
      "UserEmail": UserEmail,
      "UserURL": UserURL,
      "UserPhone": UserPhone,
      "UserCity": UserCity,
      "UserAge": UserAge,
      "UserDegree": UserDegree,
      "UserHour": UserHour,
      "UserTopDescription": UserTopDescription,
      "UserBodyDescription": UserBodyDescription,
      "UserFooterDescription": UserFooterDescription,
   };

   $.ajax({
      data: parametros,
      url: "../../BackEnd/Model/Validate.UpdateInfoUser.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {

         toastr["success"](response);
         function back() {
            location.href = "Dashboard.php";
         }
         setTimeout(back, 5000);
      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
         //$("#capaMsj").html("There was a problem loading the request: "+textStatus+" - "+errorThrown);
      }
   });

}


function AddSummanry() {
   Toastr();

   vector = ["Title", "StartYear", "School", "Remark", "FinalYear"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }


   let parameters = $("#FrmAddSummary").serialize();

   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.AddSummary.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "Summary.php";
         }
         setTimeout(back, 5000);
      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }
   });


}

function UpdateSummanry() {

   Toastr();

   vector = ["Title", "StartYear", "FinalYear", "School", "Remark"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }

   let summaryid = document.getElementById("idSummary").value;
   let summaryTitle = document.getElementById("Title").value;
   let summaryStartYear = document.getElementById("StartYear").value;
   let summaryFinalYear = document.getElementById("FinalYear").value;
   let summarySchool = document.getElementById("School").value;
   let summaryRemark = document.getElementById("Remark").value;


   summaryid = $("#idSummary").val();
   summaryTitle = $("#Title").val();
   summaryStartYear = $("#StartYear").val();
   summaryFinalYear = $("#FinalYear").val();
   summarySchool = $("#School").val();
   summaryRemark = $("#Remark").val();

   var parameters = {
      "idSummary": summaryid,
      "Title": summaryTitle,
      "StartYear": summaryStartYear,
      "FinalYear": summaryFinalYear,
      "School": summarySchool,
      "Remark": summaryRemark,
   };


   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.UpdateInfoSummary.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "Summary.php";
         }
         setTimeout(back, 5000);
      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }
   });

}


function DeleteSummary(id) {
   Toastr();
   var parametros = { "id": id };
   $.ajax({
      data: parametros,
      url: "../../BackEnd/Model/Validate.DeleteSummary.php",
      type: "post",
      beforeSend: function () {
         $("#loader-wrapper").show();
      },
      success: function (reponse) {

         if (reponse == 1) {
            $("#loader").show();
            //alert("Registro eliminado.");
            toastr["info"]("Record removed", "Thanks")
            function back() {
               $("#loader").hide();
               location.href = "Summary.php";
            }
            setTimeout(back, 5000);

         } else {
            toastr["success"]("There was an error?")
         }
      },

      error: function (jqXHR, textStatus, errorThrown) {
         $("#capaMsj").html("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}

function AddCurrentSummanry() {
   Toastr();

   vector = ["PlaceStudy", "Remark"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }

   let parameters = $("#FrmAddCurrentSummary").serialize();


   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.AddCurrentSummary.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "CurrentSummary.php";
         }
         setTimeout(back, 5000);
      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}

function UpdateCurrentSummanry() {
   Toastr();
   vector = ["PlaceStudy", "Remark"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }

   let currentsummaryid = document.getElementById("IdActually").value;

   currentsummaryid = $("#IdActually").val();

   let data = {
      "IdActually": currentsummaryid,
   };

   let parameters = $("#FrmUpdateCurrentSummary").serialize() + '&' + $.param(data);

   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.UpdateCurrentSummary.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "CurrentSummary.php";
         }
         setTimeout(back, 5000);

      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }
   });

}


function DeleteCurrentSummary(id) {
   Toastr();
   var parametros = { "id": id };
   $.ajax({
      data: parametros,
      url: "../../BackEnd/Model/Validate.DeleteCurrentSummary.php",
      type: "post",
      beforeSend: function () {
         $("#loader-wrapper").show();
      },
      success: function (reponse) {

         if (reponse == 1) {
            $("#loader").show();
            //alert("Record removed.");
            toastr["info"]("Record removed", "Thanks")
            function back() {
               $("#loader").hide();
               location.href = "CurrentSummary.php";
            }
            setTimeout(back, 5000);

         } else {
            toastr["error"]("There was an error?")
         }
      },

      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}


function AddWorkSummary() {
   Toastr();
   vector = ["StartYear", "TitleWork", "Company", "Remark1"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }

   let parameters = $("#FrmAddWorkSummary").serialize();

   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.AddWorkSummary.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "WorkSummary.php";
         }
         setTimeout(back, 5000);
      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}

function UpdateWork() {
   Toastr();
   vector = ["StartYear", "TitleWork", "Company", "Remark1"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }

   let workid = document.getElementById("IdWork").value;

   workid = $("#IdWork").val();

   let data = {
      "IdWork": workid,
   };

   let parameters = $("#FrmEditWork").serialize() + '&' + $.param(data);

   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.UpdateWorkSummary.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "WorkSummary.php";
         }
         setTimeout(back, 5000);

      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}

function DeleteWorkSummary(id) {
   Toastr();
   var parametros = { "id": id };
   $.ajax({
      data: parametros,
      url: "../../BackEnd/Model/Validate.DeleteWorkSummary.php",
      type: "post",
      beforeSend: function () {
         $("#loader-wrapper").show();
      },
      success: function (reponse) {

         if (reponse == 1) {
            $("#loader").show();
            //alert("Record removed.");
            toastr["info"]("Record removed", "Thanks")
            function back() {
               $("#loader").hide();
               location.href = "WorkSummary.php";
            }
            setTimeout(back, 5000);

         } else {
            toastr["error"]("There was an error?")
         }
      },

      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}


function AddSkillSummanry() {
   Toastr();
   vector = ["SkillName", "SkillValue"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }


   let valueSkill = document.getElementById("SkillValue").value;
   if (isNaN(valueSkill)) {
      toastr["error"]("You must enter a numeric value")
      $("#SkillValue").focus();
      $('#SkillValue').val('');
      return false;
   }

   if (document.getElementById('Category').value == "Selected") {
      alert('You must enter value');
      document.getElementById('Category').style.borderColor = "red";
      return false;
   }

   let parameters = $("#AddSkillSummary").serialize();

   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.AddSkillSummary.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "SkillSummary.php";
         }
         setTimeout(back, 5000);
      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}

function UpdatetSkillSummary() {
   Toastr();
   vector = ["SkillName", "SkillValue"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }

   let valueSkill = document.getElementById("SkillValue").value;
   if (isNaN(valueSkill)) {
      toastr["error"]("You must enter a numeric value")
      $("#SkillValue").focus();
      $('#SkillValue').val('');
      return false;
   }


   if (document.getElementById('Category').value == "Selected") {
      alert('You must enter value');
      document.getElementById('Category').style.borderColor = "red";
      return false;
   }


   let skillid = document.getElementById("SkillId").value;

   skillid = $("#SkillId").val();

   let data = {
      "SkillId": skillid,
   };

   let parameters = $("#EditSkillSummary").serialize() + '&' + $.param(data);

   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.UpdateSkillSummary.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "SkillSummary.php";
         }
         setTimeout(back, 5000);

      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}


function DeleteSkillSummary(id) {
   Toastr();
   var parametros = { "id": id };
   $.ajax({
      data: parametros,
      url: "../../BackEnd/Model/Validate.DeleteSkillSummary.php",
      type: "post",
      beforeSend: function () {
         $("#loader-wrapper").show();
      },
      success: function (reponse) {

         if (reponse == 1) {
            $("#loader").show();
            //alert("Record removed.");
            toastr["info"]("Record removed", "Thanks")
            function back() {
               $("#loader").hide();
               location.href = "SkillSummary.php";
            }
            setTimeout(back, 5000);

         } else {
            toastr["error"]("There was an error?")
         }
      },

      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}


function AddTestimonial() {
   Toastr();
   vector = ["UserName", "RolUserName", "Remark", "UserImg"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }

   let img = document.getElementById("UserImg").value;

   img = $("#UserImg").val();

   let data = {
      "UserImg": img
   };

   let parameters = $("#FrmAddTestimonial").serialize() + '&' + $.param(data);

   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.AddTestimonialSummary.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "Testimonial.php";
         }
         setTimeout(back, 5000);
      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });



}


function UpdateTestimonial() {
   Toastr();
   vector = ["UserName", "RolUserName", "Remark"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }


   let TestimonyId = document.getElementById("IdTestimony").value;

   TestimonyId = $("#IdTestimony").val();

   let data = {
      "IdTestimony": TestimonyId,
   };

   let parameters = $("#FrmEditTestimonial").serialize() + '&' + $.param(data);

   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.UpdateTestimonialSummary.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "Testimonial.php";
         }
         setTimeout(back, 5000);

      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}

function DeleteTestimonialSummary(id) {
   Toastr();
   var parametros = { "id": id };
   $.ajax({
      data: parametros,
      url: "../../BackEnd/Model/Validate.DeleteTestimonialSummary.php",
      type: "post",
      beforeSend: function () {
         $("#loader-wrapper").show();
      },
      success: function (reponse) {

         if (reponse == 1) {
            $("#loader").show();
            //alert("Record removed.");
            toastr["info"]("Record removed", "Thanks")
            function back() {
               $("#loader").hide();
               location.href = "Testimonial.php";
            }
            setTimeout(back, 5000);

         } else {
            toastr["error"]("There was an error?")
         }
      },

      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}

// function AddBook() {
//    Toastr();
//    vector = ["Author", "Thematic", "ImgFront"];
//    total = vector.length;
//    for (i = 0; i < total; i++) {
//       if (document.getElementById(vector[i]).value == "") {
//          toastr["error"]("You must enter value " + vector[i])
//          document.getElementById(vector[i]).focus();
//          return;
//       }
//    }

//    document.getElementById("FrmAddBook").submit();

//    function back() {
//       location.href = "ListBook.php";
//    }
//    setTimeout(back, 1000);

// }

function AddBook() {
   Toastr();
   vector = ["Author", "Thematic", "ImgFront"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }

   let imgFront = document.getElementById("ImgFront").value;
   let imgBack = document.getElementById("ImgBack").value;

   imgFront = $("#ImgFront").val();
   imgBack = $("#ImgBack").val();

   let data = {
      "ImgFront": imgFront,
      "ImgBack": imgBack,
   };

   let parameters = $("#FrmAddBook").serialize() + '&' + $.param(data);

   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.AddBook.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "ListBook.php";
         }
         setTimeout(back, 5000);
      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });



}




function UpdateBook() {
   Toastr();
   vector = ["Author","Thematic","ImgFront","ImgBack"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }

   let BookId = document.getElementById("IdBook").value;

   BookId = $("#IdBook").val();

   let data = {
      "IdBook": BookId,
   };

   let parameters = $("#FrmUpdateBook").serialize() + '&' + $.param(data);

   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.UpdateInfoBook.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "ListBook.php";
         }
         setTimeout(back, 5000);

      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}

function DeleteBook(id) {
   Toastr();
   var parametros = { "id": id };
   $.ajax({
      data: parametros,
      url: "../../BackEnd/Model/Validate.DeleteBook.php",
      type: "post",
      beforeSend: function () {
         $("#loader-wrapper").show();
      },
      success: function (reponse) {

         if (reponse == 1) {
            $("#loader").show();
            //alert("Record removed.");
            toastr["info"]("Record removed", "Thanks")
            function back() {
               $("#loader").hide();
               location.href = "ListBook.php";
            }
            setTimeout(back, 5000);

         } else {
            toastr["error"]("There was an error?")
         }
      },

      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}

function AddNewBlog() {
   Toastr();
   vector = ["Category","TitleBlog","Author","DateCreate","ImgBlog"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }

   let img = document.getElementById("ImgBlog").value;
   let imgBlogCover = document.getElementById("ImgBlogCover").value;

   img = $("#ImgBlog").val();
   imgBlogCover = $("#ImgBlogCover").val();

   let data = {
      "ImgBlog": img,
      "ImgBlogCover": imgBlogCover,
     
   };

   let parameters = $("#AddBlog").serialize() + '&' + $.param(data);

   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.Addblog.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "BlogList.php";
         }
         setTimeout(back, 5000);
      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });


}

function UpdateBlog() {
   Toastr();
   let Max_Length = 386;
   //let length = document.getElementById("FirstParagraph").value.length;
   let lengthFi = document.getElementById("FirstParagraph").value.length;
   let lengthSe = document.getElementById("SecondParagraph").value.length;
   let lengthTh = document.getElementById("ThreeParagraph").value.length;
   let lengthFo = document.getElementById("FourParagraph").value.length;
   let lengthRe = document.getElementById("ReferenceParagraph").value.length;
   let lengthAu = document.getElementById("AuthorReference").value.length;
   vector = ["Category","TitleBlog","Author","DateCreate","ImgBlog"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }

      else if (lengthFi > Max_Length) {
         let alerttext = document.getElementById("FirstParagraph");
         alerttext.parentNode.innerHTML = alerttext.parentNode.innerHTML + "<p style='color:red'>the max length of " + Max_Length + " characters is reached, you typed in  " + length + "characters</p>";
         $("#FirstParagraph").focus();
         return false;
      }

      else if (lengthSe > Max_Length) {
         let alerttext = document.getElementById("SecondParagraph");
         alerttext.parentNode.innerHTML = alerttext.parentNode.innerHTML + "<p style='color:red'>the max length of " + Max_Length + " characters is reached, you typed in  " + length + "characters</p>";
         $("#SecondParagraph").focus();
         return false;
      }
      else if (lengthTh > Max_Length) {
         let alerttext = document.getElementById("ThreeParagraph");
         alerttext.parentNode.innerHTML = alerttext.parentNode.innerHTML + "<p style='color:red'>the max length of " + Max_Length + " characters is reached, you typed in  " + length + "characters</p>";
         $("#ThreeParagraph").focus();
         return false;
      }
      else if (lengthFo > Max_Length) {
         let alerttext = document.getElementById("FourParagraph");
         alerttext.parentNode.innerHTML = alerttext.parentNode.innerHTML + "<p style='color:red'>the max length of " + Max_Length + " characters is reached, you typed in  " + length + "characters</p>";
         $("#FourParagraph").focus();
         return false;
      }
      else if (lengthRe > Max_Length) {
         let alerttext = document.getElementById("ReferenceParagraph");
         alerttext.parentNode.innerHTML = alerttext.parentNode.innerHTML + "<p style='color:red'>the max length of " + Max_Length + " characters is reached, you typed in  " + length + "characters</p>";
         $("#ReferenceParagraph").focus();
         return false;
      }
      else if (lengthAu > Max_Length) {
         let alerttext = document.getElementById("AuthorReference");
         alerttext.parentNode.innerHTML = alerttext.parentNode.innerHTML + "<p style='color:red'>the max length of " + Max_Length + " characters is reached, you typed in  " + length + "characters</p>";
         $("#AuthorReference").focus();
         return false;
      }
   }

   let BlogId = document.getElementById("IdBlog").value;

   BlogId = $("#IdBlog").val();

   let data = {
      "IdBlog": BlogId,
   };

   let parameters = $("#FrmUpdateBlog").serialize() + '&' + $.param(data);

   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.UpdateBlog.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "BlogList.php";
         }
         setTimeout(back, 5000);

      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });   

}


function DeleteBlog(id) {
   Toastr();
   var parametros = { "id": id };
   $.ajax({
      data: parametros,
      url: "../../BackEnd/Model/Validate.DeleteBlog.php",
      type: "post",
      beforeSend: function () {
         $("#loader-wrapper").show();
      },
      success: function (reponse) {

         if (reponse == 1) {
            $("#loader").show();
            //alert("Record removed.");
            toastr["info"]("Record removed", "Thanks")
            function back() {
               $("#loader").hide();
               location.href = "BlogList.php";
            }
            setTimeout(back, 5000);

         } else {
            toastr["error"]("There was an error?")
         }
      },

      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}

function AddInterest() {
   Toastr();
   vector = ["TechName", "TechImg"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }

   let Img = document.getElementById("TechImg").value;

   Img = $("#TechImg").val(); 

   let data = {
      "TechImg": Img,  
   };

   let parameters = $("#AddInterest").serialize() + '&' + $.param(data);

   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.Addinterest.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "InterestSummary.php";
         }
         setTimeout(back, 5000);
      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}

function UpdateInterest() {
   Toastr();
   vector = ["TechName", "TechImg"];
   total = vector.length;
   for (i = 0; i < total; i++) {
      if (document.getElementById(vector[i]).value == "") {
         toastr["error"]("You must enter value " + vector[i])
         document.getElementById(vector[i]).focus();
         return;
      }
   }

   let IdInterest = document.getElementById("InterestId").value;

   IdInterest = $("#InterestId").val(); 

   let data = {
      "InterestId": IdInterest,  
   };

   let parameters = $("#UpdateInterest").serialize() + '&' + $.param(data);

   $.ajax({
      data: parameters,
      url: "../../BackEnd/Model/Validate.UpdateInfoInterest.php",
      type: "post",
      beforeSend: function () {
      },
      success: function (response) {
         toastr["success"](response);
         function back() {
            location.href = "InterestSummary.php";
         }
         setTimeout(back, 5000);

      },
      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}

function DeleteInterest(id) {
   Toastr();
   var parametros = { "id": id };
   $.ajax({
      data: parametros,
      url: "../../BackEnd/Model/Validate.DeleteInterest.php",
      type: "post",
      beforeSend: function () {
         $("#loader-wrapper").show();
      },
      success: function (reponse) {

         if (reponse == 1) {
            $("#loader").show();
            //alert("Record removed.");
            toastr["info"]("Record removed", "Thanks")
            function back() {
               $("#loader").hide();
               location.href = "InterestSummary.php";
            }
            setTimeout(back, 5000);

         } else {
            toastr["error"]("There was an error?")
         }
      },

      error: function (jqXHR, textStatus, errorThrown) {
         toastr["error"]("There was a problem loading the request: " + textStatus + " - " + errorThrown);
      }

   });

}


function ReturnIndexVersion() {
   location.href = "Version.php";
}

function ReturnIndex() {
   location.href = "Dashboard.php";
}

function ReturnIndexSummary() {
   location.href = "Summary.php";
}

function ReturnCurrentSummary() {
   location.href = "CurrentSummary.php";
}

function ReturnWorkSummary() {
   location.href = "WorkSummary.php";
}

function ReturnSkillSummary() {
   location.href = "SkillSummary.php";
}

function ReturnTestimonial() {
   location.href = "Testimonial.php";
}

function ReturnBook() {
   location.href = "ListBook.php";
}

function ReturnBlog() {
   location.href = "BlogList.php";
}

function ReturnInterest() {
   location.href = "InterestSummary.php";
}


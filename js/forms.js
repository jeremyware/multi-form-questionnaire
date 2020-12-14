 $(document).ready(function () {


   $("#next-1").click(function (e) {
     e.preventDefault();

     if ($("#businessName").val() == '') {
       $("#businessNameError").html('* Required Field.');
       return false;
     } else if ($("#businessStreet1").val() == '') {
       $("#businessStreet1Error").html('* Required Field.');
       return false;
     } else if ($("#businessCity").val() == '') {
       $("#businessCityError").html('* Required Field.');
       return false;
     } else if ($("#businessState").val() == '') {
       $("#businessStateError").html('* Required Field.');
       return false;
     } else if ($("#businessZipecode").val() == '') {
       $("#businessZipecodeError").html('* Required Field.');
       return false;
     } else if ($("#businessNumber").val() == '') {
       $("#businessNumberError").html('* Required Field.');
       return false;
     } else if ($("#businessSite").val() == '') {
       $("#businessSiteError").html('* Required Field.');
       return false;
     } else if ($("#contactFirst").val() == '') {
       $("#contactFirstError").html('* Required Field.');
       return false;
     } else if ($("#contactLast").val() == '') {
       $("#contactLastError").html('* Required Field.');
       return false;
     } else {
       $("#second").show();
       $("#first").hide();
       $("#progressBar").css("width", "50%");
       $("#progressText").html("Step - 2");
     }


   });

   $("#next-2").click(function () {
     $("#third").show();
     $("#second").hide();
     $("#progressBar").css("width", "75%");
     $("#progressText").html("Step - 3");
   });

   $("#next-3").click(function () {
     $("#fourth").show();
     $("#third").hide();
     $("#progressBar").css("width", "100%");
     $("#progressText").html("Step - 4");
   });




   //  $("#submit").click(function (e) {

   //    e.preventDefault();
   //    // $("#productDescriptionErrorError").html('');

   //    if ($("#productDescription").val() == '') {
   //      $("#productDescriptionError").html('* Required Field.');
   //      return false;
   //    } else {
   //      $.ajax({
   //        url: 'dbh.inc.php',
   //        method: 'POST',
   //        data: $("form-data").serialize(),
   //        success: function (response) {
   //          $("#result").show();
   //          $("#result").html(response);
   //          $("form-data")[0].reset();
   //        }

   //      });
   //    }

   //  });



   $("#prev-2").click(function () {
     $("#second").hide();
     $("#first").show();
     $("#progressBar").css("width", "25%");
     $("#progressText").html("Step - 1");
   });
   $("#prev-3").click(function () {
     $("#third").hide();
     $("#second").show();
     $("#progressBar").css("width", "50%");
     $("#progressText").html("Step - 2");
   });

   $("#prev-4").click(function () {
     $("#fourth").hide();
     $("#third").show();
     $("#progressBar").css("width", "75%");
     $("#progressText").html("Step - 3");
   });

 });
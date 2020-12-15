 $(document).ready(function () {


   $("#next-1").click(function (e) {
     e.preventDefault();

     if ($("#businessName").val() == '') {
       $("#businessNameError").html('* Required Field.');
       return false;
     } else {
       $("#second").show();
       $("#first").hide();
       $("#progressBar").css("width", "50%");
       $("#progressText").html("");
     }


   });

   $("#next-2").click(function () {
     $("#third").show();
     $("#second").hide();
     $("#progressBar").css("width", "75%");
     $("#progressText").html("");
   });

   $("#next-3").click(function () {
     $("#fourth").show();
     $("#third").hide();
     $("#progressBar").css("width", "100%");
     $("#progressText").html("");
   });

   $("#next-4").click(function () {
     $("#fifth").show();
     $("#fourth").hide();
     $("#progressBar").css("width", "100%");
     $("#progressText").html("");
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
     $("#progressText").html("");
   });
   $("#prev-3").click(function () {
     $("#third").hide();
     $("#second").show();
     $("#progressBar").css("width", "50%");
     $("#progressText").html("");
   });

   $("#prev-4").click(function () {
     $("#fourth").hide();
     $("#third").show();
     $("#progressBar").css("width", "50%");
     $("#progressText").html("");
   });

   $("#prev-5").click(function () {
     $("#fifth").hide();
     $("#fourth").show();
     $("#progressBar").css("width", "75%");
     $("#progressText").html("");
   });

 });
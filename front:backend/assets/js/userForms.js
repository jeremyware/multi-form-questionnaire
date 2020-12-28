//  retail page control

$(document).ready(function () {
  $('#rtlUNaVBi').click(function () {
    $('#rtlUPq1').show();
    $("#rtlUPq2").hide();
    $("#rtlUPq3").hide();
    $("#rtlUPq4").hide();
    $("#progressBar").css("width", "15%");
  });

  $('#rtlUNavBp').click(function () {
    $('#rtlUPq2').show();
    $("#rtlUPq1").hide();
    $("#rtlUPq3").hide();
    $("#rtlUPq4").hide();
    $("#progressBar").css("width", "35%");
  });

  $('#rtlUNavOi').click(function () {
    $('#rtlUPq3').show();
    $("#rtlUPq1").hide();
    $("#rtlUPq2").hide();
    $("#rtlUPq4").hide();
    $("#progressBar").css("width", "65%");
  });

  $('#rtlUNavPi').click(function () {
    $('#rtlUPq4').show();
    $("#rtlUPq3").hide();
    $("#rtlUPq2").hide();
    $("#rtlUPq1").hide();
    $("#progressBar").css("width", "100%");
  });
});

$(document).ready(function () {


  $("#rtlUBtnN1").click(function (e) {
    e.preventDefault();

    if ($("#businessName").val() == '') {
      $("#businessNameError").html('* Required Field.');
      return false;
    } else {
      $("#rtlUPq2").show();
      $("#rtlUPq1").hide();
      $("#progressBar").css("width", "35%");
      $("#progressText").html("");
    }


  });

  $("#rtlUBtnN2").click(function () {
    $("#rtlUPq3").show();
    $("#rtlUPq2").hide();
    $("#progressBar").css("width", "65%");
    $("#progressText").html("");
  });

  $("#rtlUBtnN3").click(function () {
    $("#rtlUPq4").show();
    $("#rtlUPq3").hide();
    $("#progressBar").css("width", "100%");
    $("#progressText").html("");
  });

  $("#rtlUBtnN4").click(function () {
    $("#rtlUPq5").show();
    $("#rtlUPq4").hide();
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



  $("#rtlUBtnP2").click(function () {
    $("#rtlUPq2").hide();
    $("#rtlUPq1").show();
    $("#progressBar").css("width", "25%");
    $("#progressText").html("");
  });
  $("#rtlUBtnP3").click(function () {
    $("#rtlUPq3").hide();
    $("#rtlUPq2").show();
    $("#progressBar").css("width", "50%");
    $("#progressText").html("");
  });

  $("#rtlUBtnP4").click(function () {
    $("#rtlUPq4").hide();
    $("#rtlUPq3").show();
    $("#progressBar").css("width", "75%");
    $("#progressText").html("");
  });

  //  $("#rtlUBtnP5").click(function () {
  //    $("#rtlUpq5").hide();
  //    $("#rtlUpq4").show();
  //    $("#progressBar").css("width", "75%");
  //    $("#progressText").html("");
  //  });



  //  merchant page control




  $("#mrcUBtnN1").click(function () {

    $("#mrcUPq2").show();
    $("#mrcUPq1").hide();
    $("#progressBar").css("width", "20%");
    $("#progressText").html("");
  });


  $("#mrcUBtnN2").click(function () {
    $("#mrcUPq3").show();
    $("#mrcUPq2").hide();
    $("#progressBar").css("width", "30%");
    $("#progressText").html("");
  });

  $("#mrcUBtnN3").click(function () {
    $("#mrcUPq4").show();
    $("#mrcUPq3").hide();
    $("#progressBar").css("width", "40%");
    $("#progressText").html("");
  });

  $("#mrcUBtnN4").click(function () {
    $("#mrcUPq5").show();
    $("#mrcUPq4").hide();
    $("#progressBar").css("width", "50%");
    $("#progressText").html("");
  });

  $("#mrcUBtnN5").click(function () {
    $("#mrcUPq6").show();
    $("#mrcUPq5").hide();
    $("#progressBar").css("width", "60%");
    $("#progressText").html("");
  });

  $("#mrcUBtnN6").click(function () {
    $("#mrcUPq7").show();
    $("#mrcUPq6").hide();
    $("#progressBar").css("width", "70%");
    $("#progressText").html("");
  });

  $("#mrcUBtnN7").click(function () {
    $("#mrcUPq8").show();
    $("#mrcUPq7").hide();
    $("#progressBar").css("width", "80%");
    $("#progressText").html("");
  });

  $("#mrcUBtnN8").click(function () {
    $("#mrcUPq9").show();
    $("#mrcUPq8").hide();
    $("#progressBar").css("width", "90%");
    $("#progressText").html("");
  });

  $("#mrcUBtnN9").click(function () {
    $("#mrcUPq10").show();
    $("#mrcUPq9").hide();
    $("#progressBar").css("width", "100%");
    $("#progressText").html("");
  });

  // MERCHANT PREVIOUS

  $("#mrcUBtnP2").click(function () {
    $("#mrcUPq2").hide();
    $("#mrcUPq1").show();
    $("#progressBar").css("width", "10%");
    $("#progressText").html("");
  });
  $("#mrcUBtnP3").click(function () {
    $("#mrcUPq3").hide();
    $("#mrcUPq2").show();
    $("#progressBar").css("width", "20%");
    $("#progressText").html("");
  });

  $("#mrcUBtnP4").click(function () {
    $("#mrcUPq4").hide();
    $("#mrcUPq3").show();
    $("#progressBar").css("width", "30%");
    $("#progressText").html("");
  });

  $("#mrcUBtnP5").click(function () {
    $("#mrcUPq5").hide();
    $("#mrcUPq4").show();
    $("#progressBar").css("width", "40%");
    $("#progressText").html("");
  });

  $("#mrcUBtnP6").click(function () {
    $("#mrcUPq6").hide();
    $("#mrcUPq5").show();
    $("#progressBar").css("width", "50%");
    $("#progressText").html("");
  });
  $("#mrcUBtnP7").click(function () {
    $("#mrcUPq7").hide();
    $("#mrcUPq6").show();
    $("#progressBar").css("width", "60%");
    $("#progressText").html("");
  });

  $("#mrcUBtnP8").click(function () {
    $("#mrcUPq8").hide();
    $("#mrcUPq7").show();
    $("#progressBar").css("width", "70%");
    $("#progressText").html("");
  });

  $("#mrcUBtnP9").click(function () {
    $("#mrcUPq9").hide();
    $("#mrcUPq8").show();
    $("#progressBar").css("width", "80%");
    $("#progressText").html("");
  });

  $("#mrcUBtnP10").click(function () {
    $("#mrcUPq10").hide();
    $("#mrcUPq9").show();
    $("#progressBar").css("width", "90%");
    $("#progressText").html("");
  });
});

(function () {
  'use strict'

  var forms = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()


// Coaching page control

// $(document).ready(function () {


//   $("#next-1").click(function (e) {
//     e.preventDefault();

//     if ($("#businessName").val() == '') {
//       $("#businessNameError").html('* Required Field.');
//       return false;
//     } else {
//       $("#rtlUpq2").show();
//       $("#rtlUpq1").hide();
//       $("#progressBar").css("width", "50%");
//       $("#progressText").html("");
//     }


//   });

//   $("#next-2").click(function () {
//     $("#rtlUpq3").show();
//     $("#rtlUpq2").hide();
//     $("#progressBar").css("width", "75%");
//     $("#progressText").html("");
//   });

//   $("#next-3").click(function () {
//     $("#rtlUpq4").show();
//     $("#rtlUpq3").hide();
//     $("#progressBar").css("width", "100%");
//     $("#progressText").html("");
//   });

//   $("#next-4").click(function () {
//     $("#rtlUpq5").show();
//     $("#rtlUpq4s").hide();
//     $("#progressBar").css("width", "100%");
//     $("#progressText").html("");
//   });

//   $("#prev-2").click(function () {
//     $("#rtlUpq2").hide();
//     $("#rtlUpq1").show();
//     $("#progressBar").css("width", "25%");
//     $("#progressText").html("");
//   });
//   $("#prev-3").click(function () {
//     $("#rtlUpq3").hide();
//     $("#rtlUpq2").show();
//     $("#progressBar").css("width", "50%");
//     $("#progressText").html("");
//   });

//   $("#prev-4").click(function () {
//     $("#rtlUpq4").hide();
//     $("#rtlUpq3").show();
//     $("#progressBar").css("width", "50%");
//     $("#progressText").html("");
//   });

//   //  $("#prev-5").click(function () {
//   //    $("#rtlUpq5").hide();
//   //    $("#rtlUpq4").show();
//   //    $("#progressBar").css("width", "75%");
//   //    $("#progressText").html("");
//   //  });

// });
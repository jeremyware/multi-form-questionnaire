//  retail page control

$(document).ready(function () {
  $('#rtlNaVBi').click(function () {
    $('#rtlPq1').show();
    $("#rtlPq2").hide();
    $("#rtlPq3").hide();
    $("#rtlPq4").hide();
    $("#progressBar").css("width", "15%");
  });

  $('#rtlNavBp').click(function () {
    $('#rtlPq2').show();
    $("#rtlPq1").hide();
    $("#rtlPq3").hide();
    $("#rtlPq4").hide();
    $("#progressBar").css("width", "35%");
  });

  $('#rtlNavOi').click(function () {
    $('#rtlPq3').show();
    $("#rtlPq1").hide();
    $("#rtlPq2").hide();
    $("#rtlPq4").hide();
    $("#progressBar").css("width", "65%");
  });

  $('#rtlNavPi').click(function () {
    $('#rtlPq4').show();
    $("#rtlPq3").hide();
    $("#rtlPq2").hide();
    $("#rtlPq1").hide();
    $("#progressBar").css("width", "100%");
  });
});

$(document).ready(function () {


  $("#rtlBtnN1").click(function (e) {
    e.preventDefault();

    if ($("#businessName").val() == '') {
      $("#businessNameError").html('* Required Field.');
      return false;
    } else {
      $("#rtlPq2").show();
      $("#rtlPq1").hide();
      $("#progressBar").css("width", "35%");
      $("#progressText").html("");
    }


  });

  $("#rtlBtnN2").click(function () {
    $("#rtlPq3").show();
    $("#rtlPq2").hide();
    $("#progressBar").css("width", "65%");
    $("#progressText").html("");
  });

  $("#rtlBtnN3").click(function () {
    $("#rtlPq4").show();
    $("#rtlPq3").hide();
    $("#progressBar").css("width", "100%");
    $("#progressText").html("");
  });

  $("#rtlBtnN4").click(function () {
    $("#rtlPq5").show();
    $("#rtlPq4").hide();
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



  $("#rtlBtnP2").click(function () {
    $("#rtlPq2").hide();
    $("#rtlPq1").show();
    $("#progressBar").css("width", "25%");
    $("#progressText").html("");
  });
  $("#rtlBtnP3").click(function () {
    $("#rtlPq3").hide();
    $("#rtlPq2").show();
    $("#progressBar").css("width", "50%");
    $("#progressText").html("");
  });

  $("#rtlBtnP4").click(function () {
    $("#rtlPq4").hide();
    $("#rtlPq3").show();
    $("#progressBar").css("width", "75%");
    $("#progressText").html("");
  });

  //  $("#rtlBtnP5").click(function () {
  //    $("#rtlpq5").hide();
  //    $("#rtlpq4").show();
  //    $("#progressBar").css("width", "75%");
  //    $("#progressText").html("");
  //  });



  //  merchant page control




  $("#mrcBtnN1").click(function () {

    $("#mrcPq2").show();
    $("#mrcPq1").hide();
    $("#progressBar").css("width", "20%");
    $("#progressText").html("");
  });


  $("#mrcBtnN2").click(function () {
    $("#mrcPq3").show();
    $("#mrcPq2").hide();
    $("#progressBar").css("width", "30%");
    $("#progressText").html("");
  });

  $("#mrcBtnN3").click(function () {
    $("#mrcPq4").show();
    $("#mrcPq3").hide();
    $("#progressBar").css("width", "40%");
    $("#progressText").html("");
  });

  $("#mrcBtnN4").click(function () {
    $("#mrcPq5").show();
    $("#mrcPq4").hide();
    $("#progressBar").css("width", "50%");
    $("#progressText").html("");
  });

  $("#mrcBtnN5").click(function () {
    $("#mrcPq6").show();
    $("#mrcPq5").hide();
    $("#progressBar").css("width", "60%");
    $("#progressText").html("");
  });

  $("#mrcBtnN6").click(function () {
    $("#mrcPq7").show();
    $("#mrcPq6").hide();
    $("#progressBar").css("width", "70%");
    $("#progressText").html("");
  });

  $("#mrcBtnN7").click(function () {
    $("#mrcPq8").show();
    $("#mrcPq7").hide();
    $("#progressBar").css("width", "80%");
    $("#progressText").html("");
  });

  $("#mrcBtnN8").click(function () {
    $("#mrcPq9").show();
    $("#mrcPq8").hide();
    $("#progressBar").css("width", "90%");
    $("#progressText").html("");
  });

  $("#mrcBtnN9").click(function () {
    $("#mrcPq10").show();
    $("#mrcPq9").hide();
    $("#progressBar").css("width", "100%");
    $("#progressText").html("");
  });

  // MERCHANT PREVIOUS

  $("#mrcBtnP2").click(function () {
    $("#mrcPq2").hide();
    $("#mrcPq1").show();
    $("#progressBar").css("width", "10%");
    $("#progressText").html("");
  });
  $("#mrcBtnP3").click(function () {
    $("#mrcPq3").hide();
    $("#mrcPq2").show();
    $("#progressBar").css("width", "20%");
    $("#progressText").html("");
  });

  $("#mrcBtnP4").click(function () {
    $("#mrcPq4").hide();
    $("#mrcPq3").show();
    $("#progressBar").css("width", "30%");
    $("#progressText").html("");
  });

  $("#mrcBtnP5").click(function () {
    $("#mrcPq5").hide();
    $("#mrcPq4").show();
    $("#progressBar").css("width", "40%");
    $("#progressText").html("");
  });

  $("#mrcBtnP6").click(function () {
    $("#mrcPq6").hide();
    $("#mrcPq5").show();
    $("#progressBar").css("width", "50%");
    $("#progressText").html("");
  });
  $("#mrcBtnP7").click(function () {
    $("#mrcPq7").hide();
    $("#mrcPq6").show();
    $("#progressBar").css("width", "60%");
    $("#progressText").html("");
  });

  $("#mrcBtnP8").click(function () {
    $("#mrcPq8").hide();
    $("#mrcPq7").show();
    $("#progressBar").css("width", "70%");
    $("#progressText").html("");
  });

  $("#mrcBtnP9").click(function () {
    $("#mrcPq9").hide();
    $("#mrcPq8").show();
    $("#progressBar").css("width", "80%");
    $("#progressText").html("");
  });

  $("#mrcBtnP10").click(function () {
    $("#mrcPq10").hide();
    $("#mrcPq9").show();
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
//       $("#rtlpq2").show();
//       $("#rtlpq1").hide();
//       $("#progressBar").css("width", "50%");
//       $("#progressText").html("");
//     }


//   });

//   $("#next-2").click(function () {
//     $("#rtlpq3").show();
//     $("#rtlpq2").hide();
//     $("#progressBar").css("width", "75%");
//     $("#progressText").html("");
//   });

//   $("#next-3").click(function () {
//     $("#rtlpq4").show();
//     $("#rtlpq3").hide();
//     $("#progressBar").css("width", "100%");
//     $("#progressText").html("");
//   });

//   $("#next-4").click(function () {
//     $("#rtlpq5").show();
//     $("#rtlpq4s").hide();
//     $("#progressBar").css("width", "100%");
//     $("#progressText").html("");
//   });

//   $("#prev-2").click(function () {
//     $("#rtlpq2").hide();
//     $("#rtlpq1").show();
//     $("#progressBar").css("width", "25%");
//     $("#progressText").html("");
//   });
//   $("#prev-3").click(function () {
//     $("#rtlpq3").hide();
//     $("#rtlpq2").show();
//     $("#progressBar").css("width", "50%");
//     $("#progressText").html("");
//   });

//   $("#prev-4").click(function () {
//     $("#rtlpq4").hide();
//     $("#rtlpq3").show();
//     $("#progressBar").css("width", "50%");
//     $("#progressText").html("");
//   });

//   //  $("#prev-5").click(function () {
//   //    $("#rtlpq5").hide();
//   //    $("#rtlpq4").show();
//   //    $("#progressBar").css("width", "75%");
//   //    $("#progressText").html("");
//   //  });

// });
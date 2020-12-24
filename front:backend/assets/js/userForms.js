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
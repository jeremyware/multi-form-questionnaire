//  retail page control

$(document).ready(function () {
  $('#rtlANaVBi').click(function () {
    $('#rtlAPq1').show();
    $("#rtlAPq2").hide();
    $("#rtlAPq3").hide();
    $("#rtlAPq4").hide();
    $("#progressBar").css("width", "15%");
  });

  $('#rtlANavBp').click(function () {
    $('#rtlAPq2').show();
    $("#rtlAPq1").hide();
    $("#rtlAPq3").hide();
    $("#rtlAPq4").hide();
    $("#progressBar").css("width", "35%");
  });

  $('#rtlANavOi').click(function () {
    $('#rtlAPq3').show();
    $("#rtlAPq1").hide();
    $("#rtlAPq2").hide();
    $("#rtlAPq4").hide();
    $("#progressBar").css("width", "65%");
  });

  $('#rtlANavPi').click(function () {
    $('#rtlAPq4').show();
    $("#rtlAPq3").hide();
    $("#rtlAPq2").hide();
    $("#rtlAPq1").hide();
    $("#progressBar").css("width", "100%");
  });
});

$(document).ready(function () {


  $("#rtlABtnN1").click(function (e) {
    e.preventDefault();

    if ($("#businessName").val() == '') {
      $("#businessNameError").html('* Required Field.');
      return false;
    } else {
      $("#rtlAPq2").show();
      $("#rtlAPq1").hide();
      $("#progressBar").css("width", "35%");
      $("#progressText").html("");
    }


  });

  $("#rtlABtnN2").click(function () {
    $("#rtlAPq3").show();
    $("#rtlAPq2").hide();
    $("#progressBar").css("width", "65%");
    $("#progressText").html("");
  });

  $("#rtlABtnN3").click(function () {
    $("#rtlAPq4").show();
    $("#rtlAPq3").hide();
    $("#progressBar").css("width", "100%");
    $("#progressText").html("");
  });

  $("#rtlABtnN4").click(function () {
    $("#rtlAPq5").show();
    $("#rtlAPq4").hide();
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



  $("#rtlABtnP2").click(function () {
    $("#rtlAPq2").hide();
    $("#rtlAPq1").show();
    $("#progressBar").css("width", "25%");
    $("#progressText").html("");
  });
  $("#rtlABtnP3").click(function () {
    $("#rtlAPq3").hide();
    $("#rtlAPq2").show();
    $("#progressBar").css("width", "50%");
    $("#progressText").html("");
  });

  $("#rtlABtnP4").click(function () {
    $("#rtlAPq4").hide();
    $("#rtlAPq3").show();
    $("#progressBar").css("width", "75%");
    $("#progressText").html("");
  });

  //  $("#rtlABtnP5").click(function () {
  //    $("#rtlApq5").hide();
  //    $("#rtlApq4").show();
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
//       $("#rtlApq2").show();
//       $("#rtlApq1").hide();
//       $("#progressBar").css("width", "50%");
//       $("#progressText").html("");
//     }


//   });

//   $("#next-2").click(function () {
//     $("#rtlApq3").show();
//     $("#rtlApq2").hide();
//     $("#progressBar").css("width", "75%");
//     $("#progressText").html("");
//   });

//   $("#next-3").click(function () {
//     $("#rtlApq4").show();
//     $("#rtlApq3").hide();
//     $("#progressBar").css("width", "100%");
//     $("#progressText").html("");
//   });

//   $("#next-4").click(function () {
//     $("#rtlApq5").show();
//     $("#rtlApq4s").hide();
//     $("#progressBar").css("width", "100%");
//     $("#progressText").html("");
//   });

//   $("#prev-2").click(function () {
//     $("#rtlApq2").hide();
//     $("#rtlApq1").show();
//     $("#progressBar").css("width", "25%");
//     $("#progressText").html("");
//   });
//   $("#prev-3").click(function () {
//     $("#rtlApq3").hide();
//     $("#rtlApq2").show();
//     $("#progressBar").css("width", "50%");
//     $("#progressText").html("");
//   });

//   $("#prev-4").click(function () {
//     $("#rtlApq4").hide();
//     $("#rtlApq3").show();
//     $("#progressBar").css("width", "50%");
//     $("#progressText").html("");
//   });

//   //  $("#prev-5").click(function () {
//   //    $("#rtlApq5").hide();
//   //    $("#rtlApq4").show();
//   //    $("#progressBar").css("width", "75%");
//   //    $("#progressText").html("");
//   //  });

// });
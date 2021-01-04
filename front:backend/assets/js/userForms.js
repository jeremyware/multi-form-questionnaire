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

  // retail prev
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
  $("#mrcUPq6").css("color", "red");
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

// Merchant Side Bar

$("#mrcUBtnBi").click(function () {
  $("#mrcUPq1").show();
  $("#mrcUPq2").hide();
  $("#mrcUPq3").hide();
  $("#mrcUPq4").hide();
  $("#mrcUPq5").hide();
  $("#mrcUPq6").hide();
  $("#mrcUPq7").hide();
  $("#mrcUPq8").hide();
  $("#mrcUPq9").hide();
  $("#mrcUPq10").hide();
  $("#progressBar").css("width", "10%");
  $("#progressText").html("");
});

$("#mrcUBtnBp").click(function () {
  $("#mrcUPq2").show();
  $("#mrcUPq1").hide();
  $("#mrcUPq3").hide();
  $("#mrcUPq4").hide();
  $("#mrcUPq5").hide();
  $("#mrcUPq6").hide();
  $("#mrcUPq7").hide();
  $("#mrcUPq8").hide();
  $("#mrcUPq9").hide();
  $("#mrcUPq10").hide();
  $("#progressBar").css("width", "20%");
  $("#progressText").html("");
});

$("#mrcUBtnOo").click(function () {
  $("#mrcUPq3").show();
  $("#mrcUPq1").hide();
  $("#mrcUPq2").hide();
  $("#mrcUPq4").hide();
  $("#mrcUPq5").hide();
  $("#mrcUPq6").hide();
  $("#mrcUPq7").hide();
  $("#mrcUPq8").hide();
  $("#mrcUPq9").hide();
  $("#mrcUPq10").hide();
  $("#progressBar").css("width", "30%");
  $("#progressText").html("");
});

$("#mrcUBtnSs").click(function () {
  $("#mrcUPq4").show();
  $("#mrcUPq1").hide();
  $("#mrcUPq2").hide();
  $("#mrcUPq3").hide();
  $("#mrcUPq5").hide();
  $("#mrcUPq6").hide();
  $("#mrcUPq7").hide();
  $("#mrcUPq8").hide();
  $("#mrcUPq9").hide();
  $("#mrcUPq10").hide();
  $("#progressBar").css("width", "40%");
  $("#progressText").html("");
});

$("#mrcUBtnPi").click(function () {
  $("#mrcUPq5").show();
  $("#mrcUPq1").hide();
  $("#mrcUPq2").hide();
  $("#mrcUPq3").hide();
  $("#mrcUPq4").hide();
  $("#mrcUPq6").hide();
  $("#mrcUPq7").hide();
  $("#mrcUPq8").hide();
  $("#mrcUPq9").hide();
  $("#mrcUPq10").hide();
  $("#progressBar").css("width", "50%");
  $("#progressText").html("");
});
$("#mrcUBtnCp").click(function () {
  $("#mrcUPq6").show();
  $("#mrcUPq1").hide();
  $("#mrcUPq2").hide();
  $("#mrcUPq3").hide();
  $("#mrcUPq4").hide();
  $("#mrcUPq5").hide();
  $("#mrcUPq7").hide();
  $("#mrcUPq8").hide();
  $("#mrcUPq9").hide();
  $("#mrcUPq10").hide();
  $("#progressBar").css("width", "60%");
  $("#progressText").html("");
});

$("#mrcUBtnBa").click(function () {
  $("#mrcUPq7").show();
  $("#mrcUPq1").hide();
  $("#mrcUPq2").hide();
  $("#mrcUPq3").hide();
  $("#mrcUPq4").hide();
  $("#mrcUPq5").hide();
  $("#mrcUPq6").hide();
  $("#mrcUPq8").hide();
  $("#mrcUPq9").hide();
  $("#mrcUPq10").hide();
  $("#progressBar").css("width", "70%");
  $("#progressText").html("");
});

$("#mrcUBtnOc").click(function () {
  $("#mrcUPq8").show();
  $("#mrcUPq1").hide();
  $("#mrcUPq2").hide();
  $("#mrcUPq3").hide();
  $("#mrcUPq4").hide();
  $("#mrcUPq5").hide();
  $("#mrcUPq6").hide();
  $("#mrcUPq7").hide();
  $("#mrcUPq9").hide();
  $("#mrcUPq10").hide();
  $("#progressBar").css("width", "80%");
  $("#progressText").html("");
});

$("#mrcUBtnFt").click(function () {
  $("#mrcUPq9").show();
  $("#mrcUPq1").hide();
  $("#mrcUPq2").hide();
  $("#mrcUPq3").hide();
  $("#mrcUPq4").hide();
  $("#mrcUPq5").hide();
  $("#mrcUPq6").hide();
  $("#mrcUPq7").hide();
  $("#mrcUPq8").hide();
  $("#mrcUPq10").hide();
  $("#progressBar").css("width", "90%");
  $("#progressText").html("");
});

$("#mrcUBtnCs").click(function () {
  $("#mrcUPq10").show();
  $("#mrcUPq1").hide();
  $("#mrcUPq2").hide();
  $("#mrcUPq3").hide();
  $("#mrcUPq4").hide();
  $("#mrcUPq5").hide();
  $("#mrcUPq6").hide();
  $("#mrcUPq7").hide();
  $("#mrcUPq8").hide();
  $("#mrcUPq9").hide();
  $("#progressBar").css("width", "100%");
  $("#progressText").html("");
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


//  coaching page control

$(document).ready(function () {


  $("#cchUBtnN1").click(function (e) {
    e.preventDefault();

    if ($("#businessName").val() == '') {
      $("#businessNameError").html('* Required Field.');
      return false;
    } else {
      $("#cchUPq2").show();
      $("#cchUPq1").hide();
      $("#progressBar").css("width", "35%");
      $("#progressText").html("");
    }
  });

  $("#cchUBtnN2").click(function () {
    $("#cchUPq3").show();
    $("#cchUPq2").hide();
    $("#progressBar").css("width", "65%");
    $("#progressText").html("");
  });

  $("#cchUBtnN3").click(function () {
    $("#cchUPq4").show();
    $("#cchUPq3").hide();
    $("#progressBar").css("width", "100%");
    $("#progressText").html("");
  });

  $("#cchUBtnN4").click(function () {
    $("#cchUPq5").show();
    $("#cchUPq4").hide();
    $("#progressBar").css("width", "100%");
    $("#progressText").html("");
  });
});

// coaching prev

$("#cchUBtnP1").click(function () {
  $("#cchUPq2").hide();
  $("#cchUPq1").show();
  $("#progressBar").css("width", "25%");
  $("#progressText").html("");
});
$("#cchUBtnP2").click(function () {
  $("#cchUPq3").hide();
  $("#cchUPq2").show();
  $("#progressBar").css("width", "50%");
  $("#progressText").html("");
});

$("#cchUBtnP3").click(function () {
  $("#cchUPq4").hide();
  $("#cchUPq3").show();
  $("#progressBar").css("width", "75%");
  $("#progressText").html("");
});

$("#cchUBtnP4").click(function () {
  $("#cchUPq5").hide();
  $("#cchUPq4").show();
  $("#progressBar").css("width", "75%");
  $("#progressText").html("");
});


$(document).ready(function () {

  $('#cchUNaVBi').click(function () {
    $('#cchUPq1').show();
    $("#cchUPq2").hide();
    $("#cchUPq3").hide();
    $("#cchUPq4").hide();
    $("#cchUPq5").hide();
    $("#progressBar").css("width", "10%");
  });

  $('#cchUNavBp').click(function () {
    $('#cchUPq2').show();
    $("#cchUPq1").hide();
    $("#cchUPq3").hide();
    $("#cchUPq4").hide();
    $("#progressBar").css("width", "35%");
  });

  $('#cchUNavAi').click(function () {
    $('#cchUPq3').show();
    $("#cchUPq2").hide();
    $("#cchUPq4").hide();
    $("#cchUPq5").hide();
    $("#progressBar").css("width", "55%");
  });

  $('#cchUNavOi').click(function () {
    $('#cchUPq4').show();
    $("#cchUPq3").hide();
    $("#cchUPq5").hide();
    $("#cchUPq6").hide();
    $("#progressBar").css("width", "75%");
  });

  $('#cchUNavPi').click(function () {
    $('#cchUPq5').show();
    $("#cchUPq4").hide();
    $("#cchUPq6").hide();
    $("#cchUPq1").hide();
    $("#progressBar").css("width", "100%");
  });
});
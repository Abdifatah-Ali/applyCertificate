$(document).ready(function () {
  // sendOTP();
  function sendOTP() {
    //$(".error").html("").hide();
    var number = $("#Mobile").val();
    if ($("#Mobile").val() !== "") {
      if (number.length == 9 && number != null) {
        var input = {
          mobile_number: number,
          action: "send_otp",
        };
        $.ajax({
          url: "controller.php",
          type: "POST",
          data: input,
          success: function (response) {
            // $(".container").html(response);
            swal("info!", response, "info");
          },
        });
      } else {
        swal("warning!", "Please enter a valid number!", "warning");

        // $(".error").html("Please enter a valid number!");
        // $(".error").show();
      }
    } else {
      swal("info!", "Please enter a Mobile field!", "info");
    }
  }

  function verifyOTP() {
    //   $(".error").html("").hide();
    //   $(".success").html("").hide();
    var otp = $("#mobileOtp").val();
    var input = {
      otp: otp,
      action: "verify_otp",
    };
    if (otp.length == 6 && otp != null) {
      $.ajax({
        url: "controller.php",
        type: "POST",
        dataType: "JSON",
        data: input,
        success: function (response) {
          alert($(response.type));
          window.location.href = "profile/Profile.php";
          //   .html(response.message))
          // $("." + response.type).html(response.message);
          // $("." + response.type).show();
        },
        error: function (response) {
          alert(response);
        },
      });
    } else {
      swal("error!", "You have entered wrong OTP!", "error");

      // $(".error").html("You have entered wrong OTP.");
      // $(".error").show();
    }
  }
});

$(document).ready(function () {
  var RollNo = 0;
  var Mobile = 0;
  $("#loginForm").on("submit", function (event) {
    event.preventDefault();
    // console.log("click");

    RollNo = $("#rollno").val();
    Mobile = $("#mobile").val();

    let sendingData = {
      rollno: RollNo,
      mobile: Mobile,
      action: "checkuserData",
    };
    // console.log(RollNo);
    // console.log(Mobile);
    $.ajax({
      type: "POST",
      url: "loginapi.php",
      data: sendingData,
      dataType: "JSON",
      success: function (response) {
        // alert(response);
        let status = response["status"];
        let resultData = response.data;
        if (status) {
          console.log(resultData);
          // header("location: verifyPage.php");
          // sendOTP(Mobile);
          // window.location.href = "verifyPage.php";
          // window.location.href("profile/Profile.php");
          window.location.href = "profile/Profile.php";
        } else {
          swal("info!", resultData, "info");
          // console.log(response);
        }
      },
      error: function (response) {
        // console.log(response);
        swal("warning!", response, "warning");
      },
    });
  });
  // $("").submit(function (e) {
  //   e.preventDefault();
  // });

  function sendOTP(Mobile) {
    //$(".error").html("").hide();
    var number = Mobile;
    if (Mobile !== "") {
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
});

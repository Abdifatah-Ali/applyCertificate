$(document).ready(function () {
  // let average =
  // let id =
  let id = "";
  let name = "";

  sedingData = {
    action: "registerUser",
    rollNo: id,
    name: name,
  };

  $("#submit").on("click", function (e) {
    e.preventDefault();
    // alert("Hello Sxb");
    $.ajax({
      type: "POST",
      url: "profileapi.php",
      data: sedingData,
      dataType: "JSON",
      success: function (response) {
        status = response["status"];
        Data = response.data;
        if (status == true) {
          swal("Good job!", Data, "success");
        } else if (status == false) {
          swal("Bad Job!", Data, "error");
        } else {
          swal("Error!", Data, "error");
        }
      },
      error: function (response) {
        swal("Error!", response, "error");
      },
    });
  });

  // average = $("#average").val();
  // if (average < 60) {
  //   $("#average").css("color", "red");
  // }
});

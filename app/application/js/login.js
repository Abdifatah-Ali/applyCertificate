$(document).ready(function () {
  $("#loginForm").on("submit", function (e) {
    e.preventDefault();

    let username = $("#userName").val();
    let password = $("#password").val();

    let sendingData = {
      action: "userInfo",
      userName: username,
      password: password,
    };

    $.ajax({
      url: "../api/loginapi.php",
      dataType: "JSON",
      method: "POST",
      data: sendingData,
      success: function (data) {
        const response = data.data;
        const status = data.status;

        if (status) {
          swal("approved", response, "success");
          window.location.href = "../views/index.php";
          // window.location.href = "../views/currency.php";
        } else {
          swal("error", response, "error");

          // console.log(response);
        }
      },
      error: function (data) {
        swal("error", data, "error");

        // console.log(data);
      },
    });
  });
});

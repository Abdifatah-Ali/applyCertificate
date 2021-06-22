let userTable = $("#userTable");
// let btnAction = "Insert";
// $("#userTable").DataTable().destory();
localStorage.setItem("state", JSON.stringify("insert"));

loadData();

function clearData() {
  $("#userForm")[0].reset();
  $("#target").attr("src", "");
  $("#target").attr("src", "../../assets/images/user.png");
}

$("#userForm").on("submit", function (event) {
  event.preventDefault();
  let form_data = new FormData($("#userForm")[0]);
  form_data.append("image", $("input[type=file]")[0].files[0]);
  // formData.append("image",$('input[type=file]')[0].files[0]);

  btnAction = JSON.parse(localStorage.getItem("sate"));

  if (btnAction == "Insert") {
    form_data.append("action", "registerUser");
  } else {
    form_data.append("action", "updateUser");
  }

  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "../api/userapi.php",
    data: form_data,
    processData: false,
    contentType: false,
    success: function (data) {
      let status = data["status"];
      let response = data.data;

      if (status) {
        swal("success!", response, "success");
        // alert(response);
        $("#userModal").modal("hide");
        // $("#userForm")[0].reset();
        clearData();
        btnAction = "Insert";
        loadData();
      } else {
        // console.log(response);
        swal("error!", response, "error");
      }
    },
    error: function (data) {
      // console.log("Some Errorr");
      swal("error!", data, "error");
    },
  });
});

function loadData() {
  $("#userTable").DataTable().destroy();
  $("#userTable tbody").html("");

  // ajax
  let sendingData = {
    action: "readAllUsers",
  };

  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "../api/userapi.php",
    data: sendingData,
    success: function (data) {
      let status = data["status"];
      let response = data.data;
      let html = "";
      let tr = "";
      let td = "";
      if (status) {
        response.forEach((item) => {
          tr += "<tr>";
          for (let i in item) {
            // console.log(`${i} : ${item[i]}`);
            if (i == "userPhoto") {
              tr += `<td><img style="width:50px;height:50px;border-radius:50%;object-fit:cover;" src="../uploadImage/${item[i]}"></img></td>`;
            } else {
              tr += `<td>${item[i]}</td>`;
            }
          }
          tr += `
          <td>
             <button class="btn btn-sm btn-success update_info" infoUpdate=${item["userID"]}><i class="fa fa-edit"></i></button>&nbsp;&nbsp;<button class="btn btn-sm btn-default view_info" infoview=${item["userID"]}><i class="fa fa-eye"></i></button>&nbsp;&nbsp;<button class="btn btn-sm btn-danger delete_info" infoDelete=${item["userID"]}><i class="fa fa-trash"></i></button>&nbsp;&nbsp; </td>`;
          tr += "</tr>";
        });

        html = tr;

        $("#userTable tbody").append(html);
        $("#userTable").DataTable({ pageLength: 50 });
      } else {
        // console.log(response);
        swal("error!", response, "error");
      }
    },
    error: function (data) {
      // console.log("Some Errorr");
      swal("error!", data, "error");
    },
  });
}

// $("#userModal").on("hidden.bs.modal", function (e) {
//   $("#userModal").modal("hide");
//   $("#userForm")[0].reset();
// });

// Update
$(".table").on("click", ".update_info", function () {
  // alert("hi");

  window.location = "../views/createUser.php";
  let id = $(this).attr("infoUpdate");
  localStorage.setItem("ID", JSON.stringify(id));
});
// $(".table").on("click", ".view_info", function () {
//   // alert("hi");
//   btnAction = "Update";
//   window.location = "../views/createUser.php";
//   let id = $(this).attr("infoUpdate");
//   localStorage.setItem("ID", JSON.stringify(id));
// });

// $(".table").click(function () {
//   alert("yes");
// });
function deleteEmployee(id) {
  let sendingData = {
    action: "deleteUser",
    id: id,
  };

  $.ajax({
    url: "../api/userapi.php",
    dataType: "JSON",
    method: "POST",
    data: sendingData,
    success: function (data) {
      const response = data.data;
      const status = data.status;

      if (status) {
        // alert(response);
        swal("Poof!", response, {
          icon: "success",
        });
        // $("#userTable").DataTable().destory();
        loadData();
      } else {
        // alert(response);
        swal("error!", response, "error");
      }
    },
    error: function (data) {
      swal("error!", data, "error");
    },
  });
}

$("#userTable").on("click", "button.delete_info", function () {
  let id = $(this).attr("infoDelete");
  if (
    swal({
      title: "Are you sure to delete? this user id:" + id,
      text: "Once deleted, you will not be able to recover this user info!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        // swal("Poof! Your imaginary file has been deleted!", {
        //   icon: "success",
        // });
        deleteEmployee(id);
      } else {
        swal("Thanks, Your Data is safe now!");
      }
    })
  );
  //   confirm("Are you sure to delete")) {
  //   deleteEmployee(id);
  // }
});

$(document).ready(function () {
  //   let OrderdTable = $("#OrderdTable");

  //   alert("wuu shaqeenayaa");
  //   OrderdTable = $("#OrderdTable").datatable();
  loadData();
  function loadData() {
    // $("#OrderdTable").datatable().destory();
    // $("#OrderdTable tbody").dataTable(html(""));

    $("#OrderdTable tbody").html("");

    // ajax
    let sendingData = {
      action: "readOderList",
    };

    $.ajax({
      method: "POST",
      dataType: "JSON",
      url: "../api/oderListapi.php",
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
              tr += `<td ${i}=${item[i]}>${item[i]}</td>`;
            }
            tr += `<td><button class="btn btn-sm btn-success update_info" infoUpdate=${item["id"]}><i class="fa fa-edit"></i></button>&nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-danger delete_info" infoDelete=${item["id"]}><i class="fa fa-trash"></i></button></td>';
                    tr += '</tr>`;
          });

          html = tr;
          //   $("#OrderdTable tbody").dataTable(append(html));
          $("#OrderdTable tbody").append(html);
          $("#OrderdTable").dataTable();
        } else {
          swal("error!", response, "error");
        }
      },
      error: function (error) {
        // console.log("Some Errorr");
        swal("error!", error, "error");
      },
    });
  }
});

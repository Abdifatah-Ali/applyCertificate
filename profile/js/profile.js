// $(document).ready(function () {
//   // let average =
//   // let id =
//   loadData();
//   // sedingData = {
//   //   action: "registerUser",
//   //   // rollNo: fullName:
//   // };

//   $("#submit").on("click", function (e) {
//     e.preventDefault();
//     alert("Hello Sxb");
//     // $.ajax({
//     //     type: "POST",
//     //     url: "./api.php",
//     //     data: sedingData,
//     //     dataType: "JSON",
//     //     success: function(response) {
//     //         status = response["status"];
//     //         Data = response.data;

//     //         if (status) {
//     //             swal("Good job!", Data, "success");
//     //         } else {
//     //             swal("Bad Job!", Data, "error");

//     //         }
//     //     },
//     //     error: function(response) {
//     //         swal("Error!", response, "error");

//     //     }
//     // });
//   });

//   //   if (average < 60) {
//   //     $("submit").attr("value", "Disabled");
//   //     $("#submit").prop("disabled", true);
//   //   }

//   // function fetchData(id) {
//   //     let sendingData = {
//   //         action: "readStudentInfo",
//   //         id: id,
//   //     };

//   //     $.ajax({
//   //         method: "POST",
//   //         dataType: "JSON",
//   //         url: "./api.php",
//   //         data: sendingData,
//   //         success: function(data) {
//   //             console.log(data);
//   //             // let status = data["status"];
//   //             // let response = data.data;

//   //             // if (status) {
//   //             //     var studentName = (response[0].name);
//   //             //     var studentPhone = (response[0].phone);
//   //             //     var studentAddress = (response[0].address);
//   //             //     var studentRollNo = (response[0].id);

//   //             //     // $("#EmployeeModal").modal("show");
//   //             // } else {
//   //             //     console.log(response);
//   //             // }
//   //         },
//   //         error: function(data) {
//   //             console.log("Some Errorr");
//   //         },
//   //     });
//   // }
//   function loadData() {
//     let sendingData = {
//       action: "readAllStudents",
//     };

//     $.ajax({
//       method: "POST",
//       dataType: "JSON",
//       url: "../api/profile.php",
//       data: sendingData,
//       success: function (data) {
//         console.log(data);
//       },
//       error: function (data) {
//         console.log(data);
//       },
//     });
//   }
// });

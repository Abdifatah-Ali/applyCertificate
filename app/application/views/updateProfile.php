<?php
 session_start();
include("./header.php");
include("./sidebar.php");
?>

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">ApplyCertification</h5>
                        <p class="m-b-0">Welcome to UpdateProfile page</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="./createUser.php">UpdateProfile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <!-- Material statustic card start -->
                        <div class="col-md-12">
                            <div class="card mb-2">
                                <img class="m-3" src="../../assets/images/user.png" id="target" name="target"
                                    height="250px" width="220px" class="rounded-circle">
                                <form id="userForm">
                                    <div class="container">
                                        <div class="row ">
                                            <div class="col-md-6 col-sm-12">
                                                <input type="hidden" name="updateId" id="updateId" class="form-control">
                                                <input type="file" name="image" id="image">
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <select name="status" id="status" class="form-control" disabled="true">
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                    <option value="Deny">Deny</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4 mt-4">
                                            <div class="col-md-4 col-sm-12">
                                                <label for="">Fullname</label>
                                                <input type="text" name="fullName" id="fullName" class="form-control"
                                                    placeholder="Full Name">
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label for="">username</label>
                                                <input type="text" name="userName" id="userName" class="form-control"
                                                    placeholder="userName">
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label for="">userType</label>
                                                <input type="text" name="userType" id="userType" class="form-control"
                                                    placeholder="userType">
                                            </div>
                                        </div>
                                        <div class="row mb-4 mt-3">
                                            <div class="col-md-4 col-sm-12  mt-2">
                                                <label for="">userAddress</label>
                                                <input type="text" name="userAddress" id="userAddress"
                                                    class="form-control" placeholder="Address">
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label for="">Question</label>
                                                <select name="question" id="question" class="form-control">
                                                    <option value="what is your nickname">what is your nickname?
                                                    </option>
                                                    <option value="what is your babyname">what is your babyname?
                                                    </option>
                                                    <option value="what is your secondery School" selected>what is your
                                                        secondery School?</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-2">
                                                <label for="">Answer</label>
                                                <input type="text" class="form-control" name="answer" id="answer"
                                                    placeholder="Answer">
                                            </div>
                                        </div>
                                        <div class="row mb-4 mt-4">
                                            <div class="col-md-4 col-sm-12 ">
                                                <label for="">userPhone</label>
                                                <input type="tel" name="userPhone" id="userPhone" class="form-control"
                                                    placeholder="userPhone">
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label for="">Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        id="password" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label for="">confirm password</label>
                                                    <input type="password" name="confpass" class="form-control"
                                                        id="confpass" placeholder="re-type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 mt-4">
                                            <div class="col-md-4 col-sm-12 ">
                                                <div class="form-group">
                                                    <label for="">Gender</label>&nbsp;&nbsp;&nbsp;
                                                    <input type="radio" name="gender" id="gender" value="Male"
                                                        CHECKED>Male
                                                    &nbsp;&nbsp;&nbsp;
                                                    <input type="radio" name="gender" id="gender" value="Female">Female
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" id="submit" class="btn btn-primary">Update
                                                info</button>

                                            <button type="button" id="clear" class="btn btn-danger">Clear</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>
</div>



<?php
    include("./footer.php");
   ?>
<script>
$(document).ready(function() {
    // clearData();

    // function clearData() {
    //     $("#userForm")[0].reset();
    //     // $("#target").removeAttr('src');
    //     $('#target').attr('src', '');
    //     $('#target').attr('src', '../../assets/images/user.png');
    //     localStorage.removeItem("ID");
    //     localStorage.removeItem("update");
    // }
    localStorage.setItem("state", JSON.stringify("update"));

    // let btnAction = "Update";
    $("#clear").click(function(e) {
        e.preventDefault();
        $("#userForm")[0].reset();
        // $("#target").removeAttr('src');
        $("#target").attr("src", "");
        $("#target").attr("src", "../../assets/images/user.png");
        localStorage.removeItem("ID");
    });
    let id = JSON.parse(localStorage.getItem("ID"));

    fetchData(id);
    const reader = new FileReader();
    const fileImage = document.querySelector("#image");
    const showInput = document.querySelector("#target");
    fileImage.addEventListener("change", (e) => {
        const f = e.target.files[0];
        reader.readAsDataURL(f);
    });

    reader.onload = (e) => {
        showInput.src = e.target.result;
    };

    function fetchData(id) {
        // ajax
        let sendingData = {
            action: "readUser",
            id: id,
        };

        $.ajax({
            method: "POST",
            dataType: "JSON",
            url: "../api/userapi.php",
            data: sendingData,
            success: function(data) {
                let status = data["status"];
                let response = data.data;

                if (status) {
                    response.forEach((user) => {
                        $("#updateId").val(user["userID"]);
                        $("#target").attr("src", `../uploadImage/${user["userPhoto"]}`);
                        $("#userName").val(user["userName"]);
                        $("#fullName").val(user["fullName"]);
                        $("#userType").val(user["userType"]);
                        $("#userAddress").val(user["userAddress"]);
                        $("#userPhone").val(user["userPhone"]);
                        $("#password").val(user["password"]);
                        $("#question").val(user["question"]);
                        $("#answer").val(user["answers"]);
                        $(`input[name="gender"][value="${user["gender"]}"]`).prop(
                            "checked",
                            true
                        );

                        //$("#show").attr("src", `../uploads/${response[0].photo}`);

                        // $("#userModal").modal("show");
                    });
                } else {
                    // console.log(response);
                    swal("error!", response, "error");
                }
            },
            error: function(data) {
                swal("error!", data, "error");

                // console.log("Some Errorr");
            },
        });
    }
});
</script>
<script src="../js/user.js"></script>
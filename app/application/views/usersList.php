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
                        <p class="m-b-0">Welcome to usersList Page</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./index.php"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="./usersList.php">UsersList</a>
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <!-- <button style="float:right"
                                            class="btn btn-info col-md-2 col-sm-12 mb-2 float-right"
                                            id="showModalBtn">Regiter User</button> -->
                                        <!-- <table class="table" id="userTable"> -->
                                        <table id="userTable" class="table table-bordered table-hover "
                                            style="width:100%">

                                            <thead class="">

                                                <th>userID </th>
                                                <th>userPhoto </th>
                                                <th>userName </th>
                                                <th>userType </th>
                                                <th>userPhone </th>
                                                <!-- <th>userAddress </th> -->
                                                <th>password </th>
                                                <th>status </th>
                                                <th class="col-md-3 col-sm-12 align-center"> Action </th>
                                            </thead>

                                            <tbody>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id=" styleSelector">
            </div>
        </div>
    </div>
</div>



<?php
    include("./footer.php");
   ?>
<script src="../js/user.js"></script>
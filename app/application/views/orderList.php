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
                        <h5 class="m-b-10">Dashboard</h5>
                        <p class="m-b-0">Welcome to Material Able</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
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
                                    <!-- <button style="margin:20px;float:right" class="btn btn-info float-right m-3"
                                id="showModalBtn">Regiter Emp</button> -->
                                    <!-- <div align="center">
                                <input type="text" name="search" id="search" class="form-control" />
                            </div> -->
                                    <div class="table-responsive">
                                        <table id="OrderdTable" class="table table-bordered table-hover">

                                            <thead>
                                                <tr>
                                                    <th>Order_ID</th>
                                                    <th>Roll_Number</th>
                                                    <th>FullName</th>
                                                    <th>regDate</th>
                                                    <th>appiontDate</th>
                                                    <th>Action</th>
                                                </tr>
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
            <div id="styleSelector"> </div>
        </div>
    </div>
</div>



<?php
 include("./footer.php");
 ?>
<script src="../js/orderList.js"></script>
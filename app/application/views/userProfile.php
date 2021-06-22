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
                        <!-- Material statustic card start -->
                        <div class="col-md-4">
                            <div class="card user-card">
                                <div class="card-header">
                                    <h5>Profile</h5>
                                </div>
                                <div class="card-block">
                                    <div class="user-image">
                                        <img src="<?php echo '../uploadImage/'.$_SESSION['userPhoto']?>"
                                            class="img-radius" alt="User-Profile-Image">
                                    </div>
                                    <h4 class="f-w-900 text-primary m-t-25 m-b-10"><?php echo $_SESSION['userName']?>
                                    </h4>
                                    <p class="text-muted"> <span class="badge-success">
                                            <?php echo $_SESSION['status']?></span>
                                    </p>

                                    <div class="divider">
                                        <br><br>
                                    </div>
                                    <hr>
                                    <br>
                                    <div class="row justify-content-center user-social-link">
                                        <div class="col-auto"><a href="https://facebook.com"><i
                                                    class="fa fa-facebook-square text-facebook"></i></a></div>
                                        <div class="col-auto"><a href="https://twitter.com"><i
                                                    class="fa fa-twitter-square text-twitter"></i></a></div>
                                        <div class="col-auto"><a href="https://youtube.com"><i
                                                    class="fab fa-youtube text-youtube"></i></a></div>
                                    </div>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card user-card">
                                <div class="card-header">
                                    <h5>Profile</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row col-12">
                                        <div class="col-md-12 mb-4">
                                            <h5 class="text-success">Basic Info</h5>
                                        </div>
                                        <hr class="solid">
                                        <div class="col-md-6 col-sm-12 ">
                                            <h6>FullName</h6>
                                            <p class="text-primary"><?php echo $_SESSION['fullName']?></p>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <h6>Address</h6>
                                            <p class="text-primary"><?php echo $_SESSION['userAddress']?></p>
                                        </div>
                                        <hr>
                                        <div class="col-md-6 col-sm-12">
                                            <h6>Gender</h6>
                                            <p class="text-primary"><?php echo $_SESSION['gender']?></p>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <h6>userType</h6>
                                            <p class="text-primary"><?php echo $_SESSION['userType']?></p>
                                        </div>
                                        <hr>
                                        <div class="col-md-6 col-sm-12">
                                            <h6>userPhone</h6>
                                            <p class="text-primary"><?php echo $_SESSION['userPhone']?></p>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <h6>Question</h6>
                                            <p class="text-primary"><?php echo $_SESSION['question']?></p>
                                        </div>
                                        <hr>
                                        <div class="col-md-6 col-sm-12">
                                            <h6>Answers</h6>
                                            <p class="text-primary"><?php echo $_SESSION['answers']?></p>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <h6>registerDate</h6>
                                            <p class="text-primary"><?php echo $_SESSION['regDate']?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 float-right">
                                        <button type="submit" name="Edit" id="Edit" class="btn btn-success btn-block">
                                            <i class="fa fa-edit">Edit</i> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-body end -->
                    </div>
                </div>
            </div>
            <?php
    include("./footer.php");
   ?>
            <script>
            $(document).ready(function() {
                $("#Edit").click(function(e) {
                    e.preventDefault();
                    alert('hi');
                    let id = "<?php echo $_SESSION['userID'];?>";
                    localStorage.setItem("ID", JSON.stringify(id));
                    window.location = "./updateProfile.php"
                });
            });
            </script>
            <!-- <script src="../js/main.js"></script> -->
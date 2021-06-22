<?php
    // session_start();
    // if(!isset($_SESSION['rollnumber'])){
    // header("location: login.php");}
    include('inc/session.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Profile page</title>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>



<body>


    <div class="container bootstrap snippets bootdey">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Left</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="//codeply.com">Codeply</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
            <div class="mx-auto order-0">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Right</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
    <div class="container">
        <div class="panel-body inf-content">
            <div class="wrapper fadeInDown">
                <!-- <form action="" method="post" enctype="multipart/form-data"> -->
                <div class="row">
                    <div class="col-md-4">
                        <img id="target" width="413px" height="531px"
                            class="img-circle img-thumbnail isTooltip float-left"
                            src="<?php echo $_SESSION['photo'];?>">
                        <!-- https://bootdey.com/img/Content/avatar/avatar7.png -->
                        <ul title="Ratings" class="list-inline ratings text-center">
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-8 " id="info">
                        <center>
                            <h3 style="font-weight:bold;font-size: 26px;" class="fa fa-table text-primary ">
                                Information
                            </h3>
                        </center><br>

                        <div class="table-responsive">
                            <center>
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <i class="fa fa-id-badge text-primary"></i>
                                                    <!-- <span class="glyphicon id-badge "></span> -->
                                                    RollNumber:
                                                </strong>
                                            </td>
                                            <td id="info" class="text-primary">
                                                <?php echo $_SESSION['rollnumber']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <!-- <span class="glyphicon glyphicon-user  text-primary"></span> -->
                                                    <i class="fa fa-user text-primary"></i>
                                                    FullName:
                                                </strong>
                                            </td>
                                            <td id="info" class="text-primary">
                                                <?php echo $_SESSION['fullname']; ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <!-- <span class="glyphicon glyphicon user-parents text-primary"></span> -->
                                                    <i class="fa fa-users text-primary"></i>
                                                    MotherName:
                                                </strong>
                                            </td>
                                            <td id="info" class="text-primary">
                                                <?php echo $_SESSION['mothername']; ?>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <strong>
                                                    <!-- <span class="glyphicon glyphicon-education text-primary"></span> -->
                                                    <i class="fa fa-university text-primary"></i>
                                                    SchoolName:
                                                </strong>
                                            </td>
                                            <td id="info" class="text-primary">
                                                <?php echo $_SESSION['schoolname']; ?>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <strong>
                                                    <!-- <span class="glyphicon glyphicon-transgender text-primary"></span> -->
                                                    <i class="fa fa-venus-mars text-primary"></i>
                                                    Gender:
                                                </strong>
                                            </td>
                                            <td id="info" class="text-primary">
                                                <?php echo $_SESSION['gender']; ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <!-- <span class="glyphicon glyphicon-mobile-phone text-primary"></span> -->
                                                    <i class="fa fa-mobile text-primary"></i>
                                                    Phone:
                                                </strong>
                                            </td>
                                            <td id="info" class="text-primary">
                                                <?php echo $_SESSION['phone']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <!-- <span class="glyphicon glyphicon-map-marker text-primary"></span> -->
                                                    <i class="fa fa-map-marker text-primary"></i>
                                                    PalceOfBirth:
                                                </strong>
                                            </td>
                                            <td id="info" class="text-primary">
                                                <?php echo $_SESSION['pob']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <!-- <span class="glyphicon glyphicon-calendar text-primary"></span> -->
                                                    <i class="fa fa-calendar text-primary"></i>
                                                    Bithdate:
                                                </strong>
                                            </td>
                                            <td id="info" class="text-primary">
                                                <?php echo $_SESSION['birthdate']; ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <!-- <span class="glyphicon glyphicon-hourglass text-primary"></span> -->
                                                    <i class="fa fa-graduation-cap text-primary"></i>
                                                    AcademicYear:
                                                </strong>
                                            </td>
                                            <td id="info" class="text-primary">
                                                <?php echo $_SESSION['acdemicyear']; ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <!-- <span class="glyphicon glyphicon-stats-bars text-primary"></span> -->
                                                    <i class="fa fa-percent text-primary"></i>

                                                    AverageMarks:
                                                </strong>
                                            </td>
                                            <td id="info" class="text-primary">
                                                <?php printf("%d%% \n", $_SESSION['average']);?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </center>
                        </div>
                    </div>
                </div>
                <!-- </form> -->
            </div>

        </div>
    </div>
    <?php
    
    
    
    ?>

    <!-- <script>
    var src = document.getElementById("src");
    var target = document.getElementById("target");

    document.write(src, target);

    function showImage(src, target) {
        var upl = new FileReader();
        upl.onload = function(e) {
            target.src = this.result;
        };
        src.addEventListener("change", function() {
            upl.readAsDataURL(src.files[0]);
        })
    }
    showImage(src, target);
    </script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>
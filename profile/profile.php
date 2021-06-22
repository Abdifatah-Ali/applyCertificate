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
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ml-auto">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav  ml-auto ">
                    <li class="nav-item active">
                        <a class="nav-link fa fa-address-book text-light" href=""> Contact Us </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link fa fa-sign-out  text-light"" href=" ./inc/logout.php"> logOut</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#"><a class="fa fa-sign-out"></a></a>
                    </li> -->

                </ul>
            </div>
        </nav>
    </div>

    <br>
    <div class="container ">
        <div class="card md-12">
            <div class="panel-body inf-content">
                <div class="wrapper fadeInDown">

                    <div class="row">
                        <div class="col-md-4">
                            <img id="target" class="img-thumbnail img-fluid float-center"
                                src="<?php echo $_SESSION['photo'];?>">
                            <!-- https://bootdey.com/img/Content/avatar/avatar7.png -->

                        </div>


                        <div class="col-md-8 " id="info">
                            <center>
                                <h3 style="font-weight:bold;font-size: 26px;" class="fa fa-table text-primary ">
                                    Information
                                </h3>
                                <br>

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
                                                    <td id="average" class="text-primary">
                                                        <?php printf("%d%% \n", $_SESSION['average']);?>
                                                    </td>
                                                </tr>
                                                <tr>

                                                </tr>
                                            </tbody>

                                        </table>
                                </div> <button type="submit" name="submit" class="btn btn-md btn-block"
                                    id="submit">Submit</button>
                                <br><br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $average = $_SESSION['average'];
    if ($average < 60) {
		echo "<script>document.getElementById('submit').disabled = true;</script>";
		// echo "<script>document.getElementById('submit').style.backgroundColor='red';</script>";
        //  document.getElementById('id1').style.backgroundColor='#003F87';
		// echo "<script>document.getElementById('average').html('color', 'red');</script>";
		// echo "<script>document.getElementById('average').attr('color', 'red');</script>";
		echo "<script>document.getElementById('average').css({color: 'red'});</script>";
    }
    
    ?>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        
    </script> -->
    <!-- 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="./profile.js"></script>
    <!-- <script>
    $("#submit").click(function(e) {
        e.preventDefault();
        swal('success', 'wuu shaqeenaya', 'success');

    });
    // if (average < 60) {
    //     $("submit").attr("value", "Disabled");
    //     $("#submit").prop("disabled", true);
    // }
    </script> -->
</body>

</html>
<?php


     include("profile/inc/db.php");

           if (isset($_POST['login'])) { 

                    $rollno = mysqli_real_escape_string($cn, $_POST['rollno']);
					$tell = mysqli_real_escape_string($cn, $_POST['phone']);
                    // $username = $_POST['uname'];
                    // $password = $_POST['passw'];
					$logQry = "SELECT * FROM students_info WHERE Roll_Number = '". $rollno ."' AND Phone = '". $tell ."'";
					$logIN = mysqli_query($cn, $logQry);
					$res = mysqli_fetch_array($logIN);
					$counResult = mysqli_num_rows($logIN);
					
					if ($counResult > 0) {
						
                        
						$_SESSION['rollnumber'] = $res[0];
                        $_SESSION['photo'] = $res[1];
						$_SESSION['fullname'] = $res[2];
						$_SESSION['mothername'] = $res[3];
                        $_SESSION['schoolname'] = $res[4];
						$_SESSION['gender'] = $res[5];
						$_SESSION['phone'] = $res[6];
                        $_SESSION['pob'] = $res[7];
						$_SESSION['birthdate'] = $res[8];
						$_SESSION['acdemicyear'] = $res[9];
                        $_SESSION['average'] = $res[10];
                        //  if (isset($_POST['rememberme'])){
                        //     setcookie($_SESSION['username'],$_SESSION['password'], time() + 60*60*24);
                        //  }

                        
                         echo "<script>window.location.href ='verification.js' </script>";


                        //  echo "<script>window.location.href = 'profile/Profile.php' </script>";

                    } else {
                    
                        echo '<script>swal("Wrong!", "Username or Password is incorrect!", "error")</script>';   
                        // echo "<script>alert('Username or Password is incorrect')</script>";   
                        }

           }     

    ?>
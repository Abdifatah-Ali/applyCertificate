<?php
    session_start();

	
	if ((isset($_SESSION['userName']) == true) && ($_SESSION['userName']) != "" ) {
	
	//  echo "<script>window.location.href='../views/login.php'</script>";

	} else {
		// echo "<script>window.location.href='../views/index.php'</script>";
         echo "<script>window.location.href='../views/login.php'</script>";
	}
?>
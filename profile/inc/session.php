<?php
    session_start();

	if ((isset($_SESSION['phone']) == true) && ($_SESSION['phone']) != "") {
		//
		
	} else {
		echo "<script>window.location.href='../index.php'</script>";
	}
?>
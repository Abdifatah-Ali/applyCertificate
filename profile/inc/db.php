<?phP

	$server = "localhost";
	$usern = "root";
	$passw =  "";
	$dbname = "certificate_apply";
	
	$conn = mysqli_connect($server, $usern, $passw, $dbname);
	
	if ($conn) {
		// echo "<script>alert('Database connected successfully..');</script>";
	} else {
		echo "<script>alert('Database connectiojn Failed..');</script>";
	}
	

?>
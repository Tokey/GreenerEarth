<?php 
	
	session_start();
	session_destroy();
	echo "<script>
	alert('Logged Out Succesfully!');
	</script>";
	header("LOCATION:profiles.php");
?>
<?php
session_start();
if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
	echo "You are Welcome ". $_SESSION['user'];
?>
<a href = "logout.php">Logout</a>	
<?php	
}else{
	header("location:login.php");
}

?>
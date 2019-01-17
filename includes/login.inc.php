<?php

session_start();

if (isset($_POST['submit'])){
	
	include 'db.php';
	
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	

	if (empty($username) || empty($password)){	
		header("Location: ../login.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE uid='$username' and pwd='$password'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 1) {

					$_SESSION['u_id'] = $row['id'];
					$_SESSION['u_name'] = $row['name'];
					$_SESSION['u_uid'] = $row['uid'];
					header("Location: ../home.php?login=success");
					exit();
				} else {
						header("Location: ../login.php?login=error");
						exit();
				}
				
			}
		
	
} else {
	header("Location: ../login.php?login=error");
	exit();
}
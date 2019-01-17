<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<br><br><br><br>
	<div class="container" >
		<form action = "includes/login.inc.php" method="POST" class= "container">
				<br/>
				  <label for="exampleInputname">Username</label>				
					  <input type="text" name="username" class="form-control" placeholder="Username"  ><br/>
				  <div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control"  placeholder="Password" >
				  </div>
				  <button type="submit" name="submit" class="btn btn-primary" >Login</button><br><br>
		</form>
	</div>
	<br/><br/><br/>	
</body>	
</html>
  
	

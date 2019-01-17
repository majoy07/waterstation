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
	<th scope="col">
			<form action="includes/logout.inc.php" method="POST">
				<button type="submit" name="submit" class="btn btn-primary">Logout</button>
			</form>
	</th>
</body>  
</html>
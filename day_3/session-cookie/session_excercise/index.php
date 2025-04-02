<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Main</title>
</head>
<body>
	<?php
		if(!isset($_SESSION['username'])) {
			header('Location: login.php');
			exit();
		}
		// print_r($_SESSION);
		echo "username: ".$_SESSION['fullName'];
	?>

	<form action="logout.php" method="POST">
		<input type="submit" name="btnLogout" value="logout">
	</form>
</body>
</html>
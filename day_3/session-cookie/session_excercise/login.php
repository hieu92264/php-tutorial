<?php
	session_start();
	if(isset($_SESSION['username'])) {
		header('Location: index.php');
	}

	if(isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$users = parse_ini_file('user.ini');
		if(isset($users[$username])) {
			$user = explode('|', $users[$username]);
			if(md5($password) == $user[1]) {
				$_SESSION['username'] = $username;
				$_SESSION['fullName'] = $user[2];
				header('Location: index.php');
				exit();
			}
			header('Location: login.php?error=invalid_password');
			exit();
		}
		header('Location: login.php?error=name_error');
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		LOGIN
	</title>
	<style type="text/css">
		body {
		    font-family: Arial, sans-serif;
		    background-color: #f4f4f4;
		    display: flex;
		    justify-content: center;
		    align-items: center;
		    height: 100vh;
		    margin: 0;
		}

		.content {
		    background: #fff;
		    padding: 20px;
		    border-radius: 10px;
		    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		    width: 400px;
		    text-align: center;
		}

		.error {
			color: red;
		}

		h1 {
		    margin-bottom: 20px;
		    font-size: 24px;
		    color: #333;
		}

		form div {
		    margin-bottom: 15px;
		    text-align: left;
		}

		label {
		    display: block;
		    font-weight: bold;
		    margin-bottom: 5px;
		}

		input[type="text"], input[type="password"] {
		    width: 100%;
		    padding: 5px;
		    border: 1px solid #ccc;
		    border-radius: 5px;
		    font-size: 16px;
		}

		input[type="submit"] {
		    width: 100%;
		    background: #007BFF;
		    color: white;
		    padding: 10px;
		    border: none;
		    border-radius: 5px;
		    cursor: pointer;
		    font-size: 16px;
		    transition: background 0.3s;
		}

		input[type="submit"]:hover {
		    background: #0056b3;
		}

	</style>
</head>
<body>
	<div class="content">
		<h1>LOGIN</h1>
		<form action="login.php" method="POST">
			<div>
				<label>Username</label>
				<input type="text" name="username" id="username">
			</div>
			<div>
				<label>Password</label>
				<input type="password" name="password" id="password">
			</div>
			<div>
				<input type="submit" name="btnLogin" value="Login">
			</div>
			<?php
				if(isset($_GET['error'])) {
					echo '
						<div class="error">'.$_GET['error'].'</div>
					';
				}
			?>
		</form>
	</div>
</body>
</html>


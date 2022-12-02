<!DOCTYPE html>
<html>
<head>
		<title>LOGIN</title>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id=form>
	<form action="login.php" method="post">
		<h2>LOGIN</h2>
		<?php 
			if(isset($_GET['error'])) { ?>
				<p class="error"> <?php echo $_GET['error']; ?></p>
			<?php } ?>

			<label>Username</label>
			<input type="text" name="uname" placeholder="Username"><br><br>
			<label>Password</label>
			<input type="password" name="password" placeholder="Password"><br><br>

			<button type="submit">Login</button>

	</form>
</div>
</body>
</html>
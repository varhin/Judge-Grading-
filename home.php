<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id=table>
		<h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>

		<form method="post" action="">
		<table>
			<tr>
				<th>Software Development Final Project</th>
			</tr>

			<tr>
			<th align="left">Group name: </th>
			</tr>

			<tr>
				<th align="left">Criteria</th>
				<th>Developing (0-10)</th>
				<th>Accomplished(11-20)</th>
			</tr>

			<tr>
				<td>Articulate requirements</td>
				<td><input type="number" min="0" max="10" name="rqmts" /></td>
				<td><input type="number" name="rqmts2" min="11" max="20" /></td>
			</tr>

			<tr>
				<td>Choose appropriate methods and tools</td>
				<td><input type="number" name="tools" min="0" max="10" /></td>
				<td><input type="number" name="tools2" min="11" max="20"/></td>
			</tr>

			<tr>
				<td>Give clear and coherent presentation</td>
				<td><input type="number" name="presentation" min="0" max="10" /></td>
				<td><input type="number" name="presentation2"
				min="11" max="20"/></td>
			</tr>

			<tr>
				<td>Functioned well as a team</td>
				<td><input type="number" name="team" min="0" max="10"/></td>
				<td><input type="number" name="team2" min="11" max="20"/></td>
			</tr>

			<tr>
				<td>Complete report is submitted</td>
				<td><input type="number" name="complete" min="0" max="10"/></td>
				<td><input type="number" name="complete2" min="11" max="20"/></td>
			</tr>

			<tr>
				<td>Total</td>
				<td><input type="number" name="total"/></td>
				<td><input type="number" name="total2"/></td>
			</tr>

		</table>
		<br>
		<button type="submit" name="submit-score">SUBMIT</button><br><br>

	</form>

		<a href="logout.php">Logout</a>

	</div>
	</body>
	</html>

	<?php
}
else {
	header("Location: index.php");
	exit();
}
?>
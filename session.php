<?php
session_start();
if (isset($_SESSION['username'])) {
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>session</title>
		<link rel="stylesheet" type="text/css" href="session.css">
	</head>
	<body>
		<?php
		echo "<h1>Welcome ",$_SESSION['username']."</h1>";
		?>
	</body>
	</html>

<?php
}
else {
	header("Location:index.php");
}
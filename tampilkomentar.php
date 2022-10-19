<!DOCTYPE html>
<html>
<head>
	<title>Comment Data</title>
</head>
<body>
<h1>Your Comment Data</h1>
<hr>
<table border="0">
<tr>
	<td>Your Name</td>
	<td>:</td>
	<td><?php echo $_POST["nama"]; ?></td>
</tr>
<tr>
	<td>Your Email</td>
	<td>:</td>
	<td><?php echo $_POST["email"]; ?></td>
</tr>
<tr>
	<td>Your Comments</td>
	<td>:</td>
	<td><?php echo $_POST["komentar"]; ?></td>
</tr>
</table>
<a href="guest book.php">INPUT DATA AGAIN</a>
</body>
</html>
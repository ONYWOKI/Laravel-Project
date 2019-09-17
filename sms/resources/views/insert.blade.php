<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<form action="/insert" method="post">
			<table>
				<tr>
					{{csrf_field()}}
					<td>First Name:</td>
					<td><input type="text" name="firstName"></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input type="text" name="firstName"></td>
				</tr>
				<tr>
					<td>Mobile:</td>
					<td><input type="text" name="firstName"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Add"></td>
				</tr>
			</table>
		</form>
	</center>

</body>
</html>
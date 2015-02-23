<html>
<head>
	<title>Simple Chat Application</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	
	<form method="post" action="chat.php">
		<div class="container">
		<div>
			<label for="email">Your Email</label>
			<input type="email" name="myid" value="" id="email" required="required">
		</div>
		<div>
			<label for="femail">Friend Email</label>
			<input type="email" name="fid" value="" id="femail" required="required">
		</div>
		<div>
			<input type="submit" value="Done!">
		</div>
		</div>
	</form>
</body>
</html>

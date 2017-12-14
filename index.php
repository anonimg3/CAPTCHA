<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>CAPTCHA</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css" />	
</head>

<body>
	<div id="container">
		<h1>CAPTCHA</h1>
		<hr>
		<form  onsubmit="return validation()" method="post" action="verification.php" >	
			<img src="captcha.php" alt="captcha"><br>
			<input type="text" id="captcha" placeholder="Przepisz liczby" name="captcha" onfocus="this.placeholder=''" onblur="this.placeholder='Przepisz liczby'" ><br>
			<input type="submit" id="sprawdz" value="Sprawdź"><br>
		</form>
	</div>
	<script src="script.js"></script>
</body>
</html>
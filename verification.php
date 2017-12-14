<?php
	if (!isset($_POST['captcha']))    
	{
		header('Location: index.php');      // redirect to index.php
		exit();                             // stop executing code
	}	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>CAPTHA</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css" />	
</head>

<body>
	<div id="container">
		<h1>CAPTCHA</h1>
		<hr>
		</form>
		<?php
			session_start();  
	
			if (isset($_POST['captcha'])){
				$captha = $_POST['captcha'];
				$message = $_SESSION['correctCaptcha'];
				if ( $message === $captha ){
					echo '<img src="img/correct.png">';
				}else{
					echo '<img src="img/incorrect.png">';
				}
			}
		?>
		<form  action="index.php" >
			<input type="submit" value="Powrót"><br>
		</form>
	</div>
</body>
</html>



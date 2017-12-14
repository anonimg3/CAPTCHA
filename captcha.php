<?php
	session_start();  
	header("Content-type:image/png");
	// configure
	$width = 300; 
	$height = 100; 
	$numberCount = 7;
	$im = imagecreate($width,$height);
	$backgroundColor = imagecolorallocate($im,255,255,208);
	// create array of number
	for($i=0;$i<$numberCount;$i++){
		$pass[$i] =  rand(0,9);
	}
	// set background color
	imagefill($im,250,250,$backgroundColor);
	// add noise
	$r = imagecolorallocate($im,255,0,0);
	$g = imagecolorallocate($im,0,255,0);
	$b = imagecolorallocate($im,0,0,255);	
	for($i=0;$i<500;$i++){
		imagesetpixel($im,rand(0,$width),rand(0,$height),$r);
		imagesetpixel($im,rand(0,$width),rand(0,$height),$g);
		imagesetpixel($im,rand(0,$width),rand(0,$height),$b);
	}
	// add circles
	for($i=0;$i<15;$i++){
		$x = rand(0,$width);
		$y = rand(0,$height);
		$radius = rand(50,$width);
		$phi = rand(90,360);
		imagearc($im,$x,$y,$radius,$radius,90,$phi,$r);
	}
	// add numbers
	$dx = $width / ($numberCount + 1);
	for($i=0;$i<$numberCount;$i++){
		$dy = rand(20,$height-20);
		imagestring ($im,5,$dx*($i+1),$dy,$pass[$i],$b);
	}
	// display image and frees memory 
	imagepng($im);
	imagedestroy($im);
	// add current captcha value to session (GlobalVariable)
	$_SESSION['correctCaptcha'] =implode("",$pass);;
?>
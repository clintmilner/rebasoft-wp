<?php
session_start();

$string = '';

for ($i = 0; $i < 5; $i++) {
	$string .= chr(rand(97, 122));
}

$_SESSION['random_number'] = $string;

$dir = '';

$image = imagecreatetruecolor(110, 33);

// random number 1 or 2
$num = rand(1,2);
if($num==1)
{
	$font = "Capture it 2.ttf"; // font style
}
else
{
	$font = "Molot.otf";// font style
}

// random number 1 or 2
$num2 = rand(1,2);
if($num2==1)
{
	$color = imagecolorallocate($image, 88, 88, 88);// color
}
else
{
	$color = imagecolorallocate($image, 88, 88, 88);// color
}

$white = imagecolorallocate($image, 255, 255, 255); // background color white
imagefilledrectangle($image,0,0,399,99,$white);

imagettftext ($image, 20, 0, 10, 25, $color, $dir.$font, $_SESSION['random_number']);

header("Content-type: image/png");
imagepng($image);

?>
<?php 
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0,0);
$gray = imagecolorallocate($image, 100, 100,100);

imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Diego Pereira");
imagestring($image, 3, 440, 370, "Concluído em: ".str_replace("-", "/", date("d-m-y")), $titleColor);

header("Content-type: image/jpg");
imagejpeg($image);
imagedestroy($image);

?>

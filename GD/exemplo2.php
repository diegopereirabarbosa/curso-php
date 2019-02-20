<?php 
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0,0);
$gray = imagecolorallocate($image, 100, 100,100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Diego Pereira", $titleColor);
imagestring($image, 3, 440, 370, "Concluído em: ".str_replace("-", "/", date("d-m-y")), $titleColor);

header("Content-type: image/jpg");
imagejpeg($image, "certificado".date("d-m-y").".jpg",10);
imagedestroy($image);

?>

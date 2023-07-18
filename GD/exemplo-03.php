<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);
// foi preciso incluir um __DIR__ antes da pasta fonts para encontrar o caminho corretamente
imagettftext($image, 32, 0, 320, 250, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 325, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Alexsandro Pedroso");
imagestring($image, 5, 380, 410, utf8_decode("Concluído em: ".date("d/m/Y")), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>
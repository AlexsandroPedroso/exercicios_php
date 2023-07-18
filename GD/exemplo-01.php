<?php
// cria uma imagem a partir do PHP
header("Content-Type: image/png");
// seta o tamanho da imagem
$image = imagecreate(256, 256);
// seta as cores, lembrando que a primeira cor setada irá para o fundo da imagem
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);
// seta os demais parametros
imagestring($image, 5, 60, 120, "Curso PHP 7", $red);
// cria a imagem
imagepng($image);
// destroi a imagem para evitar ocupar espaço no sistema
imagedestroy($image);

?>
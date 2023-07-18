<?php

$data = array (
	"empresa"=>"CGDW"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK Cookie foi criado";

?>
<?php

if (isset($_COOKIE["NOME_DO_COOKIE"])) {

	$ojb = json_decode($_COOKIE["NOME_DO_COOKIE"]);

	echo $ojb->empresa;
}

?>
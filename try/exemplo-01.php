<?php

try {

    throw new Exception("Houve um erro", 400);

// no catch é necessario infomar a classe e setar uma variavel para que seja incluida na variavel as informações do erro
} catch (Exception $e) {

    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));

}

?>
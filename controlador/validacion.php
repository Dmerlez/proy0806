<?php
include '../libreria.php';
$oUsu=new usuario($_REQUEST["nomusuario"],$_REQUEST["clave"]);
if($oUsu->VerificaLocal())
    echo "todo bien";
else
    echo "todo mal";

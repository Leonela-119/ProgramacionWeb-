<?php
$clientes=['Bryan','Pierina','Astrid','Leonela','Luciana','Jazmin','Tony','Samuel','pepito','pepito2'];
$clientes[4]='Maria';
unset($clientes[6]);

for($pepito=0;$pepito<count($clientes);$pepito++)
{
    echo $clientes[$pepito].'<br>';
}

?>
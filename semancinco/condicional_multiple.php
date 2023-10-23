<?php
/*$estado="x";
if($estado=="s")
{echo "soltero";}
else
{
    if($estado=="c")
    {echo "casado";}
    else
    {
        if($estado=="v")
        {echo "viudo";}
        else
        {
            if($estado=="d")
            {echo "divorciado";}
            else
            {echo "valor no reconocido";}
        ;}
    ;}
//es n - 1//
;}*/
$productos="cereales";
if($productos=="lacteos")
{
    $lacteos=['queso guda','yogurt griego','leche evaporada','queso parmesano','mantequilla'];
    for($x=0;$x<5;$x++)
    {echo $lacteos[$x]."<br>";}
;}
else
{
    if($productos=="bebidas")
    {
        $bebidas=['inka cola','pepsi','kr','coca cola','guarana',"fanta"];
        for($x=0;$x<count($bebidas);$x++)
        {echo $bebidas[$x]."<br>";}
    ;}
else
{
    if($productos=="conservas")
    {
        $conservas=['conservas vegetales','conserva anchoa','conserva pescamar','conserva de sardina','conserva de durazno','concerva de tomate','concerva gloria','concerva marinero'];
        for($x=0;$x<count($conservas);$x++)
        {echo $conservas[$x]."<br>";}
    ;}
    else
    {
        if($productos=="cereales")
        {
            $cereales=['cereales espelta','cereales de arroz','cereales de cebada','cereales de centeno','cereales de maiz','cereales de trigo','cereales de alpiste','cereales de sorgo','cereales de mijo','cereales de kamut'];
            for($x=0;$x<count($cereales);$x++)
            {echo $cereales[$x]."<br>";}
        ;}
        else
        {echo "No hay datos disponibles";}
        ;}
    ;}
;}
?>
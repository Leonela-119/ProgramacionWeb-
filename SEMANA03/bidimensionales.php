
<?php
/* $datos=['Codigo'=>'AL01',
        'Nombre'=>'Leonela',
        'Apellido'=>'Castilla'];
echo $datos['Nombre'];*/

$productos=array(
    array('Codigo'=>'P01',
        'Horrocrux'=>'Nagini',
        'Lugar'=>'Setimo'),
    array('Codigo'=>'P02',
        'Horrocrux'=>'Diadema de Rowena Ravenclaw',
        'Lugar'=>'Quinto'),
    array('Codigo'=>'P03',
        'Horrocrux'=>'Diario de Tom Ryddle.',
        'Lugar'=>'Segundo'),
    array('Codigo'=>'P04',
        'Horrocrux'=>'Guardapelo de Salazar Slytherin',
        'Lugar'=>'Cuarto')
);
foreach($productos as $item)
{
        echo $item['Horrocrux'].' '.$item['Lugar']. '<br>';
}
?>
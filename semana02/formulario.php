<?php
$n1=$_POST['txtn1'];
$n2=$_POST['txtn2'];
$res='';
if(isset($_POST['operaciones']))
{
    if($_POST['operaciones']=='Sumar')
    {
        $res=$n1+$n2;
        
    }
    if($_POST['operaciones']=='Restar')
    {
        $res=$n1-$n2;
        
    }
    if($_POST['operaciones']=='Multiplicar')
    {
        $res=$n1*$n2;
        
    }
    if($_POST['operaciones']=='Dividir')
    {
        $res=$n1/$n2;
       
    }
}

?>
<html>
<head>
</head>
<body>
    <form action='' method='post'>
    <br><h5>FORMULARIO DE OPERACIONES</h5>
    <div>
      <label >Ingrese primer numero:</label>
      <input type='text' name='txtn1' value='<?php echo $n1;?>'>
    </div> <br>
    <div>
      <label >Ingrese segundo numero:</label>
      <input type='text' name='txtn2' value='<?php echo $n2;?> '>
    </div>
    <br><hr><br>
    <div>
      <label>El resultado es:</label>
      <input type='text' name='txtres' value='<?php echo $res;?>'>
    </div>
    </form>
    <br>
    <input type='submit' value='Sumar' name='operaciones'>
    <input type='submit' value='Restar' name='operaciones'>
    <input type='submit' value='Multiplicar' name='operaciones'>
    <input type='submit' value='Dividir' name='operaciones'>
</body>
</html>


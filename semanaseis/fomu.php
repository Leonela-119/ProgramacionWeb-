<?php
$n1=$_POST['num1'];
$n2=$_POST['num2'];
$resultado='';
if(isset($_POST['Calcular']))
{
    if($_POST['Calcular']=='Sumar')
    {
        $resultado=$n1 + $n2;
        
    }
    if($_POST['Calcular']=='Restar')
    {
        $resultado=$n1 - $n2;
    }
    if($_POST['Calcular']=='Multiplicar')
    {
        $resultado=$n1 * $n2;
    }
    if($_POST['Calcular']=='Dividir')
    {
        $resultado=$n1 / $n2;
    }
}
?>
<html>
    <head><title>Calculadora Online</title></head>
    <body>
        <div>
            <form action='' method="POST">
                <div><br>
                    <label> Ingrese Primer Número:</label><br><br>
                    <input type='text' value='<?php echo $n1 ?>' name='num1' placeholder="Ingrese un número"><br><br>
                    <label> Ingrese Segundo Número:</label><br><br>
                    <input type='text' value='<?php echo $n2 ?>' name='num2' placeholder="Ingrese un número"> <br><br>
                    <label> Seleccione operacion a realizar:</label><br><br>
                    <input type='submit' value='Sumar' name='Calcular'>
                    <input type='submit' value='Restar' name='Calcular'>
                    <input type='submit' value='Multiplicar' name='Calcular'>
                    <input type='submit' value='Dividir' name='Calcular'><br><br>
                    <label> Su resultado es:</label>
                    <input type='submit' name='res' value='<?php echo $resultado?>'>
                </div>
            </form>
        </div>
    </body>
</html>
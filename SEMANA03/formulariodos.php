<?php
    $n1=$_POST['txtn1'];
    $n2=$_POST['txtn2'];
    $res='';
    
    if(isset($_POST['operaciones']))
    {

        if($_POST['operaciones']=='Sumar')
    {
        $res=$n1 + $n2;
        
    }

    if($_POST['operaciones']=='Restar')
    {
        $res=$n1 - $n2;
       
    }

    if($_POST['operaciones']=='Multiplicar')
    {
        $res=$n1 * $n2;
        
    }

    if($_POST['operaciones']=='Dividir')
    {
        $res=$n1 / $n2;
        
    }
}
?>


<html>
    <head>
        <body>
            <form action = '' method='POST'>
                <table>
                    <tr>
                    <td colspan='2'><center>Formulario de operaciones</center></td>
                    </tr>
             
                    <tr><td>Ingrese Nro1</td><td><input type='text' name='txtn1' value= '<?php echo $n1; ?>'></td></tr>
                    <tr><td>Ingrese Nro2</td><td><input type='text' name='txtn2' value= '<?php echo $n2; ?>'></td></tr>

                    <tr><td colspan='2'><hr></td></tr>
                    <tr><td>Resultado</td><td><input type='text' name='txtres' value= '<?php echo $res; ?>'></td></tr>
                </table>
                <br>
                <tr>
                    <td colspan='2'></td>
                        <input type='submit' value='Sumar' name='operaciones'>
                        <input type='submit' value='Restar' name='operaciones'>
                        <input type='submit' value='Multiplicar' name='operaciones'>
                        <input type='submit' value='Dividir' name='operaciones'>
                    </tr>
            </form>
        </body>
    </head>
</html>
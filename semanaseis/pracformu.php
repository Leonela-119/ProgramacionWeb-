<?php
    $n1=$_POST['num1'];
    $n2=$_POST['num2'];
    $res='';
    
    if(isset($_POST['calcular']))
    {

        if($_POST['calcular']=='Sumar')
    {
        $res=$n1 + $n2;
        
    }

    if($_POST['calcular']=='Restar')
    {
        $res=$n1 - $n2;
       
    }

    if($_POST['calcular']=='Multiplicar')
    {
        $res=$n1 * $n2;
        
    }

    if($_POST['calcular']=='Dividir')
    {
        $res=$n1 / $n2;
        
    }
}
?>
<html>
    <head> <title> Calculadora Online </title>
<style> 
.container{
    height: 70%;
    width: 40%;
    background-color:blue;
    color:white;
    border-radius: 50px;
}
body {
  font-family: "Poppins", sans-serif;
}

.coward{
    justify-content: center; 
    align-items: center;
    text-align: center;
}
.btn{
    font-family: "Poppins", sans-serif;
    background-color: white;
    color:black;
    border-radius: 5px;
}
.lalo{
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style> 
</head>
    <body>
        <div class="lalo">
        <form class="container" action='' method='POST'>
            <div class="coward">
                <br><br>
                <label> Ingrese Primer Numero:</label>
                <br><br>
                <input type='text' class="btn" placeholder="Ingrese un numero" name='num1' value= '<?php echo $n1; ?>'>
                <br><br>
                <label> Ingrese Segundo Numero:</label>
                <br><br>
                <input type='text' class="btn" placeholder="Ingrese un numero" name='num2' value= '<?php echo $n2; ?>'><br><br>
                <label> Seleccione operacion a realizar:</label><br><br>
                <input type='submit' value='Sumar' name='calcular' class="btn">  
                <input type='submit' value='Restar' name='calcular' class="btn">  
                <input type='submit' value='Dividir' name='calcular' class="btn">  
                <input type='submit' value='Multiplicar' name='calcular' class="btn">  
                <br><br>
                <label>Su resultado es:</label>
                <input type='text' name='txtres' value= '<?php echo $res; ?>'>
            </div>
        </form>
        </div>
    </body>
</html>
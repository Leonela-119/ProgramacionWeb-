<html>
<body>
    <H4>INICIE SESION</H4>
    <form action="" method="post">
        <div>
            <label> Ingresar usuario:</label>
            <input type="text" name="user" id="user"  placeholder="Ingresar usuario">
        </div> 
        <div>
            <label> Ingresar contraseña:</label>
            <input type="text" name="contrasena"  id="contrasena"  placeholder="Ingresar contraseña">
        </div>
        <input type="submit" value="Ingresar">
    </form>
    
<?php
/* $n1="Franz2023";
$n2=90;

if($n1=="Franz2023-119")
{echo "Verdadero, si es Franz";}
else
{echo "Falso, eres un intruso.¿QUIEN ERES?";}
*/
/* */
$user = $_POST["user"];
$contrasena = $_POST["contrasena"];

if ($user == "leonela-119" && $contrasena == "yoyoyo2005") 
{
    echo "Verdaderoo, si eres tu ";
} 
else 
{
    echo "Falso, seguro eres alguien mas -.-";
}

?>
</body>
</html>
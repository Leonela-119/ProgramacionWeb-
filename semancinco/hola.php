<html>
<head> </head>
<body>
    <form action=" " method="post">
    <div>
        <label>Genero:</label> 
            <input type="text" name="genero" id="genero" placeholder="Ingrese su genero"> 
        </div><br>
        <div>
        <label> Estado Civil:</label>
            <input type="text" name="estado" id="estado" placeholder="ejemplo: s"> 

        </div><br>
        <input type="submit" value="ver">

    </form> 
<?php 
$genero=$_POST["genero"];
$estado=$_POST["estado"];
$respuesta="";

switch($estado)
        {
            case "c":
                echo " $respuesta, Usted esta casado";break;
            case "s":
                echo " $respuesta,Usted esta soltero";break;
            case "v":
                echo " $respuesta, Usted esta vuido";break;
            case "d":
                echo " $respuesta, Usted esta divorciado";break;
            default:
                echo "El dato ingresado no esta en la lista";break;
        }
switch($genero)
{
    case "F":
        echo "Femenino, $respuesta"; break;
    case "M":
        echo "Masculino, $respuesta"; break;
        default:
        echo "El dato ingresado no esta en la lista";break;
}
       
    
    







?>
</body>
</html>


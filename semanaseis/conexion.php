<?php
/* declarar una variable*/
$conexion= mysqli_connect("localhost","root","123456","bd_tecno");
$log=$_POST['user'];
$pas=$_POST['contra'];
if($conexion)
{
    if(empty($log) and empty($pas))
    {
        echo "<script>alert('debes ingresar antes de aceptar')</script>";
    }
    else
    {
        $consulta=$conexion->query("select * from usuarios where Login='$log' and Contrasena='$pas'");
        if($datos=$consulta->fetch_assoc())
        {
           echo $datos['IdUsuario']." ".$datos['Login']." ".$datos['Contrasena'];

           if($datos['activo']=='s')
           {
            echo "Bienvenido...";

            if($datos['flag']=='n')
            {
               echo "Felicidades, tu acceso fue un exito" ;
            }
            else 
            {
              echo "Lo sentimos, en este momento no puedes iniciar sesion"  ;
            }
           }
           else 
           {
            echo "Lo sentimos...Estas despedido. Atte.Lalo";
           }
        }
        else 
        {
           echo "El dato ingresado no esta registrado" ;
           header('location:registro.php');
           include('registro.php');
        }
    }
}
else 
{
    echo "Conexion fallida";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
          <h2>Iniciar Sesión</h2>
          <input type="text" name="user" value='<?php echo $log ?>' placeholder="Usuario" />
          <input type="text" name="contra" value='<?php echo $pas ?>' placeholder="Contraseña" />
          <button class="button-login">Ingresar</button>
        </form>
</body>
</html>

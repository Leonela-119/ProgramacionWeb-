<html>
<head> </head>
<body>
    <form action="" method="post">
        <div>
            <label> Ingrese su usuario:</label> <br><br>
            <input type="text" name="user" id="user" placeholder="Por favor ingresa tu usuario"> 
        </div><br>
        <div>
        <label> Ingresa tu contraseña:</label><br><br>
            <input type="text" name="contrasena" id="contrasena" placeholder="Por favor ingresa tu contraseña"> 
        </div><br>
        <input type="submit" value="Ingresar">
    </form>

<?php
$user = $_POST["user"];
$contrasena = $_POST["contrasena"];

if ($user == "leonela-119" && $contrasena == "yoyoyo2005") 
{
    echo require('Mi_Plataforma.php');
} 
else 
{
    echo require ('Registrarse.php');
}
?>
</body>
</html>
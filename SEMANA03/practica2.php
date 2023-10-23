<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Productos</title>
    <title>Practica</title>
</head>

<body>
    <h2>Registro de Producto</h2>
    <div>

        <div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>

                <input type="submit" class="btn btn-primary" value="Agregar Producto">
            </form>
        </div>
        <br>
        <?php
        session_start();

        if (!isset($_SESSION['nombres'])) {
            $_SESSION['nombres'] = array();
        }

        if (!isset($_SESSION['contador'])) {
            $_SESSION['contador'] = 0;
        }

        $registro_exitoso = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];

            $_SESSION['nombres'][] = $nombre;

            $_SESSION['contador']++;

            $registro_exitoso = true;
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Producto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($_SESSION['nombres'])) {
                    $indice = 1;
                    foreach ($_SESSION['nombres'] as $nombre) {
                        echo "<tr scope='row'>";
                        echo "<th>$indice</th>";
                        echo "<td>$nombre</td>";
                        $indice++;
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <?php
        if ($registro_exitoso) {
            echo "<p>Total de productos registrados: " . $_SESSION['contador'] . "</p>";
        }
        ?>
    </div>
</body>

</html>
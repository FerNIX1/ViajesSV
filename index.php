<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutas</title>
</head>
<body>
    <h1>Rutas Disponibles</h1>
    <?php
    include("Rutas.php");

    $ruta = new Rutas(null, null, null, null, null, null, null);
    $rutas = $ruta->Get();

    if (!empty($rutas)) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Municipio</th><th>Departamento</th><th>Desde</th><th>Hacia</th><th>Precio</th><th>Conductor</th></tr>";
        foreach ($rutas as $ruta) {
            echo "<tr>";
            echo "<td>".$ruta['id']."</td>";
            echo "<td>".$ruta['municipio']."</td>";
            echo "<td>".$ruta['departamento']."</td>";
            echo "<td>".$ruta['desde']."</td>";
            echo "<td>".$ruta['hacia']."</td>";
            echo "<td>".$ruta['precio']."</td>";
            echo "<td>".$ruta['conductor']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No hay rutas disponibles.";
    }
    ?>

    <h2>Registrar Nueva Ruta</h2>
    <form action="" method="post">
        <label for="municipio">Municipio:</label><br>
        <input type="text" id="municipio" name="municipio"><br>
        <label for="departamento">Departamento:</label><br>
        <input type="text" id="departamento" name="departamento"><br>
        <label for="desde">Desde:</label><br>
        <input type="text" id="desde" name="desde"><br>
        <label for="hacia">Hacia:</label><br>
        <input type="text" id="hacia" name="hacia"><br>
        <label for="precio">Precio:</label><br>
        <input type="text" id="precio" name="precio"><br>
        <label for="conductor">Conductor:</label><br>
        <input type="text" id="conductor" name="conductor"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $municipio = $_POST['municipio'];
        $departamento = $_POST['departamento'];
        $desde = $_POST['desde'];
        $hacia = $_POST['hacia'];
        $precio = $_POST['precio'];
        $conductor = $_POST['conductor'];

        $nueva_ruta = new Rutas(null, $municipio, $departamento, $desde, $hacia, $precio, $conductor);
        $resultado = $nueva_ruta->Post();

        if ($resultado) {
            echo "<p>Ruta agregada correctamente.</p>";
        } else {
            echo "<p>Error al agregar la ruta.</p>";
        }
    }
    ?>
</body>
</html>

<?php
   $username = "root";
   $password = "";
   $servername = "localhost";
   $database = "carlosph";
   
   $conexion = new mysqli($servername, $username, $password, $database);
   if ($conexion->connect_error) {
        die("Conexion Fallida: " . $conexion->connect_error);
   }

   if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $id_categoria = $_POST["categoria"];

        $sql = "INSERT INTO productos (nombre, precio, id_categoria) VALUES ('$nombre', '$precio', '$id_categoria')";
        if ($conexion->query($sql) === TRUE) {
            echo "<p style='color: aquamarine;'>Nuevo producto agregado con éxito.</p>";
        } else {
            echo "<p style='color: red;'>Error: " . $conexion->error . "</p>";
        }
   }

   // Obtener categorias para el dropdown
   $sql_categorias = "SELECT * FROM categorias";
   $result_categorias = $conexion->query($sql_categorias);
?>

<html>
    <head>
        <title>Página alterna de prueba</title>
    </head>
    <body>

        <h1>Registrar Productos</h1>
        <form method="POST">

            <label>Nombre del producto: </label>
            <input type="text" name="nombre" required><br>

            <label>Precio: </label>
            <input type="number" name="precio" required><br>

            <label>Categorias: </label>
            <select name="categoria" required>
                <option value="">Seleccionar una categoría</option>
                <?php
                    if($result_categorias->num_rows > 0) {
                        while($row = $result_categorias->fetch_assoc()){
                            echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                        }
                    }
                ?>
            </select><br><br>
            <input type="submit" value="Agregar Producto">

        </form>

        <h2>Lista de Productos</h2>
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoría</th>
            </tr>   
            <?php
            $sql_productos = "SELECT productos.nombre, productos.precio, categorias.nombre AS categoria 
                              FROM productos 
                              JOIN categorias ON productos.id_categoria = categorias.id";
            $result_productos = $conexion->query($sql_productos);
            if($result_productos->num_rows > 0) {
                while($row = $result_productos->fetch_assoc()){
                    echo "<tr>
                            <td>{$row['nombre']}</td>
                            <td>{$row['precio']}</td>
                            <td>{$row['categoria']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No hay productos registrados</td></tr>";
            }
            ?>
        </table>
    </body>
</html>
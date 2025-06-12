<?php
$username = "root";
$password = "";
$servername = "localhost";
$database = "carlosph";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Consultas SQL para obtener datos
$sql_edad = "SELECT id, edad FROM edades";
$sql_colonias = "SELECT id, nombre_colonia FROM colonias"; // Corregido
$sql_especialidades = "SELECT id, especialidad FROM especialidades";
$sql_generos = "SELECT id, genero FROM generos"; // Corregido

// Ejecutar consultas
$result_edad = $conexion->query($sql_edad);
$result_colonias = $conexion->query($sql_colonias);
$result_especialidades = $conexion->query($sql_especialidades);
$result_generos = $conexion->query($sql_generos);

// Insertar datos de los alumnos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escapar los datos recibidos del formulario
    $numero_control = $conexion->real_escape_string($_POST["numero_control"]);
    $nombre = $conexion->real_escape_string($_POST["nombre"]);
    $apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
    $apellido_materno = $conexion->real_escape_string($_POST["apellido_materno"]);
    $edad = $conexion->real_escape_string($_POST["edad"]);
    $colonia = $conexion->real_escape_string($_POST["colonia"]);
    $especialidad = $conexion->real_escape_string($_POST["especialidad"]);
    $genero = $conexion->real_escape_string($_POST["genero"]);
    $correo = $conexion->real_escape_string($_POST["correo"]);
    $telefono = $conexion->real_escape_string($_POST["telefono"]);
    $fecha_ingreso = $conexion->real_escape_string($_POST["fecha_ingreso"]);

    // Consulta SQL para insertar los datos
    $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, 
            id_edad, id_colonia, id_especialidad, id_genero, correo, telefono, fecha_ingreso)
            VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno',
            '$edad', '$colonia', '$especialidad', '$genero', '$correo', '$telefono', '$fecha_ingreso')";

    if ($conexion->query($sql) === TRUE) {
        echo "<p class='success'>Nuevo alumno agregado con éxito.</p>";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "<p class='error'>Error al agregar al alumno: " . $conexion->error . "</p>";
    }
}
?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Online</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/al-valenciaga-personaluseonly" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light" style="background-color: rgb(178, 240, 255);">
    <div class="container">
        <a class="navbar-brand" href="index.html">Inicio</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: black" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 1</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/basedata/carlos1.php">Mostrar datos</a><br>
                        <a class="dropdown-item" href="/basedata/carlos2.php">Mostrar datos 2</a><br>
                        <a class="dropdown-item" href="/basedata/carlos3.php">Meter datos</a><br>
                    </div>
                </li>
                <!-- Aquí van otras unidades -->
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
    <h1 class="display-4" style="background: linear-gradient(to right, rgb(0, 121, 57), rgb(75, 238, 173), rgb(9, 177, 48)); -webkit-background-clip: text; background-clip: text; color: transparent;">
        PÁGINA DE MOSTRAR DATOS RELACIONALES
    </h1>
</div>

<div class="contenedor">
    <div class="container1">
        <form method="POST" id="formulario">
            <div class="form-group">
                <label for="numero_control">Número de Control: </label>
                <input type="text" id="numero_control" name="numero_control" required><br>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre" required><br>
            </div>

            <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno: </label>
                <input type="text" id="apellido_paterno" name="apellido_paterno" required><br>
            </div>

            <div class="form-group">
                <label for="apellido_materno">Apellido Materno: </label>
                <input type="text" id="apellido_materno" name="apellido_materno" required><br>
            </div>

            <div class="form-group">
                <label for="edad">Edad: </label>
                <select name="edad" required>
                    <option value="">Seleccione una edad</option> 
                    <?php while ($row = $result_edad->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["edad"] . "</option>";
                    } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="colonia">Colonia: </label>
                <select name="colonia" required>
                    <option value="">Seleccione una colonia</option> 
                    <?php while ($row = $result_colonias->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["nombre_colonia"] . "</option>";
                    } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="especialidad">Especialidad: </label>
                <select name="especialidad" required>
                    <option value="">Seleccione una especialidad</option> 
                    <?php while ($row = $result_especialidades->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["especialidad"] . "</option>";
                    } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="genero">Género: </label>
                <select name="genero" required>
                    <option value="">Seleccione un género</option> 
                    <?php while ($row = $result_generos->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["genero"] . "</option>";
                    } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="correo">Correo: </label>
                <input type="email" id="correo" name="correo" required><br>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono: </label>
                <input type="text" id="telefono" name="telefono" required><br>
            </div>

            <div class="form-group">
                <label for="fecha_ingreso">Fecha de Ingreso: </label>
                <input type="date" id="fecha_ingreso" name="fecha_ingreso" required><br>
            </div>

            <div class="form-group">
                <input type="submit" value="Agregar Registro">
            </div>
        </form>
    </div>
</div>
</body>
</html>

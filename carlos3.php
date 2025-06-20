<?php
    ob_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="archivo.css?v=1.0">
    <link rel="stylesheet" href="table.css">


 <style> body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

h1 {
    background-color: rgb(92, 146, 247);
    color: #333;
    padding: 40px;
    font-size: 60px;
    margin: 0;
    text-align: center;
}

form {
    margin: 40px auto;
    width: 400px;
    background-color: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

label {
    font-weight: bold;
    display: block;
    margin-top: 15px;
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #addff9;
    color: #000;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 15px;
}

input[type="submit"]:hover {
    background-color: #87ceeb;
}
</style>
</head>

<body>
  <nav class="navbar navbar-light" style="background-color:rgb(178, 240, 255)">
        <div class="container">
            <a class="navbar-brand" href="index.html">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: black"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 1</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="https://carlosperez34.github.io/database/carlos1.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="https://carlosperez34.github.io/database/carlos2.php">Mostrar datos 2</a><br>
                            <a class="dropdown-item" href="https://carlosperez34.github.io/database/carlos3.php">Meter datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: black;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 2</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="https://carlosperez34.github.io/database/carlos4.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="https://carlosperez34.github.io/database/carlos5.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="https://carlosperez34.github.io/database/pokedex.html">Pokedex</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: black;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="https://carlosperez34.github.io/database/carlos7.html">Peliculas </a><br>
                            <a class="dropdown-item" href="https://carlosperez34.github.io/database/carlos8.html">Dragon Ball Z</a><br>
                            <a class="dropdown-item" href="https://carlosperez34.github.io/database/carlos9.html">Rick And Morty</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
            

        </div>
    </nav>

    <div class="jumbotron">
        <h1 class="display-4">METER DATOS</h1>
    </div>
<div class="contenedor">
    <div class="container1">

        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formulario"> 
        
        <div class="form-group"><label for="Nombre">Nombre: </label>
        <input type="text" id="Nombre" name="Nombre" required><br></div>

        <div class="form-group"><label for="Apellido">Apellido: </label>
        <input type="text" id="Apellido" name="Apellido" required><br></div>

        <div class="form-group"><label for="Peso">Peso: </label>
        <input type="text" id="Peso" name="Peso" required><br></div>

        <div class="form-group"><label for="Altura">Altura: </label>
        <input type="text" id="Altura" name="Altura" required><br></div>

        <div class="form-group"><label for="Universidad">Universidad: </label>
        <input type="text" id="Universidad" name="Universidad" required><br></div>

        <div class="form-group"><label for="Carrera">Carrera: </label>
        <input type="text" id="Carrera" name="Carrera" required><br></div>  <!-- Se cambió "Apodo" por "Carrera" -->

        <div class="form-group"><label for="Promedio">Promedio: </label>
        <input type="text" id="Promedio" name="Promedio" required><br></div>  <!-- Se cambió "Rango" por "Promedio" -->

        <div class="form-group"><input type="submit" value="Agregar registro"></div>

        </form>


        <?php 
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "estudiantes";  

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }

        function insertarEstudiante($conexion){  // Se cambió "insertarPersonaje" por "insertarEstudiante"

        if($_SERVER["REQUEST_METHOD"]=="POST") {

            var_dump($_POST);
            $Nombre = $conexion->real_escape_string($_POST ["Nombre"]);
            $Apellido = $conexion->real_escape_string($_POST ["Apellido"]);
            $Peso = $conexion->real_escape_string($_POST ["Peso"]);
            $Altura = $conexion->real_escape_string($_POST ["Altura"]);
            $Universidad = $conexion->real_escape_string($_POST ["Universidad"]);
            $Carrera = $conexion->real_escape_string($_POST ["Carrera"]);  // Se cambió "Apodo" por "Carrera"
            $Promedio = $conexion->real_escape_string($_POST ["Promedio"]);  // Se cambió "Rango" por "Promedio"

            $sql = "INSERT INTO estudiantes (Nombre, Apellido, Peso, Altura, Universidad, Carrera, Promedio) 
            VALUES ('$Nombre', '$Apellido', '$Peso', '$Altura', '$Universidad', '$Carrera', '$Promedio')";  // Se cambió "personas" por "estudiantes"
            if($conexion->query($sql)==TRUE){
                echo "<p class='success'>Nuevo estudiante agregado con éxito. </p>";
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();     
            }else{
                echo "<p class='error'>Error al agregar estudiante: " . $conexion->error . "</p>";
            }
        }
    } insertarEstudiante($conexion);  // Se cambió "insertarPersonaje" por "insertarEstudiante"

        //Mostrar Datos
        $sql = "SELECT * FROM estudiantes";  // Se cambió "personas" por "estudiantes"
        $resultado = $conexion->query($sql);


        if ($resultado->num_rows >0) {
            echo "<table class= 'table table-bordered'>";
            echo "<tr><th>Id</th><th>Nombre</th><th>Apellido</th><th>Peso</th>
            <th>Altura</th><th>Universidad</th><th>Carrera</th><th>Promedio</th></tr>";  // Se cambió "Rango" por "Carrera" y "Promedio"
            while($row = $resultado->fetch_assoc()){
                echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["Nombre"] . "</td><td>" . $row["Apellido"] . "</td>
                <td>" . $row["Peso"] . "</td><td>" . $row["Altura"] . "</td><td>" . $row["Universidad"] . "</td><td>" . $row["Carrera"] . "</td><td>" . $row["Promedio"] . "</td></tr>";
            }
            echo "</table>";
        }   else{
            echo "<p>No se encontraron registros en la base de datos</p>";
        }
        $conexion->close();
        ?>

    </div></div>

</body>
</html>
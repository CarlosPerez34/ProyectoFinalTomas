<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/al-valenciaga-personaluseonly" rel="stylesheet">  
</head>
<body>
<nav class="navbar navbar-light" style="background-color:rgb(178, 240, 255)">
        <div class="container">
            <a class="navbar-brand" href="indexx.html">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: black"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 1</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/database/carlos1.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/database/carlos2.php">Mostrar datos 2</a><br>
                            <a class="dropdown-item" href="/database/carlos3.php">Meter datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: black;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 2</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/database/carlos4.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/database/carlos5.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/database/pokedex.html">Pokedex</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: black;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/database/carlos7.html">Peliculas </a><br>
                            <a class="dropdown-item" href="/database/carlos8.html">Dragon Ball Z</a><br>
                            <a class="dropdown-item" href="/database/carlos9.html">Rick And Morty</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
            

        </div>
    </nav>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center;
        background-color: rgb(64, 28, 196);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent; font-family: 'Al Valenciaga PersonalUseOnly', sans-serif;">Cuarto Semestre Programacion</h1>
        <p class="lead"  style="text-align: center;">Esta es una pagina</p>
        <hr class="my-4">
        <p style="text-align: center;">Carlos Perez Hernandez
        </p>
        <p class="lead">

        </p>
    </div>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center;
        background-color:rgb(28, 39, 196);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;">Mostrar Datos</h1>

        <style>
            h1 {
                
                text-align: center;
                color: #000;
                margin-bottom: 20px;
            }
            
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 50px;
                border-radius: 50px;
            }
            
            th,td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid rgb(168, 181, 255);
            }
            
            tr:nth-child(even) {
                background-color: rgb(92, 146, 247);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgb(34, 0, 187);
                color: white;
            }


        
        </style>

<h1 class="display-4 font" style="text-align: center;
        background: linear-gradient(to right, rgb(12, 0, 121), orange, red);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;">NOMBRES</h1>

        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "jugadores_db";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }
        $sql = "SELECT * FROM jugadores";
        $resultado = $conexion->query($sql);
        if($resultado->num_rows >0){
            echo "<table>";
            echo "<tr><th>id</th><th>Nombre</th><th>Apodo</th><th>Equipo</th><th>Posicion</th><th>Altura</th><th>Peso</th><th>Numero</th><th>Edad</th><th>Nacionalidad</th><th>Puntos</th></tr>";
            while($row = $resultado->fetch_assoc()){
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apodo"] . "</td><td>" . 
                 $row["equipo"] . "</td><td>" . $row["posicion"] . "</td><td>" . $row["altura"] . "</td><td>" 
                  . $row["peso"] . "</td><td>" . $row["numero"] . "</td><td>" . $row["edad"] . "</td><td>"
                   . $row["nacionalidad"] . "</td><td>" . $row["puntos"] . "</td></tr>";
            }
            echo "</table>";
        }else {
            echo "No se encontaron registros en la base de datos";
        }
        $conexion->close();
        ?>
    </div>

</body>
</html>

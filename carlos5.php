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
    <h1 class="display-4 font" style="text-align: center; background-color: rgb(64, 28, 196); -webkit-background-clip: text; background-clip: text; color: transparent; font-family: 'Al Valenciaga PersonalUseOnly', sans-serif;">Cuarto Semestre Programación</h1>
    <p class="lead" style="text-align: center;">Esta es una página</p>
    <hr class="my-4">
    <p style="text-align: center;">Carlos Pérez Hernández</p>
</div>

<div class="jumbotron">
        <h1>PAGINA DE MOSTRAR DATOS RELACIONALES</h1>

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
                border-bottom: 1px solid rgb(158, 43, 8);
            }
            
            tr:nth-child(even) {
                background-color: rgb(247, 205, 92);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgb(255, 172, 64);
                color: white;
            }


        
        </style>

        <style>
            .container1{
                width: 50%;
                background-color: rgb(234, 164, 58);
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px;
                color: white;
            }

            h1 {
                text-align: center;
                color: rgb(120, 0, 0);
                margin-bottom: 15px;
            }

            form {
                flex-direction: column;
            }

            label {
                font-size: 16px;
                margin-bottom: 5px;
            }
            input[type="text"] {
                display:flex;
                justify-content:center;
                align-items:center;
                padding: 8px;
                margin-bottom: 10px;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                background-color: rgb(120, 0, 0);
                color: rgb(255, 132, 101);
            }

            input[type="submit"] {
                padding: 10px;
                background-color: #309145;
                border: none;
                color: white;
                font-size: 16px;
                border-radius: 5px;
                cursor: pointer;
                transition: background 0.3;
            }

            input[type="submit"]:hover {
                background-color: #9357;
            }
        </style>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Numero de Control</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Edad</th>
                    <th>Colonia</th>
                    <th>Especialidad</th>
                    <th>Genero</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Fecha de Ingreso</th>
                </tr>
            </thead>

        <form method="POST" id="formulario">
      <label for="numero_control"> Numero De Control </label>
      <input type="text" id="numero_control" name="numero_control" required><br> 

      <label for="nombre"> nombre </label>
      <input type="text" id="nombre" name="nombre" required><br>


      <label for="apellido_paterno"> Apellidoc Paterno </label>
      <input type="text" id="apellido_paterno" name="apellido_paterno" required><br>

      <label for="apellido_materno"> Apellido Materno  </label>
      <input type="text" id="apellido_materno" name="apellido_materno" required><br>


      <label for="edad"> Edad  </label>
      <input type="text" id="edad" name="edad" required><br>

    
        </form>   
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "escuela";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }

        $conexion->close();
    
        ?>
         

    </div>

</body>
</html>

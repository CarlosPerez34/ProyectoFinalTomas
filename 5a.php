<?php
   $username = "root";
   $password = "";
   $servername = "localhost";
   $database = "escuela";
   
   $conexion = new mysqli($servername, $username, $password, $database);
   if ($conexion->connect_error) {
        die("Conexion Fallida: " . $conexion->connect_error);
   }
   $sql_edad = "SELECT id, edad FROM edades";
   $sql_colonias = "SELECT id, FROM nombre_colonia";
   $sql_especialidades = "SELECT id, especialidad FROM especialidades";
   $sql_generos = "SELECT id, genero FROM generos";
 
   $result_edad = $conexion->query($sql_edad);
   $result_colonias  = $conexion->query($sql_colonias);
   $result_especialidades = $conexion->query($sql_especialidades);
   $result_genero = $conexion->query($sql_genero);
   
    //insertar alumnos 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
     // Recibir y escapar los datos del formulario
     var_dump ($_POST);
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
 
 
 }
  $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno,
  id_edad, id_colonia, id_especialidad, id_genero, correo, telefono, fecha_ingreso)
  VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno',
  '$id_edad', '$id_colonia', '$id_especialidad', '$id_genero', '$correo', '$telefono', '$fecha_ingreso')";
 
  if ($conexion->query($sql) == TRUE) {
     echo "<p class='success'>Nuevo alumno agrregado con éxito.</p>";
     header("Location: " . $_SERVER['PHP_SELF']);
     exit();
 } else {
     echo "<p class='error'>Error al agregar al alumno: " . $conexion->error . "</p>";
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
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: black;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 2</a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                           <a class="dropdown-item" href="/basedata/carlos4.php">Mostrar datos</a><br>
                           <a class="dropdown-item" href="/basedata/carlos5.php">Mostrar datos</a><br>
                           <a class="dropdown-item" href="/basedata/carlos6.php">Meter datos</a><br>
                       </div>
                   </li>
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: black;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 3</a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                           <a class="dropdown-item" href="/basedata/carlos7.php">Mostrar datos</a><br>
                           <a class="dropdown-item" href="/basedata/carlos8.php">Mostrar datos</a><br>
                           <a class="dropdown-item" href="/basedata/carlos9.php">Meter datos</a><br>
                           <a class="dropdown-item" href="/basedata/carlos10.php">Meter datos</a><br>
                       </div>
                   </li>
               </ul>
           </div>
       </div>
       </nav>
   
       <div class="jumbotron">
           <h1 class="display-4" style="background: linear-gradient(to right, rgb(0, 121, 57), rgb(75, 238, 173), rgb(9, 177, 48));
           -webkit-background-clip: text;background-clip: text;color: transparent;">PAGINA DE MOSTRAR DATOS RELACIONALES</h1>
       </div>
       
       <div class="contenedor">
           <div class="container1">
               
           <form method="POST" id="formulario">
               
           <div class="form-group"><label for="numero_control">Numero de Control: </label>
           <input type="text" id="numero_control" name="numero_control" requiered><br></div>
   
           <div class="form-group"><label for="nombre">Nombre: </label>
           <input type="text" id="nombre" name="nombre"requiered><br></div>
   
           <div class="form-group"><label for="apellido_paterno">Apellido Paterno: </label>
           <input type="text" id="apellido_paterno" name="apellido_paterno" requiered><br></div>
   
           <div class="form-group"><label for="apellido_materno">Apellido Materno: </label>
           <input type="text" id="apellido_materno" name="apellido_materno" requiered><br></div>
   
           <div class="form-group"><label for="edad">Edad: </label>
             <select name="edad" required>
             <option value=""> Seleccione una edad</option> 
             <?php while ($row = $result_edad->fetch_assoc()){
                echo<"option value = ' " . $row["id"] . " '> " . $row["edad"] . "</option>";
             }

             ?>
             </select>
           
   
           <div class="form-group"><label for="colonia">Colonia: </label>
           <option value=""> Seleccione una edad</option> 
             <?php while ($row = $result_colonia->fetch_assoc()){
                echo<"option value = ' " . $row["id"] . " '> " . $row["colonia"] . "</option>";
             }

             ?>
             </select>
   
           <div class="form-group"><label for="especialidad">Especialidad: </label>
           
   
           <div class="form-group"><label for="genero">Genero: </label>
           <input type="text" id="id_genero" name="id_genero" requiered><br></div>
   
           <div class="form-group"><label for="correo">Correo: </label>
           <input type="email" id="correo" name="correo" requiered><br></div>
   
           <div class="form-group"><label for="telefono">Telefono: </label>
           <input type="text" id="telefono" name="telefono" requiered><br></div>
   
           <div class="form-group"><label for="fecha_ingreso">Fecha de Ingreso: </label>
           <input type="date" id="fecha_ingreso" name="fecha_ingreso" requiered><br></div>
   
           <div class="form-group"><input type="submit" value="Agregar Registro"></div>
   
           </form>
           </html>
      

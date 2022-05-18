<?php

    include("conexion.php");

    //instanciamos la clase
    $coninser = new database;

    //llamamos la funcion de insertar
    if ( isset($_POST) && !empty($_POST) ) 
    {
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['pais'] . ' ' . $_POST['telefono'];
        $correo = $_POST['correo'];
        $fecha = $_POST['fecha'];

        $insertar = $coninser->insertar($usuario,$contraseña, $nombre, $telefono, $correo, $fecha);
        
        //si el resultado es true, quiere decir que insertó en la base de datos
        if ($insertar)
        {
            //se configura el mensaje en javascript
            echo '<script type="text/javascript">
            alert("Información enviada Correctamente");
            window.location.href="index.php";
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
            alert("Error: No se pudo enviar la información");
            </script>';
        } 
    }

    if ( isset($_GET) && !empty($_GET) ) 
    {
        $elemento = $_GET['elemento'];
        $dato = $_GET['dato'];
        

        $elimi = $coninser->eliminar($elemento,$dato);
        
        //si el resultado es true, quiere decir que insertó en la base de datos
        if ($elimi)
        {
            //se configura el mensaje en javascript
            echo '<script type="text/javascript">
            alert("Eliminado correctamente");
            window.location.href="index.php";
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
            alert("Error: No se pudo eliminar");
            </script>';
        } 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4ebeebd17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,900;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
    <title>Página Principal</title>
</head>
<body>
    <section class="redes">
        <a href="https://www.facebook.com/brayan.villamizarfernandez" target="_blank"><i class="fa-brands fa-facebook facebook"></i></a>
        <a href="https://www.instagram.com/brayanvillamizar23/" target="_blank"><i class="fa-brands fa-instagram instagram"></i></a>
        <a href="https://wa.me/3167324940?text=Bienvenido%2C%20soy%20Brayan%20Villamizar%2C%20tienes%20alguna%20duda%20sobre%20mi%20servicio%3F" target="_blank"><i class="fa-brands fa-whatsapp whatsapp"></i></a>
    </section>

    <section class="header">
        <h2 class="header_logo">Logo</h2>
        <nav class="navegacion" id="navegacion">
            <a href="#presentacion" class="nav_link">Presentacion</a>
            <a href="#agregar" class="nav_link">Agregar</a>
            <a href="#tabla" class="nav_link">Ver tabla</a>
            <a href="#" class="nav_link">Consultar</a>
            <a href="#contactenos" class="nav_link">Contactenos</a>
        </nav>
        <i class="fa-solid fa-bars menu_cel" id="menu"></i>
    </section>
    
    <header class="encabezado" id="presentacion">
        
        <section class="presentacion">
            <h1 class="presentacion_titulo">Binvenido a mi base de datos</h1>
            <h3 class="presentacion_subtitulo">Brayan Esteban Villamizar Fernandez</h3>
        </section>

        <div class="wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,160L80,176C160,192,320,224,480,234.7C640,245,800,235,960,197.3C1120,160,1280,96,1360,64L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </div>
        </svg>
    </header>

    <main>
        <section class="sec_insertar" id="agregar">
            <div class="insertar sections">
                <h2 class="insertar_titulo">Registro</h2>
                <form method="post" class="formulario">
                    <div class="form-floating">
                        <input type="text" class="form-control campo" placeholder="Ingresa el nombre" name="nombre" required>
                        <label for="nombre">Ingresa el nombre</label>
                    </div>

                    <div class="form-floating">
                        <input type="date" class="form-control campo" placeholder="Ingresa la fecha" name="fecha" required>
                        <label for="fecha">Ingresa la fecha de nacimiento</label>
                    </div>

                    <div class="input-group">
                        <select class="campo" id="pais" name="pais" required>
                            <option selected value="">Pais</option>
                            <option value="+57">+57</option>
                            <option value="+1">+1</option>
                            <option value="+53">+53</option>
                        </select>
                        <div class="form-floating form-control bor">
                            <input type="number" name="telefono" class="campo form-control" placeholder="Telefono" id="telefono" required>
                            <label for="telefono">Ingrese el telefono</label>
                        </div>
                    </div>
                    
                    <div class="form-floating">
                        <input type="email" class="form-control campo" placeholder="Ingresa el email" name="correo" required>
                        <label for="corre">Ingresa el e-mail</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control campo" placeholder="Ingresa el usuario" name="usuario" required>
                        <label for="usuario">Ingresa el usuario</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control campo" placeholder="Ingresa la contraseña" name="contraseña" required>
                        <label for="contraseña">Ingresa la contraseña</label>
                    </div>

                    <div class="botones">
                        <input type="submit" value="Registrar" class="btn btn-outline-success btn-lg me-2">
                        <input type="reset" value="Eliminar" class="btn btn-outline-danger btn-lg">
                    </div>
                </form>
            </div>
        </section>

        <section class="sec_ver_tabla" id="tabla">
            <div class="wave2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,160L80,176C160,192,320,224,480,234.7C640,245,800,235,960,197.3C1120,160,1280,96,1360,64L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </div>
            <h2 class="ver_tabla_titulo">Tabla de Registros</h2>
            <table class="table sections">
                <thead class="table-dark">
                    <tr>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Fecha nacimiento</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        //se crea la instancia
                        //Ya se creó la instancia al principio
                        //se llama a la función  leer_tabla y la guardo en una variable
                        $tabla = $coninser->leer_tabla();

                        // se realiza un while y se recorren los registro
                        while( $filaDatos = mysqli_fetch_object($tabla))
                        {
                        
                        //se descomponen los campos de la tabla y se guardan en variables
                        $usuario2 = $filaDatos->per_usuario;
                        $correo2 = $filaDatos->per_correo;
                        $nombre2 = $filaDatos->per_nombre;
                        $telefono2 = $filaDatos->per_telefono;
                        $fechanacimiento2 = $filaDatos->per_fechanacimiento;
                    ?>
                    <tr>
                        <td><?php echo $usuario2; ?></td>
                        <td><?php echo $correo2; ?></td>
                        <td><?php echo $nombre2; ?></td>
                        <td><?php echo $telefono2; ?></td>
                        <td><?php echo $fechanacimiento2; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <div class="sections">
                <form method="get" class="formulario sections">
                    <div class="datos form-floating d-flex">
                        <select name="elemento" id="elemento" class="form-select form-select-lg campo">
                            <option value="usuario">Usuario</option>
                            <option value="nombre">nombre</option>
                        </select>
                        <input type="text" name="dato" id="dato" class="form-control campo" placeholder="Eliminar" required>
                        <label for="dato">Registro a eliminar</label>
                    </div>
                    <input type="submit" value="Borrar datos" class="btn btn-outline-danger btn-lg">
                </form>
            </div>
            <div class="wave wave3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#263238" fill-opacity="1" d="M0,160L80,176C160,192,320,224,480,234.7C640,245,800,235,960,197.3C1120,160,1280,96,1360,64L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </div>
        </section>
    </main>
 
    <footer class="footer" id="contactenos">
            <section class="contenido">
                        <div class="footer_divisiones first">
                            <img src="img/Logo1.png" class="footer_logo" alt="LOGO">
                        </div>
                        
                        <div class="footer_divisiones">
                            <h2 class="footer_titulo">Programacion web</h2>
                            <p>Brayan Esteban Villamizar Fernandez</p>
                            <p>+57 3167324940</p>
                            <p>Bucaramanga - Colombia</p>
                        </div>
                    
                        <div class="footer_divisiones">
                            <p>Gracias por ver el contenido</p>
                            <p>© HeroDash - Derechos Reservados</p>
                            <p>"Lo mejor de los Booleans, es que cuando fallas, estás a un bit de la solución" ◄Anonimo► </p>
                        </div>
            </section>
    </footer>
    <script src="js/mostrar.js"></script>
</body>
</html>
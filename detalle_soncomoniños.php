<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Película</title>
    <!-- Enlace a CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
        }
        .bg-image {
            background-image: url('img/son_como_niños\ banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
            color: white;
        }
        .content {
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente */
            padding: 20px;
            border-radius: 10px;
        }
        .contenedor {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.7); /* Fondo semi-transparente para la barra de navegación */
        }
        .contenedor nav a {
            color: white;
            margin-right: 10px;
            text-decoration: none;
        }
        .contenedor nav a.activo {
            font-weight: bold;
        }
        .logotipo {
            color: white;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="bg-image d-flex flex-column justify-content-between">
        <div class="contenedor">
            <h2 class="logotipo">418FLIX</h2>
            <nav>
                <a href="index.php" class="activo">Volver</a>
             
            </nav>
        </div>
        <div class="content text-center">
        <?php
// Nombre de la película deseada
$nombre_pelicula = 'Son_como_ninos';

// Ejecutar la consulta en Prolog y obtener el resultado
$resultado_prolog = shell_exec('swipl -s swish.pl -g "pelicula(\'' . $nombre_pelicula . '\', Detalles), write(Detalles), halt." -t halt');

// Mostrar la información de la película
echo $resultado_prolog;
?>


        </div>
    </div>

    <!-- Enlace a JavaScript de Bootstrap y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>










<?php
// Obtener el nombre de la película solicitada
$nombre_pelicula = isset($_GET['pelicula']) ? $_GET['pelicula'] : '';

// Ejecutar la consulta a Prolog y obtener la información de la película
$resultado_prolog = shell_exec('swipl -s swish.pl -g "informacion_pelicula(\'' . $nombre_pelicula . '\', Titulo, Sinopsis, Actores, Duracion), writef(\'%w|%w|%w|%w\', [Titulo, Sinopsis, Actores, Duracion]), halt." -t halt');

// Separar la información obtenida en campos y crear un array asociativo
list($titulo, $sinopsis, $actores, $duracion) = explode('|', $resultado_prolog);
$pelicula = array(
    'titulo' => $titulo,
    'sinopsis' => $sinopsis,
    'actores' => $actores,
    'duracion' => $duracion
);

// Devolver la información de la película en formato JSON
echo json_encode($pelicula);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>418FLIX</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h2 class="logotipo">418FLIX</h2>
            <nav>
                <a href="index.php" class="activo">Inicio</a>
                <a href="#" id="recomendado-link">Recomendado</a>
                <a href="#" id="terror-link">Terror</a>
                <a href="#" id="comedia-link">Comedia</a>
                <a href="#" id="accion-link">Accion</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="pelicula-principal">
            <div class="contenedor">
            <?php
            // Ejecutar la consulta en Prolog y obtener la sinopsis de la película
            $resultado_prolog = shell_exec('swipl -s swish.pl -g "sinopsis_pelicula(\'Deadpool\', Sinopsis), write(Sinopsis), halt." -t halt');

            // Limpiar el resultado obtenido para obtener solo la información
            $sinopsis_pelicula = trim($resultado_prolog);

            // Mostrar la sinopsis de la película
            echo "<h3 class=\"titulo\">Deadpool</h3>";
            echo "<p>$sinopsis_pelicula</p>";
            ?>
            <button role="button" class="boton"><i class="fas fa-play"></i>Reproducir</button>
            <a href="detalle_deadpool.php?pelicula=Deadpool" class="boton"><i class="fas fa-info-circle"></i>Más información</a>

            </div>
        </div>
    </main>

    <div class="carousel" style="background: linear-gradient(rgba(170, 105, 170, 0.5), rgba(0, 0, 0, 0.5));">
        <h1 id="recomendado" style="margin-left: 5%; color: white;">Recomendado</h1><br>
        <div class="carousel-container">
            <div class="carousel">
                <div class="carousel-container" style="margin-left: 15%;">

                        <a href="detalle_annabelle.php?pelicula=Annabelle">
                        <img class="carousel-slide" src="img/anabelle.jpg" alt="Slide 2" width="20%" height="20%">
                        </a>

                        <a href="detalle_deadpool.php?pelicula=Deadpool">
						<img class="carousel-slide" src="img/deadpool.jpg" alt="Slide 3" width="20%" height="20%">
                        </a>

                        <a href="detalle_el cadáver de la novia.php?pelicula=El_cadáver_de_la_novia">
						<img class="carousel-slide" src="img/novia.jpg" alt="Slide 4" width="20%" height="20%">
                        </a>

                        <a href="detalle_soncomoniños.php?pelicula=Son como niños">
						<img class="carousel-slide" src="img/son como niños.jpg" alt="Slide 5" width="20%" height="20%">
                        </a>

                        <a href="detalle_martyrs.php?pelicula=Martyrs">
						<img class="carousel-slide" src="img/martires.jpg" alt="Slide 6" width="20%" height="20%">
                        </a>

                        <a href="detalle_zombies.php?pelicula=A_la_mierda_con_los_zombies">
						<img class="carousel-slide" src="img/a la los zombies.jpg" alt="Slide 7" width="20%" height="20%">
                        </a>

						<a href="detalle_Mad_Max.php?pelicula=Mad_Max:Fury_Road">
                        <img class="carousel-slide" src="img/mad_max.jpg" alt="Slide 8" width="20%" height="20%">
                        </a>

                        <a href="detalle_avengers.php?pelicula=Avengers_Endgame">
						<img class="carousel-slide" src="img/endgame.jpg" alt="Slide 9" width="20%" height="20%">
                        </a>

                </div>
            </div>
        </div>
    </div>

    <div class="carousel" style="background: linear-gradient(rgba(34, 26, 19, 0.5), rgba(0, 0, 0, 0.5));">
        <h1 id="terror" style="margin-left: 5%; color: white;">Terror</h1><br>
        <div class="carousel-container">
            <div class="carousel">
                <div class="carousel-container" style="margin-left: 15%;">
                  

                    <a href="detalle_conjuro.php?pelicula=El_Conjuro">
                    <img class="carousel-slide" src="img/el conjuro.jpg" alt="Slide 1"width="20%" height="20%">
                    </a>

					<a href="detalle_annabelle.php?pelicula=Annabelle">
                    <img class="carousel-slide" src="img/anabelle.jpg" alt="Slide 2" width="20%" height="20%">
                    </a>

                    <a href="detalle_253.php?pelicula=Archivo_253">
					<img class="carousel-slide" src="img/253.jpg" alt="Slide 3" width="20%" height="20%">
                    </a>

                        <a href="detalle_el cadáver de la novia.php?pelicula=El_cadáver_de_la_novia">
						<img class="carousel-slide" src="img/novia.jpg" alt="Slide 4" width="20%" height="20%">
                        </a>

                        <a href="detalle_martyrs.php?pelicula=Martyrs">
						<img class="carousel-slide" src="img/martires.jpg" alt="Slide 6" width="20%" height="20%">
                        </a>

					
                        <a href="detalle_conjuro.php?pelicula=El_Conjuro">
                    <img class="carousel-slide" src="img/el conjuro.jpg" alt="Slide 1"width="20%" height="20%">
                    </a>


					<a href="detalle_annabelle.php?pelicula=Annabelle">
                    <img class="carousel-slide" src="img/anabelle.jpg" alt="Slide 2" width="20%" height="20%">
                    </a>

                    <a href="detalle_253.php?pelicula=Archivo_253">
					<img class="carousel-slide" src="img/253.jpg" alt="Slide 3" width="20%" height="20%">
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="carousel" style="background: linear-gradient(rgba(45, 42, 218, 0.5), rgba(0, 0, 0, 0.5));">
        <h1 style="margin-left: 5%; color: white;" id="comedia">Comedia</h1><br>
        <div class="carousel-container">
            <div class="carousel">
                <div class="carousel-container" style="margin-left: 15%;">

                    <a href="detalle_Supercool.php?pelicula=Supercool">
                    <img class="carousel-slide" src="img/supercool.jpg" alt="Slide 1"width="20%" height="20%">
                    </a>

					    <a href="detalle_zombies.php?pelicula=A_la_mierda_con_los_zombies">
						<img class="carousel-slide" src="img/a la los zombies.jpg" alt="Slide 7" width="20%" height="20%">
                        </a>

                        <a href="detalle_soncomoniños.php?pelicula=Son como niños">
						<img class="carousel-slide" src="img/son como niños.jpg" alt="Slide 5" width="20%" height="20%">
                        </a>

                        <a href="detalle_ted.php?pelicula=Ted">
                        <img class="carousel-slide" src="img/ted.jpg" alt="Slide 4" width="20%" height="20%">
                        </a>


                        <a href="detalle_Zombieland.php?pelicula=Zombieland">
                        <img class="carousel-slide" src="img/zombieland.jpg" alt="Slide 5" width="20%" height="20%">
                        </a>

                        <a href="detalle_Supercool.php?pelicula=Supercool">
                        <img class="carousel-slide" src="img/supercool.jpg" alt="Slide 1"width="20%" height="20%">
                        </a>

                        <a href="detalle_zombies.php?pelicula=A_la_mierda_con_los_zombies">
						<img class="carousel-slide" src="img/a la los zombies.jpg" alt="Slide 7" width="20%" height="20%">
                        </a>


                        <a href="detalle_soncomoniños.php?pelicula=Son como niños">
						<img class="carousel-slide" src="img/son como niños.jpg" alt="Slide 5" width="20%" height="20%">
                        </a>

                </div>
            </div>
        </div>
    </div>

    <div class="carousel" style="background: linear-gradient(rgb(192, 22, 22), rgba(0, 0, 0, 0.5));">
        <h1 style="margin-left: 5%; color: white;" id="accion">Acción</h1><br>
        <div class="carousel-container">
            <div class="carousel">
                <div class="carousel-container" style="margin-left: 15%;">

                        <a href="detalle_Mad_Max.php?pelicula=Mad_Max:Fury_Road">
                        <img class="carousel-slide" src="img/mad_max.jpg" alt="Slide 8" width="20%" height="20%">
                        </a>

                        <a href="detalle_batman.php?pelicula=The_Dark_Knight">
					    <img class="carousel-slide" src="img/batman.jpg" alt="Slide 2"width="20%" height="20%">
                        </a>

                        <a href="detalle_deadpool.php?pelicula=Deadpool">
						<img class="carousel-slide" src="img/deadpool.jpg" alt="Slide 3" width="20%" height="20%">
                        </a>

                        <a href="detalle_matrix.php?pelicula=The_Matrix">
    					<img class="carousel-slide" src="img/the-matrix.jpg" alt="Slide 4" width="20%" height="20%">
                        </a>

                        <a href="detalle_avengers.php?pelicula=Avengers_Endgame">
						<img class="carousel-slide" src="img/endgame.jpg" alt="Slide 9" width="20%" height="20%">
                        </a>


					    <a href="detalle_Mad_Max.php?pelicula=Mad_Max:Fury_Road">
                        <img class="carousel-slide" src="img/mad_max.jpg" alt="Slide 8" width="20%" height="20%">
                        </a>

					    <a href="detalle_batman.php?pelicula=The_Dark_Knight">
					    <img class="carousel-slide" src="img/batman.jpg" alt="Slide 2"width="20%" height="20%">
                        </a>

					    <a href="detalle_deadpool.php?pelicula=Deadpool">
						<img class="carousel-slide" src="img/deadpool.jpg" alt="Slide 3" width="20%" height="20%">
                        </a>

                </div>
            </div>
        </div>
    </div>
	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>

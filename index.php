<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------CSS---->
    <link rel="stylesheet" href="estilos_index.css">
    <title>Modulo 3</title>
</head>

<body>
    <header>
        <div id="titulo">
            <h1>Actividad 1 - PHP</h1>
        </div>    </header>
        <section>
            <div id="preguntas_respuestas">
                <?php 
                $pregunta_uno = "¿En qué diferencian las páginas dinámicas de las estáticas?" ;
                $pregunta_dos = "¿Por qué decimos que PHP es un lenguaje del lado del servidor?" ;
                $pregunta_tres = "¿Cuáles son los delimitadores de PHP?" ;
                $fecha = "10/01/22" ;

                $respuesta_uno = "Las estáticas interactuan con el usuario a través de hipervínculos, ya las dinámicas contienen aplicaciones dentro de la mismo, permitiendo una mayor interactividad del usuario.";
                $respuesta_dos = "Porque ejecuta el servidor web antes que de que sea enviado a Internet.";
                $respuesta_tres = "Los delimitadores de PHP son:  <_?_php__?_>";
                ?>
            </div>
            <div id="cuestionario">
                <ul>
                    <li class="pregunta_uno">1.
                        <?php echo $pregunta_uno; ?> 
                    </li>
                    <li class="respuesta_uno"> <?php echo $respuesta_uno; ?></li>
                    <li class="pregunta_dos">2.
                        <?php echo $pregunta_dos; ?>
                    </li>
                    <li class="respuesta_dos"><?php echo $respuesta_dos; ?></li>
                    <li class="pregunta_tres">3.
                        <?php echo $pregunta_tres; ?>
                    </li>
                    <li class="respuesta_tres"><?php echo $respuesta_tres; ?></li>
                </ul>
            </div>
        </section>
        <footer>
            <div Id="creditos">
            <p class="devOps">Desarrollado por PΔSINI™ </p>
        </div>
        </footer>

</body>

</html>
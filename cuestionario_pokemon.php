<?php
// procesar_cuestionario.php

$respuestas_correctas = [
    'p1' => 'Veneno',
    'p2' => 'Sorpresa',
    'p3' => '025',
    'p4' => 'Espeon',
    'p5' => 'Beedrill',
    'p6' => 'Roca del Rey',
    'p7' => 'Llovizna',
    'p8' => 'Drednaw',
    'p9' => 'Somnífero',
    'p10' => 'Ciudad Verde',
];

$puntuacion = 0;

foreach ($respuestas_correctas as $pregunta => $respuesta_correcta) {
    if (isset($_POST[$pregunta]) && $_POST[$pregunta] === $respuesta_correcta) {
        $puntuacion++;
    }
}

echo "<h1>Resultado del Cuestionario</h1>";
echo "<p>Has obtenido una puntuación de $puntuacion / 10.</p>";
echo '<a href="index_es.php"><button>Volver al inicio</button></a>';

?>




<html>
<head>
    <title>Cuestionario Pokémon</title>
</head>
<body>

<h2>¿Cuánto sabes de Pokémon?</h2>

<form method="POST" action="procesar_cuestionario.php"> <p>1/ ¿Cuál de estos tipos es débil contra el tipo Hada?</p>
<input type="radio" name="p1" value="Lucha">Lucha</input>
<input type="radio" name="p1" value="Bicho">Bicho</input>
<input type="radio" name="p1" value="Veneno">Veneno</input>  <input type="radio" name="p1" value="Acero">Acero</input>
<br>

<p>2/ ¿Cuál de estos movimientos tiene más prioridad?</p>
<input type="radio" name="p2" value="Sorpresa">Sorpresa</input>
<input type="radio" name="p2" value="Velocidad Extrema">Velocidad Extrema</input> <input type="radio" name="p2" value="Tóxico">Tóxico</input>
<input type="radio" name="p2" value="Puño bala">Puño bala</input>
<br>

<p>3/ ¿Cuál es el número de la Pokédex Nacional de Pikachu?</p>
<input type="radio" name="p3" value="001">001</input>
<input type="radio" name="p3" value="025">025</input> <input type="radio" name="p3" value="151">151</input>
<input type="radio" name="p3" value="133">133</input>
<br>

<p>4/ ¿Cuál de estas es una evolución de Eevee introducida en la Segunda Generación (Johto)?</p>
<input type="radio" name="p4" value="Vaporeon">Vaporeon</input>
<input type="radio" name="p4" value="Glaceon">Glaceon</input>
<input type="radio" name="p4" value="Espeon">Espeon</input> <input type="radio" name="p4" value="Sylveon">Sylveon</input>
<br>

<p>5/ ¿Cuál de los siguientes Pokémon es de tipo Bicho/Volador?</p>
<input type="radio" name="p5" value="Beedrill">Beedrill</input>  <input type="radio" name="p5" value="Scyther">Scyther</input>
<input type="radio" name="p5" value="Yanma">Yanma</input>
<input type="radio" name="p5" value="Heracross">Heracross</input>
<br>

<p>6/ ¿Qué objeto necesita Slowpoke para evolucionar a Slowking?</p>
<input type="radio" name="p6" value="Roca del Rey">Roca del Rey</input> <input type="radio" name="p6" value="Escama Dragón">Escama Dragón</input>
<input type="radio" name="p6" value="Piedra Solar">Piedra Solar</input>
<input type="radio" name="p6" value="Piedra Día">Piedra Día</input>
<br>

<p>7/ ¿Qué tipo de clima invoca el movimiento 'Danza Lluvia'?</p>
<input type="radio" name="p7" value="Sol Intenso">Sol Intenso</input>
<input type="radio" name="p7" value="Llovizna">Llovizna</input> <input type="radio" name="p7" value="Tormenta de Arena">Tormenta de Arena</input>
<input type="radio" name="p7" value="Granizo">Granizo</input>
<br>

<p>8/ ¿Cuál fue el primer Pokémon en recibir una forma Gigamax?</p>
<input type="radio" name="p8" value="Charizard">Charizard</input>
<input type="radio" name="p8" value="Pikachu">Pikachu</input>
<input type="radio" name="p8" value="Meowth">Meowth</input>
<input type="radio" name="p8" value="Drednaw">Drednaw</input> <br>

<p>9/ ¿Qué ataque suele tener el efecto de dejar al rival 'Dormido'?</p>
<input type="radio" name="p9" value="Somnífero">Somnífero</input>
<input type="radio" name="p9" value="Hipnosis">Hipnosis</input>
<input type="radio" name="p9" value="Bostezo">Bostezo</input>
<input type="radio" name="p9" value="Descanso">Descanso</input>
<br>

<p>10/ ¿Cuál de estas ciudades es la primera que visitas en la región de Kanto?</p>
<input type="radio" name="p10" value="Ciudad Plateada">Ciudad Plateada</input>
<input type="radio" name="p10" value="Pueblo Paleta">Pueblo Paleta</input>
<input type="radio" name="p10" value="Ciudad Verde">Ciudad Verde</input> <input type="radio" name="p10" value="Pueblo Ladera">Pueblo Ladera</input>
<br>
<br>

<input type="submit" value="Calcular Puntuación">

</form>

</body>
</html>
<?php

function pptls($mano1, $mano2) {
    // Valores de cada mano
    $manos = [
        0 => "Piedra",
        1 => "Papel",
        2 => "Tijera", 
        3 => "Lagarto", 
        4 => "Spock"
    ];

    // Reglas del juego: la mano y a que otras manos les gana
    $reglas = [
        0 => [2, 3],
        1 => [0, 4],
        2 => [1, 3],
        3 => [1, 4],   
        4 => [0, 2] 
    ];

    // Identificar a los jugadores e imprimir que manos usaron en base a los parametros insertados
    $jugador1 = $manos[$mano1];
    $jugador2 = $manos[$mano2];

    echo "Jugador 1 uso: $jugador1\n";
    echo "Jugador 2 uso: $jugador2\n";

    // Determinar el ganador
    if ($mano1 == $mano2) {
        // Empate
        echo "¡No tiene ningún efecto!\n"; 
        // in_array sirve para ver si existe un valor en un arreglo, en este caso, si el jugador 2 
        // es vencido por la mano del jugador 1 segun las reglas del juego
    } elseif (in_array($mano2, $reglas[$mano1])) {
        echo "¡Es muy efectivo! Jugador 1 gana!\n";
    } else {
        echo "¡Es muy efectivo! Jugador 2 gana!\n";
    }
}

// Verificar los argumentos
if (isset($argv[1]) && isset($argv[2])) {
    $mano1 = intval($argv[1]);
    $mano2 = intval($argv[2]);

    // Llamar a la función con las manos de los jugadores
    pptls($mano1, $mano2);
} else {
    echo "Por favor, ingrese correctamente las manos de los jugadores.\n";
}
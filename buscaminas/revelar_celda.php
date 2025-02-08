<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'));

    $fila = $data->fila;
    $columna = $data->columna;

    session_start();
    $tablero = $_SESSION['tablero'];

    $respuesta = [
        'valor' => $tablero[$fila][$columna],
    ];

    // Si el usuario hace clic en una mina, revelar todas las minas
    if ($tablero[$fila][$columna] === -1) {
        $minas = [];
        foreach ($tablero as $i => $filaArray) {
            foreach ($filaArray as $j => $valor) {
                if ($valor === -1) {
                    $minas[] = ['fila' => $i, 'columna' => $j];
                }
            }
        }
        $respuesta['minas'] = $minas;
        $respuesta['gameOver'] = true; // Indicar que el juego ha terminado
    }

    echo json_encode($respuesta);
}
?>
<?php

include 'Usuario.php';

$usuarioDAO = new UsuarioDAO();

$bugs = new Usuario();
$bugs->setNombres("Bugs");
$bugs->setApellidos("Bunny");
$bugs->setCorreo("bugsbunny@wb.com");

$lola = new Usuario();
$lola->setNombres("Lola");
$lola->setApellidos("Bunny");
$lola->setCorreo("lolabunny@wb.com");

$carla = new Usuario();
$carla->setNombres("Antony");
$carla->setApellidos("Mier");
$carla->setCorreo("antonym@wb.com");

$poposino = new Usuario();
$poposino->setNombres("Julio");
$poposino->setApellidos("Cupul");
$poposino->setCorreo("juliomc@wb.com");

$usuarioDAO->insertar($bugs);
$usuarioDAO->insertar($lola);
$usuarioDAO->insertar($antony);
$usuarioDAO->insertar($julio);

$usuarios = $usuarioDAO->buscarTodos();

foreach ($usuarios as $usuario) {
    echo $usuario->getNombres() . " " . $usuario->getApellidos() . " " . $usuario->getCorreo() . "<br>";
}

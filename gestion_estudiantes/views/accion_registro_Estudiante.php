<?php
require '../models/Estudiante.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/EstudianteController.php';

use Estudiante\Estudiante;
use EstudianteController\EstudianteController;

$Estudiante = new Estudiante();
$Estudiante->setCodigo($_POST['codigo']);
$Estudiante->setNombre($_POST['nombres']);
$Estudiante->setApellido($_POST['apellidos']);

$EstudianteController = new EstudianteController();
$resultado = $EstudianteController->create($Estudiante);
if ($resultado) {
    echo '<h1>Estudiantes registrado</h1>';
} else {
    echo '<h1>No se pudo registrar el Estudiante</h1>';
}

<?php
require '../models/Estudiante.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/EstudianteController.php';

use estudiante\Estudiante;
use estudianteController\EstudianteController;

$Estudiante = new Estudiante();
$Estudiante->setCodigo($_POST['codigo']);
$Estudiante->setNombre($_POST['nombres']);
$Estudiante->setApellido($_POST['apellidos']);

$EstudianteController = new EstudianteController();
$resultado = $EstudianteController->updateEstudiante($Estudiante->getCodigo(),$Estudiante);
if ($resultado) {
    echo '<h1>Estudiantes modificado</h1>';
} else {
    echo '<h1>No se pudo modificar el Estudiante</h1>';
}
?>
<br>
<a href="../index.php">Volver al inicio</a>



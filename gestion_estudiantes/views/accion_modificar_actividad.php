<?php
require '../models/Estudiante.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/EstudianteController.php';
require '../models/Actividades.php';

use estudiante\Estudiante;
use estudianteController\EstudianteController;
use actividad\Actividad;

$Actividad = new Actividad();
$id = $_GET['id'];
$codigo = $_POST['codigo'];
$nombres = $_GET['nombres'];
$Actividad->setDescripcion($_POST['descripcion']);
$Actividad->setNota($_POST['nota']);


$EstudianteController = new EstudianteController();
$resultado = $EstudianteController->updateActividad($id,$Actividad);
if ($resultado) {
    echo '<h1>Actividad modificada</h1>';
} else {
    echo '<h1>No se pudo modificar la actividad</h1>';
}
echo '<a href="notas_estudiante.php?codigo='.$codigo.'&nombres='.$nombres.'.">Volver al inicio</a>'
?>




<?php
require '../models/Estudiante.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/EstudianteController.php';
require '../models/Actividades.php';
require '../controllers/ActividadBaseController.php';
require '../controllers/ActividadController.php';


use actividadController\ActividadController;

$actividadController = new ActividadController();
$codigo = $_GET['codigo'];
$nombres = $_GET['nombres'];
$resultado = $actividadController->deleteAct($_GET['id']);
if ($resultado) {
    echo '<h1>Actividad borrado</h1>';
} else {
    echo '<h1>No se pudo borrar la Actividad</h1>';
}
echo '<a href="notas_estudiante.php?codigo=' . $codigo . '&nombres=' . $nombres . '"..>Volver al inicio</a>'
    ?>
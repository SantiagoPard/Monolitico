<?php
require '../models/Estudiante.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/EstudianteController.php';
require '../models/Actividades.php';

use estudianteController\EstudianteController;

$estudianteController = new EstudianteController();
$resultado = $estudianteController->deleteAct($_GET['id']);
if ($resultado) {
    echo '<h1>Actividad borrado</h1>';
} else {
    echo '<h1>No se pudo borrar la Actividad</h1>';
}

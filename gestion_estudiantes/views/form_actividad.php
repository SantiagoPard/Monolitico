<?php
require '../models/Estudiante.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/EstudianteController.php';
require '../models/Actividades.php';
require '../controllers/ActividadBaseController.php';
require '../controllers/ActividadController.php';

use actividad\Actividad;
use actividadController\ActividadController;

$id = empty($_GET['id']) ? '' : $_GET['id'];
$codigo = $_GET['codigo'];
$nombres = $_GET['nombres'];
$titulo = 'Registrar Actividad';
$urlAction = "accion_registro_actividad.php?nombres=$nombres";
$actividad = new Actividad();
$readOnly = 'readonly style="opacity:0.5; cursor:default;  background-color: #eee;"';

if (!empty($id)) {
    $titulo = 'Modificar Actividad';
    $urlAction = "accion_modificar_actividad.php?id=$id&nombres=$nombres";
    $ActividadController = new ActividadController();
    $actividad = $ActividadController->readRowAct($id);
    $readOnly = 'readonly' . ' style="opacity:0.5; cursor:default;  background-color: #eee;"';

}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        textarea {
            resize: none;
        }
    </style>
</head>

<body>
    <h1>
        <?php echo $titulo; ?>
        <br>
        <h2>
            codigo:
            <?php echo $codigo; ?>
        </h2>
        <br>
        <h3>
            Nombres:
            <?php echo $nombres; ?>
        </h3>
    </h1>
    <form action="<?php echo $urlAction; ?>" method="post">
        <label>
            <span>codigo estudiante:</span>
            <input type="number" name="codigo" value="<?php echo $codigo; ?>" required <?php echo $readOnly ?>>
            <?php echo print_r($codigo) ?>
        </label>
        <br>
        <label>
            <span>Descripcion</span>
            <textarea rows="5" cols="70" name="descripcion"
                required><?php echo $actividad->getDescripcion(); ?></textarea>
        </label>
        <br>
        <label>
            <span>Nota</span>
            <input type="number" step="0.01" name="nota" value="<?php echo $actividad->getNota(); ?>" max="5" min="0"
                required>
        </label>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>
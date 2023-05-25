<?php
require '../models/Estudiante.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/EstudianteController.php';
require '../models/Actividades.php';

use estudiante\Estudiante;
use estudianteController\EstudianteController;
use actividad\Actividad;

$id = empty($_GET['id']) ? '' : $_GET['id'];
$codigo = $_GET['codigo'];
$titulo = 'Registrar Actividad';
$urlAction = "accion_registro_actividad.php";
$Actividad = new Actividad();
$Estudiante = new Estudiante();
$readOnly = 'readonly style="opacity:0.5; cursor:default;  background-color: #eee;"';
print_r($codigo);

// if (!empty($codigo)) {
//     $titulo = 'Modificar Estudiante';
//     $urlAction = "accion_modificar_Estudiante.php";
//     $EstudianteController = new EstudianteController();
//     $Estudiante = $EstudianteController->readRow($codigo);
//     $readOnly = 'readonly'.' style="opacity:0.5; cursor:default;  background-color: #eee;"';

// }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php echo $titulo; ?>
    </h1>
    <form action="<?php echo $urlAction; ?>" method="post">
        <label>
            <span>codigo estudiante: </span>
            <input type="number" name="codigo" value="<?php echo $codigo; ?>" required <?php echo $readOnly ?>>
        </label>
        <br>
        <label>
            <span>Descripcion</span>
            <input type="text" name="descripcion" value="<?php echo $Actividad->getDescripcion(); ?>" required>
        </label>
        <br>
        <label>
            <span>Nota</span>
            <input type="number" name="nota" value="<?php echo $Actividad->getNota(); ?>" max="5" min="0" required>
        </label>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>
<?php
require '../models/Estudiante.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/EstudianteController.php';

use estudiante\Estudiante;
use estudianteController\EstudianteController;

$codigo = empty($_GET['codigo']) ? '' : $_GET['codigo'];
$titulo = 'Registrar Estudiante';
$urlAction = "accion_registro_Estudiante.php";
$Estudiante = new Estudiante();
$readOnly = '';

if (!empty($codigo)) {
    $titulo = 'Modificar Estudiante';
    $urlAction = "accion_modificar_Estudiante.php";
    $EstudianteController = new EstudianteController();
    $Estudiante = $EstudianteController->readRow($codigo);
    $readOnly = 'readonly'.' style="opacity:0.5; cursor:default;  background-color: #eee;"';
    
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
    <form action="<?php echo $urlAction;?>" method="post">
        <label>
            <span>codigo:</span>
            <input type="number" name="codigo"  min="1" value="<?php echo $Estudiante->getCodigo(); ?>"  required <?php echo $readOnly?>>
        </label>
        <br>
        <label>
            <span>Nombres:</span>
            <input type="text" name="nombres" value="<?php echo $Estudiante->getNombre(); ?>" required>
        </label>
        <br>
        <label>
            <span>Apellidos:</span>
            <input type="text" name="apellidos" value="<?php echo $Estudiante->getApellido(); ?>" required>
        </label>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>
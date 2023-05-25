<?php
require '../models/Estudiante.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/EstudianteController.php';
require '../models/Actividades.php';

use baseControler\BaseController;
use estudiante\Estudiante;
use estudianteController\EstudianteController;
use actividad\Actividad;

$codigo = $_GET['codigo'];
$nombres = $_GET['nombres'];
$estudianteController = new EstudianteController();
$actividades = $estudianteController->readNotas($codigo);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Notas</h1>
        <a href="form_actividad.php?codigo=<?php echo $codigo ?>">Agregar Actividad</a>
        <h1>estudiante:
            <?php echo $nombres; ?>
        </h1>
        <h2>codigo:
            <?php echo $codigo; ?>
        </h2>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>descripcion</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($actividades as $actividad) {
                    echo '<tr>';
                    echo '  <td>' . $actividad->getId() . '</td>';
                    echo '  <td>' . $actividad->getDescripcion() . '</td>';
                    echo '  <td>' . $actividad->getNota() . '</td>';
                    echo '  <td>';
                    echo '      <a href="form_actividad.php?id=' . $actividad->getId() . '&codigo=' . $codigo . '">modificar</a>';
                    echo '      <a href="accion_borrar_actividad.php?id=' . $actividad->getId() . '">borrar</a>';
                    echo '  </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>
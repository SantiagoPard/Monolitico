<?php
require 'models/estudiante.php';
require 'controllers/conexionDbController.php';
require 'controllers/baseController.php';
require 'controllers/EstudianteController.php';

use estudianteController\EstudianteController;

$estudianteController = new EstudianteController();

$estudiantes = $estudianteController->readEstudiantes();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <main>
        <h1>Lista de estudiantes</h1>
        <a href="views/form_estudiante.php">Registrar estudiante</a>
        <table class="tabla">
            <thead>
                <tr>
                    <th>codigo</th>
                    <th>Nombres</th>
                    <th>apellidos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($estudiantes as $estudiante) {
                    echo '<tr>';
                    echo '  <td>' . $estudiante->getCodigo() . '</td>';
                    echo '  <td>' . $estudiante->getNombre() . '</td>';
                    echo '  <td>' . $estudiante->getApellido() . '</td>';
                    echo '  <td>';
                    echo '      <a href="views/form_estudiante.php?codigo=' . $estudiante->getCodigo() . '">modificar</a>';
                    echo '      <a href="views/accion_borrar_estudiante.php?codigo=' . $estudiante->getCodigo() . '">borrar</a>';
                    echo '      <a href="views/notas_estudiante.php?codigo=' . $estudiante->getCodigo() . '&nombres=' . $estudiante->getNombre() . '">Notas</a>';
                    echo '  </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>
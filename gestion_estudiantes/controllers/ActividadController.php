<?php 
namespace actividadController;

use conexionDb\ConexionDbController;
use actividad\Actividad;

class ActividadController extends ActividadBaseController{
    function readNotas($codigo)
    {
        $sql = 'select id,descripcion,nota from estudiantes,actividades ';
        $sql .= 'WHERE estudiantes.codigo=' . $codigo . '&&  estudiantes.codigo = actividades.codigoEstudiante;';
        $conexiondb = new ConexionDbController();
        $resultadoSQL = $conexiondb->execSQL($sql);
        $actividades = [];
        while ($registro = $resultadoSQL->fetch_assoc()) {
            $actividad = new Actividad();
            $actividad->setId($registro['id']);
            $actividad->setDescripcion($registro['descripcion']);
            $actividad->setNota($registro['nota']);
            array_push($actividades, $actividad);
        }
        $conexiondb->close();
        return $actividades;
    }
    function createActividad($actividad, $codigo)
    {
        $sql  = 'insert into actividades ';
        $sql .= '(descripcion,nota,codigoEstudiante) VALUES ';
        $sql .= '("';
        $sql .= $actividad->getDescripcion() . '",';
        $sql .= '' . $actividad->getNota() . ',';
        $sql .= '' . $codigo . '';
        $sql .= ')';
        $conexiondb = new ConexionDbController();
        $resultadoSQL = $conexiondb->execSQL($sql);
        $conexiondb->close();
        return $resultadoSQL;
    }
    function readRowAct($id){
        $sql = 'select * from actividades';
        $sql .= ' where id=' . $id;
        $conexiondb = new ConexionDbController();
        $resultadoSQL = $conexiondb->execSQL($sql);
        $actividad = new Actividad();
        while ($registro = $resultadoSQL->fetch_assoc()) {
            $actividad->setDescripcion($registro['descripcion']);
            $actividad->setNota($registro['nota']);
        }
        $conexiondb->close();
        return $actividad;
    }
    function updateActividad($id,$actividad){
        $sql = 'update actividades set ';
        $sql .= 'descripcion="' . $actividad->getDescripcion() . '",';
        $sql .= 'nota="' . $actividad->getNota() . '"';
        $sql .= ' where id=' . $id . ';';
        $conexiondb = new ConexionDbController();
        $resultadoSQL = $conexiondb->execSQL($sql);
        $conexiondb->close();
        return $resultadoSQL;
    }
    function deleteAct($id){
        $sql = 'delete from actividades where id=' .$id;
        $conexiondb = new ConexionDbController();
        $resultadoSQL = $conexiondb->execSQL($sql);
        $conexiondb->close();
        return $resultadoSQL;
    }
}
?>
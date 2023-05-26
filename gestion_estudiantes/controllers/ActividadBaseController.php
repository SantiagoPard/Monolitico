<?php 
namespace actividadController;
abstract class ActividadBaseController
{
    abstract function readNotas($codigo);
    abstract function createActividad($model,$codigo);
    abstract function updateActividad($id,$model);
    abstract function readRowAct($id);
    abstract function deleteAct($id);
}
?>
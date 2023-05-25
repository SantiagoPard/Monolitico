<?php

namespace baseControler;

abstract class BaseController
{
    abstract function create($model);
    abstract function readEstudiantes();
    abstract function updateEstudiante($codigo, $model);
    abstract function delete($codigo);
    abstract function readRow($codigo);
    abstract function readNotas($codigo);
    abstract function createActividad($model,$codigo);
    abstract function updateActividad($id,$model);
    abstract function readRowAct($id);
    abstract function deleteAct($id);
    
}

<?php

namespace baseControler;

abstract class BaseController
{
    abstract function create($model);
    abstract function readEstudiantes();
    abstract function updateEstudiante($codigo, $model);
    abstract function delete($codigo);
    abstract function readRow($codigo);
    
}

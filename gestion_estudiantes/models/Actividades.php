<?php

namespace actividad;

class Actividad
{
    private $id;
    private $descripcion;
    private $nota;


    public function getId()
    {
        return $this->id;
    }
    public function setId($value)
    {
        $this->id = $value;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($value)
    {
        $this->descripcion = $value;
    }
    public function getNota()
    {
        return $this->nota;
    }
    public function setNota($value)
    {
        $this->nota = $value;
    }

}

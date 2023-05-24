<?php

namespace estudianteController;

use baseControler\BaseController;
use conexionDb\ConexionDbController;
use estudiante\Estudiante;

class EstudianteController extends BaseController
{

    function create($estudiante)
    {
        // $sql = 'insert into estudiante ';
        // $sql .= '(id,name,username,password) values ';
        // $sql .= '(';
        // $sql .= $estudiante->getId() . ',';
        // $sql .= '"' . $estudiante->getName() . '",';
        // $sql .= '"' . $estudiante->getUsername() . '",';
        // $sql .= '"' . $estudiante->getPassword() . '"';
        // $sql .= ')';
        // $conexiondb = new ConexionDbController();
        // $resultadoSQL = $conexiondb->execSQL($sql);
        // $conexiondb->close();
        // return $resultadoSQL;
    }

    function readEstudiantes()
    {
        $sql = 'select * from estudiantes';
        $conexiondb = new ConexionDbController();
        $resultadoSQL = $conexiondb->execSQL($sql);
        $estudiantes = [];
        while ($registro = $resultadoSQL->fetch_assoc()) {
            $estudiante = new estudiante();
            $estudiante->setCodigo($registro['codigo']);
            $estudiante->setNombre($registro['nombres']);
            $estudiante->setApellido($registro['apellidos']);
            array_push($estudiantes, $estudiante);
        }
        $conexiondb->close();
        print_r($estudiante);
        return $estudiantes;
        
    }

    function readRow($id)
    {
        // $sql = 'select * from estudiante';
        // $sql .= ' where id=' . $id;
        // $conexiondb = new ConexionDbController();
        // $resultadoSQL = $conexiondb->execSQL($sql);
        // $estudiante = new estudiante();
        // while ($registro = $resultadoSQL->fetch_assoc()) {
        //     $estudiante->setId($registro['id']);
        //     $estudiante->setName($registro['name']);
        //     $estudiante->setUsername($registro['username']);
        //     $estudiante->setPassword('');
        // }
        // $conexiondb->close();
        // return $estudiante;
    }

    function update($id, $estudiante)
    {
        // $sql = 'update estudiante set ';
        // $sql .= 'name="' . $estudiante->getName() . '",';
        // $sql .= 'username="' . $estudiante->getUsername() . '",';
        // $sql .= 'password="' . $estudiante->getPassword() . '" ';
        // $sql .= ' where id=' . $id;
        // $conexiondb = new ConexionDbController();
        // $resultadoSQL = $conexiondb->execSQL($sql);
        // $conexiondb->close();
        // return $resultadoSQL;
    }

    function delete($codigo)
    {
        $sql = 'delete from estudiantes where codigo=' . $codigo;
        $conexiondb = new ConexionDbController();
        $resultadoSQL = $conexiondb->execSQL($sql);
        $conexiondb->close();
        return $resultadoSQL;
    }
}

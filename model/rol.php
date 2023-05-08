<?php
namespace modelo;
use Exception;

include_once "conexion.php"; 
class Rol {
    private $id;
    private $nombreRol;
    private $estado;

    public $conexion;
    function __construct(){
        $this->conexion = new \Conexion();
    }

    function create(){
        try {
            $sql = $this->conexion->getCon()->prepare("INSERT INTO rol(nombreRol,estado) VALUES (?,'A')");
            $sql->bindParam(1,$this->nombreRol);

            $sql->execute();
            return "Rol Creado";
        } catch (Exception $e) {
            return "ERROR: " . $e->getMessage();
        }

    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombreRol
     */ 
    public function getNombreRol()
    {
        return $this->nombreRol;
    }

    /**
     * Set the value of nombreRol
     *
     * @return  self
     */ 
    public function setNombreRol($nombreRol)
    {
        $this->nombreRol = $nombreRol;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}
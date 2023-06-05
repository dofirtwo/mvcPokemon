<?php 
namespace modelo;

use PDOException;

include_once "conexion.php";

class Usuario{
    private $tipoDoc;
    private $numero;
    private $nombre;
    private $apellido;
    private $correo;
    private $password;
    private $direccion;
    private $telefono;
    private $genero;
    private $rol;
    public $conexion;

    public function __construct(){
        $this->conexion= new \Conexion();
    }

    public function create(){
        try {
            $sql = $this->conexion->getCon()->prepare("INSERT INTO usuario VALUES(NULL,?,?,?,?,?,?,?,?,?,?,'A',NULL,NULL,NULL,NULL)");
        
            $sql->bindParam(1,$this->tipoDoc);
            $sql->bindParam(2,$this->numero);
            $sql->bindParam(3,$this->nombre);
            $sql->bindParam(4,$this->apellido);
            $sql->bindParam(5,$this->correo);
            $sql->bindParam(6,$this->password);
            $sql->bindParam(7,$this->direccion);
            $sql->bindParam(8,$this->telefono);
            $sql->bindParam(9,$this->genero);
            $sql->bindParam(10,$this->rol);

            $sql->execute();
        } catch (PDOException $e) {
            return "Error: ".$e->getMessage();
        }
    }

    public function read(){
        try {
            $sql = $this->conexion->getCon()->prepare("SELECT * FROM usuariorol");
            $sql->execute();
            $response = $sql->fetchAll(\PDO::FETCH_ASSOC);
            return $response;
        } catch (PDOException $e) {
            return "Error: ".$e->getMessage();
        }
    }

    public function login(){
        try {
            $sql = $this->conexion->getCon()->prepare("SELECT * FROM usuarioRol WHERE correo=? AND password=?");
            $sql->bindParam(1,$this->correo);
            $sql->bindParam(2,$this->password);
            $sql->execute();
            $response = $sql->fetchAll(\PDO::FETCH_ASSOC);
            return $response;
        } catch (PDOException $e) {
            return "Error: ".$e->getMessage();
        }
    }
    /**
     * Get the value of tipoDoc
     */
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }

    /**
     * Set the value of tipoDoc
     */
    public function setTipoDoc($tipoDoc): self
    {
        $this->tipoDoc = $tipoDoc;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     */
    public function setApellido($apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of correo
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set the value of correo
     */
    public function setCorreo($correo): self
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     */
    public function setDireccion($direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     */
    public function setTelefono($telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of rol
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     */
    public function setRol($rol): self
    {
        $this->rol = $rol;

        return $this;
    }
}

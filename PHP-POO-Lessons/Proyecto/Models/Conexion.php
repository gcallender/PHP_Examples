<?php
namespace Models;

class Conexion {
    private $datos = array(
        "host" => "localhost",
        "user" => "root",
        "pass" => "",
        "db" => "php_poo_proyecto"
    );
    private $conn;

    public function __construct() {
        // mysqli es una clase global, por lo que al
        // usar namespace se debe agregar "\".
        $this->conn = new \mysqli(
                $this->datos["host"],
                $this->datos["user"],
                $this->datos["pass"],
                $this->datos["db"]);
    }
    public function consultaSimple($sql) {
        $this->conn->query($sql);
    }
    public function consultaRetorno($sql) {
        $datos = $this->conn->query($sql);
        return $datos;
    }
}

 ?>

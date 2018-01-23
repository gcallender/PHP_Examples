<?php
namespace Config;

class Request {
    private $controlador;
    private $metodo;
    private $argumento;

    public function __construct() {
        if (isset($_GET['url'])) {
            $ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $ruta = explode("/", $ruta);
            $ruta = array_filter($ruta);
            //print_r($ruta);
            $this->controlador = strtolower(array_shift($ruta));
            $this->metodo = strtolower(array_shift($ruta));
            /*echo "<pre>
            En Request:
            $this->controlador
            $this->metodo
            </pre>";*/
            if (!$this->controlador) {
                $this->controlador = "estudiantes";
            }
            if (!$this->metodo) {
                $this->metodo = "index";
            }
            $this->argumento = strtolower(array_shift($ruta));
        }
    }

    public function getControlador() {
        return $this->controlador;
    }
    public function getMetodo() {
        return $this->metodo;
    }
    public function getArgumento() {
        return $this->argumento;
    }
}


 ?>

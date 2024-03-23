<?php
include("Servicios.php");

class Rutas {
    private $id;
    private $municipio;
    private $departamento;
    private $desde;
    private $hacia;
    private $precio;
    private $conductor;



    public function __construct($id, $municipio, $departamento, $desde, $hacia, $precio, $conductor) {
        $this->id = $id;
        $this->municipio = $municipio;
        $this->departamento = $departamento;
        $this->desde = $desde;
        $this->hacia = $hacia;
        $this->precio = $precio;
        $this->conductor = $conductor;
    }

    public function Post() {
        $data = array(
            "id" => $this->id,
            "municipio" => $this->municipio,
            "departamento" => $this->departamento,
            "desde" => $this->desde,
            "hacia" => $this->hacia,
            "precio" => $this->precio,
            "conductor" => $this->conductor
        );

        $servicios = new Servicios;
        $response = $servicios->Post($data);
        return $response;
    }

    public function Get() {
        $servicios = new Servicios;
        $response = $servicios->Get();
        return $response;
    }
}

$ruta = new Rutas(1, "San Salvador", "San Salvador", "Soyapango", "San Salvador", 2.50, "edgar");
$ruta->Post();
?>

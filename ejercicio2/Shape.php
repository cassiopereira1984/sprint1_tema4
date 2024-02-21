<?php
 class Shape {
    public float $ancho;
    public float $alto;

    public function __construct(float $ancho, float $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }
    public function getAncho() {
        return $this->ancho;
    }
    public function getAlto() {
        return $this->alto;
    }
    public function setAncho($ancho) {
        $this->ancho = $ancho;
    }
    public function setAlto($alto) {
        $this->alto = $alto;
    }

 }
?>
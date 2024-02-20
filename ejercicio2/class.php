<?php
 class Shape {
    public $ancho, $alto;

    public function __construct($ancho, $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }
    public function resultado() {
    echo $this->area;
    }
 }
?>
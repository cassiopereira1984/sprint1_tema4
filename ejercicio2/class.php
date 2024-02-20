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

 class Triangulo extends Shape {
    public function area() {
        $this->area = ($this->alto * $this->ancho) / 2;
    }
 }

 class Rectangulo extends Shape {
    public function area() {
        $this->area = ($this->alto * $this->ancho);
    }
}
?>
<?php
class Triangulo extends Shape {
    public function area() {
        $this->area = ($this->alto * $this->ancho) /2;
    }
}
?>
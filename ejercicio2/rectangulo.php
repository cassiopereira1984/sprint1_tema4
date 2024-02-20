<?php
class Rectangulo extends Shape {
    public function area() {
        $this->area = ($this->alto * $this->ancho);
    }
}
?>
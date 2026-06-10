<?php
//Model: guarda os números e os resultados
class Model {
    public $num1;
    public $num2;
    public $resultado;
 
    public function _construct() {
        $this->num1 = 10;
        $this->num2 = 5;
        $this->resultado = 0;
    }
}
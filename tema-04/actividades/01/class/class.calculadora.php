<?php
    /*
        Archivo: class.calculadora.php
        Descripción: Define la clase Calculadora con propiedad de encapsulamiento
            - Propiedades: valor1, valor2, operación, resultado
            - Métodos: suma(), resta(), division(), multiplicacion(), potencia()
    */

    class Calculadora {
    
        # Atributos o propiedades
        private $valor1;
        private $valor2;
        private $operacion;
        private $resultado;
    
        # Constructor
        public function __construct() {
            $this->valor1 = 0;
            $this->valor2 = 0;
            $this->operacion = null;
            $this->resultado = 0;
        }
    
        # Métodos para establecer los valores
        public function setValor1($valor) {
            $this->valor1 = $valor;
        }
    
        public function setValor2($valor) {
            $this->valor2 = $valor;
        }
    
        # Métodos para obtener los valores
        public function getValor1() {
            return $this->valor1;
        }
    
        public function getValor2() {
            return $this->valor2;
        }
    
        public function getResultado() {
            return $this->resultado;
        }
    
        public function getOperacion() {
            return $this->operacion;
        }
    
        # Métodos para realizar operaciones
        public function suma() {
            $this->resultado = $this->valor1 + $this->valor2;
            $this->operacion = 'suma';
        }
    
        public function resta() {
            $this->resultado = $this->valor1 - $this->valor2;
            $this->operacion = 'resta';
        }
    
        public function multiplicacion() {
            $this->resultado = $this->valor1 * $this->valor2;
            $this->operacion = 'multiplicacion';
        }
    
        public function division() {
            if ($this->valor2 != 0) {
            $this->resultado = $this->valor1 / $this->valor2;
            } else {
            $this->resultado = 'Error: División por cero';
            }
            $this->operacion = 'division';
        }
    
        public function potencia() {
            $this->resultado = pow($this->valor1, $this->valor2);
            $this->operacion = 'potencia';
        }
    }
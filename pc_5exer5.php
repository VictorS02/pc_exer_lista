<?php 

class MinhaCalculadora {
    private $num1;
    private $num2;

    public function __construct($num1,$num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function somar() {
        $soma = $this->num1 + $this->num2;
        $somar = "somar dando o resultado de ". $soma .",";
        return $somar;
    }

    public function subitrair() {
        $subtrair = $this->num1 - $this->num2;
        $subtrair = "subitrair dando o resultado de ". $subtrair .",";
        return $subtrair;
    }

    public function multiplicar() {
        $multiplica = $this->num1 * $this->num2;
        $multiplica = "multiplicar dando o resultado de ". $multiplica .",";
        return $multiplica;
    }

    public function divisao() {
        $divisao = $this->num1 / $this->num2;
        $divisao = "dividir dando o resultado de ". $divisao .".";
        return $divisao;
    }

    public function numeros() {
        $numeros = "Com os numeros ". $this->num1 ." e ". $this->num2 ." iremos, ";
        return $numeros;
    }
} 

$minhacalc = new MinhaCalculadora(12, 6);
echo $minhacalc->numeros(). "\n";
echo $minhacalc->somar(). "\n"; 
echo $minhacalc->subitrair(). "\n";
echo $minhacalc->multiplicar(). "\n"; 
echo $minhacalc->divisao(). "\n";

?>
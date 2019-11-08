<?php 

class calculaFatorial {
    private $n;
    public function __construct($num) {
        $this->n = $num;
    }

    public function resultado() {
        $fat = 1;
        for ($i=1; $i<=$this->n; $i++) {
            $fat = $fat * $i;
        }
        return $fat;
    }
    public function getN() {
        return $this->n;
    }
}

$fatorial = new calculaFatorial(5);
//echo $fatorial->resultado();
echo "Fatorial de ". $fatorial->getN() . " é igual a ". $fatorial->resultado() ;

?>
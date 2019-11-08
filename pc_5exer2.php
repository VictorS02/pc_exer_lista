<?php

class comprimento {
    private $nome;
    
    public function __construct($nome1) {
        $this->nome = $nome1;
    }

    public function getResposta() {
        return "Olá, eu sou ". $this->nome;
    }
}

$fulano = new comprimento("Pedro");
echo $fulano->getResposta();

?>
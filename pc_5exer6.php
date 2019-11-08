<?php

class Pessoa {
    private $nome;
    private $idade;
    private $idade1;

    public function __construct($nome,$idade,$idade1) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->idade1 = $idade1;
    }

    public function aniversario() {
        $aniversario = $this->idade + $this->idade1;
        return "O Sr. ou Sra. ". $this->nome ." tem agora, ". $aniversario ." anos.";
    }
}

$pessoa1 = new Pessoa("Jaqueline",34,5);
echo $pessoa1->aniversario();
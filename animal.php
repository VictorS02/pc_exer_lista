<?php
class Animal{
    private $peso;
    private $idade;
    private $membros;

    public function __construct($peso, $idade, $membros){
        $this ->peso = $peso;
        $this ->idade = $idade;
        $this ->membros = $membros;
    }

    public function locomover(){}
    public function alimentar(){}
    public function emitirSom(){}
}

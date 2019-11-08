<?php
require_once "animal.php";

class Peixe extends Animal{
    private $corEscama;

    public function __construct($corEscama){
        $this ->corEscama = $corEscama;
    }
    public function locomover(){
        return "Ele se locomove nadando.\n";
    }
    public function alimentar(){
        return "Ele se alimenta de alga.\n";
    }
    public function emitirSom(){
        return "Ele faz glup glup.\n";
    }
    public function soltarBolha() {
        return "Ele solta bolhas.\n";
    }
}
<?php
require_once "animal.php";

class Reptil extends Animal{
    private $corEscama;
    
    public function __construct($corEscama){
        $this ->corEscama = $corEscama;
    }
    public function locomover(){
        return "Ele se locomove rastejando.\n";
    }
    public function alimentar(){
        return "Ele se alimenta de insetos.\n";
    }
    public function emitirSom(){
        return "Ele não faz barulho.\n";
    }
}
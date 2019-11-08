<?php
require_once "animal.php";

class Ave extends Animal{
    private $corPena;

    public function __construct($corPena){
        $this ->corPena = $corPena;
    }
    public function locomover(){
        return "Ele se locomove voando.\n";
    }
    public function alimentar(){
        return "Ele se alimenta de sementes.\n";
    }
    public function emitirSom(){
        return "Ele faz piu piu.\n";
    }
    public function fazerNinho() {
        return "Ele faz seu ninho.\n";     
    }
}
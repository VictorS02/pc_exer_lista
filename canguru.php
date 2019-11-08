<?php
require_once "mamifero.php";

class Canguru extends Mamifero{
    public function usarBolsa(){
        return "O canguru tem uma bolsa onde carrega os filhotes.\n";
    }

    public function locomover(){
        return "Ele se locomove pulando.\n";
    }
}
<?php
require_once "mamifero.php";

class Cachorro extends Mamifero{
    public function enterrarOsso(){
        return "Os cachorros enterram ossos.\n";
    }

    public function abanarRabo(){
        return "Os cachorros abanam o rabo.\n";
    }
}
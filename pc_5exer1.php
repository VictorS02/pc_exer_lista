<?php

class MinhaClasse {
    public function __construct() {
        echo "A classe ". __CLASS__ ."foi inicializada!"."\n";
    }
}

$minhaClasse = new MinhaClasse();
?>


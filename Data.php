<?php

class Data {
    private $dia;
    private $mes;
    private $ano;

    public function __construct($dia, $mes, $ano) {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function getDia() {
        return $this->dia;
    }

    public function getMes() {
        return $this->mes;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getDataAdmissao() {
        return $this->dia ."/". $this->mes ."/". $this->ano;
    }
}

?>
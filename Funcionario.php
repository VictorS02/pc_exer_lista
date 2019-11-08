<?php 

require_once "Data.php";

class Funcionario {
    private $nome;
    private $departamento;
    private $salario;
    private $dataAdimissao;
    private $CPF;

    public function __construct($nome, $departamento, $salario, Data $data1, $CPF) {
        $this->nome = $nome;
        $this->departamento = $departamento;
        $this->salario = $salario;
        $this->dataAdimissao = $data1->getDataAdmissao();
        $this->CPF = $CPF;
    }

    public function getNome() {
        return $this->nome;
    }
    
    public function getDepartamento() {
        return $this->departamento;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getDataAdimissao() {
        return $this->dataAdimissao;
    }

    public function getCPF() {
        return $this->CPF;
    }

    public function recebeAumento() {
        $aumento = ($this->salario * 0.01) + $this->salario;
        return $aumento;
    }

    public function calculaGanhoAnual() {
        $anual = $this->recebeAumento() * 12;
        return $anual;
    }

    public function mostra() {
        return "O trabalhador ". $this->getNome() ." do departamento de ". $this->getDepartamento() .", começou em ". $this->getDataAdimissao() ." e apresenta o CPF ". $this->getCPF() .", tinha o salario de ". $this->getSalario() ." e foi alterado para ". $this->recebeAumento() .", tendo seu ganho anual de ". $this->calculaGanhoAnual();
    }

    public function __toString() {
        return "O trabalhador ". $this->getNome() ." do departamento de ". $this->getDepartamento() .", começou em ". $this->getDataAdimissao() ." e apresenta o CPF ". $this->getCPF() .", tinha o salario de ". $this->getSalario() ." e foi alterado para ". $this->recebeAumento() .", tendo seu ganho anual de ". $this->calculaGanhoAnual();
    }
}

?>
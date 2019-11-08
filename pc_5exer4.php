<?php

class Lista{
    private $array;

    public function __construct(array $arsor){
        $this->array = $arsor;
    }

    public function sortArray(){
        $sorte = $this->array;
        sort($sorte);
        return $sorte;
    }
}

$sort1 = new Lista(array(11, -2, 4, 35, 0, 8, -9));
print_r ($sort1->sortArray(1));

?>
<?php
require_once "animal.php";
require_once "mamifero.php";
require_once "reptil.php";
require_once "peixe.php";
require_once "ave.php";
require_once "canguru.php";
require_once "cachorro.php";
require_once "cobra.php";
require_once "goldfish.php";
require_once "arara.php";
require_once "tartaruga.php";


$mamifero = new Mamifero("marrom"); 
echo "Mamifero:"; 
echo "<br>";
echo $mamifero -> locomover();
echo $mamifero -> alimentar();
echo $mamifero -> emitirSom();

echo "<br>";
echo "<br>";

$reptil = new Reptil("verde"); 
echo "Reptil:"; 
echo "<br>";
echo $reptil -> locomover();
echo $reptil -> alimentar();
echo $reptil -> emitirSom();

echo "<br>";
echo "<br>";

$peixe = new Peixe("azul"); 
echo "Peixe:"; 
echo "<br>";
echo $peixe -> locomover();
echo $peixe -> alimentar();
echo $peixe -> emitirSom();
echo $peixe -> soltarBolha();

echo "<br>";
echo "<br>";

$ave = new Ave("vermelha"); 
echo "Ave:"; 
echo "<br>";
echo $ave -> locomover();
echo $ave -> alimentar();
echo $ave -> emitirSom();
echo $ave -> fazerNinho();

echo "<br>";
echo "<br>";

$canguru = new Canguru("laranja");
echo "Canguru:";
echo "<br>";
echo $canguru -> usarBolsa();
echo $canguru -> locomover();

echo "<br>";
echo "<br>";

$cachorro = new Cachorro("marrom");
echo "Cachorro:";
echo "<br>";
echo $cachorro -> enterrarOsso();
echo $cachorro -> abanarRabo();

echo "<br>";
echo "<br>";

$cobra = new Cobra("verde");
echo "Cobra:";
echo "<br>";

echo "<br>";

$tartaruga = new Tartaruga("verde");
echo "Tartaruga:";
echo "<br>";
echo $tartaruga -> locomover();

echo "<br>";
echo "<br>";

$gold = new Goldfish("amarelo");
echo "Goldfish:";
echo "<br>";

echo "<br>";

$arara = new Arara("vermelha");
echo "Arara:";
echo "<br>";



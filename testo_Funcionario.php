<?php 

require_once "Funcionario.php";
require_once "Data.php";

$data1 = new Data(20,06,2000);
$data2 = new Data(21,07,2001);

$func = new Funcionario("Pedro", "Finanças", "1000", $data1, "0-000000001");
echo $func->mostra();

echo "<br>";

$func1 = new Funcionario("João", "Ecônomia", "2000", $data2, "0-000000002");
echo $func1->mostra();

echo "<br>";
echo "<br>";

$func = new Funcionario("Pedro", "Finanças", "1000", $data1, "0-000000001");
echo $func;

echo "<br>";

$func1 = new Funcionario("João", "Ecônomia", "2000", $data2, "0-000000002");
echo $func1;

?>
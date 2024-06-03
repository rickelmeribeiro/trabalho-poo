<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>POO</title>
</head>
<body>
<?php

require_once "./caneta.php";
//INÍCIO OBJETO
//
//$c1 = new Caneta();
//$c1->cor =  "Azul"; //Propriedade do objeto COR.
//$c1->ponta = 0.5;  //Propriedade do objeto PONTA.
//$c1->destampar();
//$c1->rabiscar(); //Método do objeto CANETA.
//print_r($c1);
//
//// FIM OBJETO
////O conjuto do $c1 é um objeto.
//?>
<!--<br>-->
<!-- INÍCIO OBJETO -->-->
<!---->
<?php
//$c2 = new Caneta();
//$c2->cor = "Verde";
//$c2->carga = 50;
//$c2->tampar();
////$c2->rabiscar();
//print_r($c2);
//
//// FIM OBJETO
////O conjunto de $c2 é um objeto.
//?>
<!--<br>-->
<?php
//
//$funcionario = new funcionario();
//$funcionario-> DigitarSalario(1000);
//$funcionario->MostrarSalario();
//
//
//?>
<h1>
    <?php
    //
    //require_once './caneta.php';
    //require_once './carros.php';
    //
    //$c3 = new Carro('Carro', 'Gol', 4);
    //echo "O veículo {$c3->getNome()}/{$c3->getModelo()}";
    //echo "suporta {$c3->getPassageiros()} passageiros. \n";
    //$c3->acelerar();

    ?>
    <?php
require_once 'Mamifero.php';

$m = new Mamifero();
$m->setPeso(33.5);
$m->setIdade(12);
$m->setCorPelo('vermelha');
$m->locomover();
print_r($m);
    ?>
</h1>
</body>
</html>

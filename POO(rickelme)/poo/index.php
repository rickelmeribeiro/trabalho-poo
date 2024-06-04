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
//require_once 'Mamifero.php';
//
//$m = new Mamifero();
//$m->setPeso(33.5);
//$m->setIdade(12);
//$m->setCorPelo('vermelha');
//$m->locomover();
//print_r($m);
    ?>
<?php
//    abstract class Banco {
//        protected $saldo;
//        public function setSaldo($s) {
//            $this->saldo = $s;}
//        public function getSaldo(){
//            return $this->saldo;}
//        abstract protected function Sacar($s);
//         abstract protected function Depositar($d);}
//    class Itau extends Banco {
//        public function Sacar($s) {
//            $this->saldo -= $s;
//            echo "<hr> Sacou: ".$s;}
//        public function Depositar($d){$this->saldo += $d;}}
//
//    $itau = new Itau();
//    $itau->setSaldo(1000); //Saldo setado com 1000.
//    echo "<hr> Saldo: ".$itau->getSaldo(); //Saldo sendo exibidio.
//    $itau->Sacar(250); //Diminuindo 250 do salodo.
//    echo "<hr> Saldo: ".$itau->getSaldo(); //Saldo sendo exibido com 750.

    ?>

    <?php
//    class Motor {
//        public function Ligar() {
//            echo "Motor Ligado!";
//        }
//    }
//
//    class Carro {
//        private $motor;
//
//        public function __construct(Motor $motor) {
//            $this->motor = $motor;
//        }
//
//        public function LigarCarro() {
//            $this->motor->Ligar();
//        }
//    }
//
//    $motor = new Motor();
//    $car = new Carro($motor);
//    $car->LigarCarro();  //Motor Ligado!
    ?>
    <?php
//
//    class Cliente {private $nome; private $pedidos;
//        public function __construct($nome) {$this->nome = $nome; $this->pedidos = [];}
//        public function adicionarPedido(Pedido $pedido) {$this->pedidos[] = $pedido;}
//        public function getPedidos() {return $this->pedidos;}
//        public function getNome() {return $this->nome;}}
//    class Pedido {private $numero; private $valor;
//        public function __construct($numero, $valor) {$this->numero = $numero; $this->valor = $valor;}
//        public function getNumero() {return $this->numero;}
//        public function getValor() {return $this->valor;}}
//    $cliente1 = new Cliente("João");
//    $pedido1 = new Pedido(1, 150.00);
//    $pedido2 = new Pedido(2, 200.00);
//    $cliente1->adicionarPedido($pedido1);
//    $cliente1->adicionarPedido($pedido2);
//    echo "Pedidos de " . $cliente1->getNome() . ":\n";
//    foreach ($cliente1->getPedidos() as $pedido) {
//        echo "Pedido Número: " . $pedido->getNumero() . " - Valor: R$ " . $pedido->getValor() . "\n";
//    }
    ?>
<!--    --><?php
//
//    class Funcionario {private $nome; private $cargo;
//        public function __construct($nome, $cargo) {$this->nome = $nome; $this->cargo = $cargo;}
//        public function getNome() {return $this->nome;}
//        public function getCargo() {return $this->cargo;}
//    }
//    class Departamento {private $nome; private $funcionarios;
//        public function __construct($nome) {$this->nome = $nome; $this->funcionarios = [];}
//        public function adicionarFuncionario(Funcionario $funcionario) {$this->funcionarios[] = $funcionario;}
//        public function getFuncionarios() {return $this->funcionarios;}
//        public function getNome() {return $this->nome;}}
//    $funcionario1 = new Funcionario("Luciano", "Desenvolvedor");
//    $funcionario2 = new Funcionario("Luciano", "Analista");
//    $departamento = new Departamento("TI");
//    $departamento->adicionarFuncionario($funcionario1);
//    $departamento->adicionarFuncionario($funcionario2);
//    echo "Funcionários do departamento de " . $departamento->getNome() . ":\n";
//    foreach ($departamento->getFuncionarios() as $funcionario) {
//        echo "<br>";
//        echo "Nome: " . $funcionario->getNome() . " - Cargo: " . $funcionario->getCargo() . "\n";}
//    ?>


</h1>
</body>
</html>

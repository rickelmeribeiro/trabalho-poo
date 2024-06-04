<?php
//
//class Caneta
//{
//    var $modelo;
//    var $cor;
//    var $ponta;
//    var $carga;
//    var $tampada;
//
//    function rabiscar()
//    {
//        if ($this->tampada == true) {
//            echo 'Não posso rabiscar, pois estou tampada...';
//        } else {
//            echo "Estou Rabiscando...";
//        }
//    }
//
//    function tampar()
//    {
//        $this->tampada = true;
//    }
//
//    function destampar()
//    {
//        $this->tampada = false;
//    }
//
//}
//
//
//class funcionario
//{
//    private $Salario;
//
//    function DigitarSalario($Salario)
//    {
//        if (is_numeric($Salario) and ($Salario > 0)) {
//            $this->Salario = $Salario;
//        }
//    }
//
//    function MostrarSalario()
//    {
//        echo "O salário é: {$this->Salario}";
//
//    }
//}
//
//class Veiculo
//{
//    protected $nome; //Carro, Moto
//    protected $modelo; //Gol, MT-03
//    protected $passageiros; //Qtd de passageiros, INT
//
//    public function __construct(string $nome, string $modelo, int $passageiros)
//    {
//        $this->nome = $nome;
//        $this->modelo = $modelo;
//        $this->passageiros = $passageiros;
//    }
//
//    public function getNome(): string
//    {
//        return $this->nome;
//    }
//
//    public function getModelo(): string
//    {
//        return $this->modelo;
//    }
//
//    public function getPassageiros(): int
//    {
//        return $this->passageiros;
//    }
//}
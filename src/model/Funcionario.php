<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Pessoa;
    //require_once('Pessoa.php');
    abstract class Funcionario extends Pessoa{
        protected float $salario;

        public function __construct(string $nome, Cpf $cpf, float $salario){
            parent::__construct($nome, $cpf);
            $this->salario = $salario;
        }

        public abstract function getBonificacaoNatalina():float;

        //métodos acessores

        public function getSalario():float{
            return $this->salario;
        }
        public function setSalario(float $salario):void{
            $this->salario = $salario;
        }

        public function getDados():string{
            return "Nome: {$this->getNome()} - Salário: R\${$this->getSalario()} - CPF: {$this->getCpF()->getNumero()} - Bonificação Natalina: {$this->getBonificacaoNatalina()}<br>";
        }

    }
?>
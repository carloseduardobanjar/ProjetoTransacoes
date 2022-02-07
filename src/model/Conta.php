<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Cliente;
    //require_once('Cliente.php');
    abstract class Conta{
        //Atributos (características)
        private Cliente $titular;
        protected float $saldo;
        private static int $numeroDeContas=0;

        //método construtor
        public function __construct(Cliente $titular){
            $this->titular = $titular;
            $this->saldo = 0;
            Conta::$numeroDeContas++; //ou self::$numeroDeContas++;
            //echo "<br>Estou criando uma nova conta...<br>";
        }

        //método destrutor
        public function __destruct(){
            echo "<br>Um objeto foi removido da memória.";
            Conta::$numeroDeContas--;
        }

        //Métodos acessores (getters and setters)
        public static function getNumeroDeContas():int{
            return Conta::$numeroDeContas;
        }


        public function getSaldo():float{
            return $this->saldo;
        }

        public function getTitular():Cliente{
            return $this->titular;
        }

        //Comportamento
        public function saca(float $valor):void{
            $taxaSaque = $valor * $this->obterTaxaSaque();
            $valorASacar = $valor + $taxaSaque;
            if($valorASacar > $this->saldo){
                echo "Saldo insuficiente.";
                return;
            }
            $this->saldo -= $valorASacar;
        }

        protected abstract function obterTaxaSaque():float;

        public function deposita(float $valor):void{
            if($valor <= 0){
                echo "Valor inválido para deposito";
                return;
            }
            $this->saldo+=$valor;
        }

        

        public function mostraDados():void{
            echo "<br>A conta de {$this->titular->getNome()} tem o saldo de R\${$this->saldo}<br>";
            $this->getTitular()->getEnderecoDoCliente()->mostraEnderecoCompleto();
        }
    }


?>
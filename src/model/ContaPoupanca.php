<?php
    namespace cefet\projeto\model;

    use cefet\projeto\model\Conta;
    class ContaPoupanca extends Conta{
        //sobrescrita de métodos

        public function saca(float $valor):void{
            $taxaSaque = $valor * $this->obterTaxaSaque();
            $valorASacar = $valor + $taxaSaque;
            if($valorASacar > $this->saldo){
                echo "Saldo insuficiente.";
                return;
            }
            $this->saldo -= $valorASacar;
        }

        protected function obterTaxaSaque():float{
            return 0.04;
        }

       

    }

?>
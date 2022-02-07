<?php
    namespace cefet\projeto\model;

    use cefet\projeto\model\Conta;
    class ContaCorrente extends Conta{

        public function transferePara(Conta $contaDestino, float $valor):void{
            if($valor > $this->saldo){
                echo "Saldo insuficiente.";
                return;
            }
            $this->saca($valor);
            $contaDestino->deposita($valor);
        }

        protected function obterTaxaSaque():float{
            return 0.10;
        }


    }

?>
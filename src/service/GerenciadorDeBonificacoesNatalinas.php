<?php
    namespace cefet\projeto\service;

    use cefet\projeto\model\Gerente;
    use cefet\projeto\model\Caixa;
    use cefet\projeto\model\Tesoureiro;
    use cefet\projeto\model\Funcionario;

    class GerenciadorDeBonificacoesNatalinas{

        private float $totalDeBonificacoesNatalinas = 0.0;

        public function __construct(){
            $this->totalDeBonificacoesNatalinas = 0.0;
        }

        public function acumulaBonificacoes(Funcionario $funcionario):void{
            $this->totalDeBonificacoesNatalinas+=$funcionario->getBonificacaoNatalina();
        }

        public function getTotalDeBonificacoesNatalinas():float{
            return $this->totalDeBonificacoesNatalinas;
        }
    }
?>
<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Funcionario;

    class Caixa extends Funcionario{

        private int $numGuiche;

        public function getBonificacaoNatalina():float{
            return ($this->salario * 0.08);
        }
        
        //metodos acessores
        public function getNumGuiche():int{
            return $this->numGuiche;
        }

        public function setNumGuiche(int $numGuiche):void{
            $this->numGuiche = $numGuiche;
        }
    }
?>
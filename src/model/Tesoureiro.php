<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Funcionario;

    class Tesoureiro extends Funcionario{

        public function getBonificacaoNatalina():float{
            return ($this->salario * 0.15);
        }

    }
?>
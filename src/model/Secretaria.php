<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Funcionario;

    class Secretaria extends Funcionario{

        public function getBonificacaoNatalina():float{
            return ($this->salario * 0.11);
        }

    }
?>
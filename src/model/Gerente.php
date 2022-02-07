<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\FuncionarioAutenticavel;
    use cefet\projeto\model\Autenticavel;

    class Gerente extends FuncionarioAutenticavel{
        public function podeAutenticar(int $senha):bool{
            return ($senha===123456);
        }

        public function getBonificacaoNatalina():float{
            return ($this->salario * 0.20);
        }

    }
?>
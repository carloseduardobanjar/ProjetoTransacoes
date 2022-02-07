<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\FuncionarioAutenticavel;
    use cefet\projeto\model\Autenticavel;

    class Diretor extends FuncionarioAutenticavel{

        public function getBonificacaoNatalina():float{
            return ($this->salario * 0.30);
        }

        public function podeAutenticar(int $senha):bool{
            return ($senha===654321);
        }

    }
?>
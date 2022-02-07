<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Funcionario;
    use cefet\projeto\model\Autenticavel;

    abstract class FuncionarioAutenticavel extends Funcionario implements Autenticavel{
        public abstract function podeAutenticar(int $senha):bool;
    }

?>
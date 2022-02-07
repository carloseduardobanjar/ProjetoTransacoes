<?php
    namespace cefet\projeto\service;

    use cefet\projeto\model\Gerente;
    use cefet\projeto\model\FuncionarioAutenticavel;
    use cefet\projeto\model\Autenticavel;
    class AutenticadorDoSistema{

        public function tentaLogar(Autenticavel $autenticavel, int $senha){
            if($autenticavel->podeAutenticar($senha))
                //echo "<hr>Parabéns, {$autenticavel->getNome()}! Acesso liberado ao sistema!<br>";
                echo "<hr>Parabéns! Acesso liberado ao sistema!<br>";
            else
                //echo "<hr>Desculpe, {$autenticavel->getNome()}! Acesso NEGADO ao sistema! Senha inválida. <br>";
                echo "<hr>Desculpe! Acesso NEGADO ao sistema! Senha inválida. <br>";
        }

    }

?>
<?php
    namespace cefet\projeto\model;

    interface Autenticavel{
        public function podeAutenticar(int $senha):bool;
    }

?>
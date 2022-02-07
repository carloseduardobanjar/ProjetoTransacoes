<?php
    namespace cefet\projeto\model;
    class Cpf{
        private string $numero;

        public function __construct(string $numero){
            if($this->validaCpf($numero)===true)
                $this->numero = $numero;
        }

         //métodos acessores
         public function getNumero():string{
            return $this->numero;
        }

        //método encapsulado
        private function validaCpf(string $numero):bool{
            if(strlen($numero)===14 && strpos($numero, '.')===3 && strpos($numero,'.',4)===7 && strpos($numero, '-')===11)
                return true;
            echo "CPF inválido! Aplicação interrompida.";
            exit();
        }
    }

?>
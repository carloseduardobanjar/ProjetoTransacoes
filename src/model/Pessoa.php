<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Cpf;
    //require_once('Cpf.php');
    class Pessoa{
        protected Cpf $cpf;
        protected string $nome; 

        public function __construct(string $nome, Cpf $cpf){
            $this->cpf = $cpf;
            $this->setNome($nome);
        }


        //métodos acessores
        public function getNome():string{
            return $this->nome;
        }

        public function setNome($nome):void{
            $this->validaNome($nome);
            $this->nome = $nome;
        }

        public function getCpf():Cpf{
            return $this->cpf;
        }

        protected function validaNome(string $nome):void{
            if(! strlen($nome)>=3){
                echo "O nome da pesosa precisa ter ao menos 3 caracteres. <br>";
                exit();
            }
        }

    }

?>
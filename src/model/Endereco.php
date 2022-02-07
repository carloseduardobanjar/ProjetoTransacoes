<?php
    namespace cefet\projeto\model;
    class Endereco{
        //Atributos
        private string $cidade;
        private string $bairro;
        private string $logradouro;
        private string $numero;

        public function __construct(string $logradouro, string $numero, string $bairro, string $cidade){
            $this->setLogradouro($logradouro);
            $this->setNumero($numero);
            $this->setBairro($bairro);
            $this->setCidade($cidade);
        }

        //métodos acessores
        public function getCidade():string{
            return $this->cidade;
        }

        public function getBairro():string{
            return $this->bairro;
        }

        public function getLogradouro():string{
            return $this->logradouro;
        }

        public function getNumero():string{
            return $this->numero;
        }

        public function setCidade(string $cidade):void{
            if(strlen($cidade)>=6)
                $this->cidade = $cidade;
            else{
                echo "O nome da cidade precisa ter ao menos 6 caracteres. <br>";
                exit();
            }
        }

        public function setBairro(string $bairro):void{
            $this->bairro = $bairro;
        }

        public function setLogradouro(string $logradouro):void{
            $this->logradouro = $logradouro;
        }

        public function setNumero(string $numero):void{
            $this->numero = $numero;
        }

        public function mostraEnderecoCompleto():void{
            echo "{$this->getLogradouro()},  {$this->getNumero()} - {$this->getBairro()} - {$this->getCidade()}";
        }


    }

?>
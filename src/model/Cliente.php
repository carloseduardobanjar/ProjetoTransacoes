<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Endereco;
    use cefet\projeto\model\Pessoa;
    use cefet\projeto\model\Autenticavel;
    //require_once('Endereco.php');
    //require_once('Pessoa.php');
    class Cliente extends Pessoa implements Autenticavel{
        private Endereco $enderecoDoCliente;

        public function __construct(string $nome, Cpf $cpf, Endereco $enderecoDoCliente){
            parent::__construct($nome, $cpf);
            $this->enderecoDoCliente = $enderecoDoCliente;
        }

        public function podeAutenticar(int $senha):bool{
            return ($senha===000000);
        }

        public function getEnderecoDoCliente():Endereco{
            return $this->enderecoDoCliente;
        }

    }
?>
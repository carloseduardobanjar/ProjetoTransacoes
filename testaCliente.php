<?php
    require_once('autoload.php');

    use cefet\projeto\model\Endereco;
    use cefet\projeto\model\Funcionario;
    use cefet\projeto\model\Cliente;
    use cefet\projeto\model\Cpf;

    $umCliente = new Cliente('Kadu', new Cpf('123.456.789-10'), new Endereco('Rua Antônio Lopes Serta', '231', 'Vila Guarani', 'Nova Friburgo'));

    echo "Informações do cliente<br><hr>";
    echo "Nome: {$umCliente->getNome()}<br>";
    echo "Cpf: {$umCliente->getCpf()->getNumero()}<br>";
    echo "Endereço completo: ";
    $umCliente->getEnderecoDoCliente()->mostraEnderecoCompleto();
    echo "<br>";


    /*$umFuncionario = new Funcionario('Paulo', new Cpf('123.456.789-11'), 2000, 'Desenvolvedor');

    echo "Informações do funcionário<br><hr>";
    echo "Nome: {$umFuncionario->getNome()}<br>";
    echo "Cpf: {$umFuncionario->getCpf()->getNumero()}<br>";
    echo "Salário: {$umFuncionario->getSalario()}<br>";*/
?>
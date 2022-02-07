<?php
    require_once('autoload.php');

    use cefet\projeto\service\AutenticadorDoSistema;
    use cefet\projeto\model\FuncionarioAutenticavel;
    use cefet\projeto\model\Gerente;
    use cefet\projeto\model\Diretor;
    use cefet\projeto\model\Cpf;
    use cefet\projeto\model\Endereco;
    use cefet\projeto\model\Cliente;

    $autenticador = new AutenticadorDoSistema();

    $pauloGerente = new Gerente(
        'Paulo',
        new Cpf('123.456.789-11'),
        3000
    );

    $dudaGerente = new Gerente(
        'Duda',
        new Cpf('123.456.789-16'),
        6000
    );

    $robertoDiretor = new Diretor(
        'Roberto',
        new Cpf('123.456.789-13'),
        5000
    );

    $eduardoCliente = new Cliente(
        'Eduardo',
        new Cpf('123.456.789-10'),
        new Endereco('Rua Antônio Lopes Serta', '231', 'Vila Guarani', 'Nova Friburgo')
    );

    $autenticador->tentaLogar($pauloGerente, 123456);
    $autenticador->tentaLogar($dudaGerente, 123456);
    $autenticador->tentaLogar($robertoDiretor, 654321);
    $autenticador->tentaLogar($eduardoCliente, 000000);
?>
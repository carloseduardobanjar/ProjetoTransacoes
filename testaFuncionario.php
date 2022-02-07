<?php
    require_once('autoload.php');

    use cefet\projeto\model\Cpf;
    use cefet\projeto\model\Gerente;
    use cefet\projeto\model\Caixa;
    use cefet\projeto\model\Tesoureiro;
    use cefet\projeto\model\Secretaria;
    use cefet\projeto\model\Diretor;
    use cefet\projeto\service\GerenciadorDeBonificacoesNatalinas;

    $gerenciador = new GerenciadorDeBonificacoesNatalinas();

    $kaduCaixa = new Caixa(
        'Kadu',
        new Cpf('123.456.789-10'),
        2000
    );

    $pauloGerente = new Gerente(
        'Paulo',
        new Cpf('123.456.789-11'),
        3000
    );

    $fatimaTesoureira = new Tesoureiro(
        'Fatima',
        new Cpf('123.456.789-12'),
        4000
    );

    $biaSecretaria = new Secretaria(
        'Bia',
        new Cpf('123.456.789-13'),
        5000
    );

    $robertoDiretor = new Diretor(
        'Roberto',
        new Cpf('123.456.789-13'),
        5000
    );

    $gerenciador->acumulaBonificacoes($kaduCaixa);
    $gerenciador->acumulaBonificacoes($pauloGerente);
    $gerenciador->acumulaBonificacoes($fatimaTesoureira);
    $gerenciador->acumulaBonificacoes($biaSecretaria);
    $gerenciador->acumulaBonificacoes($robertoDiretor);

    echo "{$kaduCaixa->getDados()}";
    echo "{$pauloGerente->getDados()}";
    echo "{$fatimaTesoureira->getDados()}";
    echo "{$biaSecretaria->getDados()}";
    echo "{$robertoDiretor->getDados()}";

    echo "O total de gasto com bonificações será de R\${$gerenciador->getTotalDeBonificacoesNatalinas()}";
?>
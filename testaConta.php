<?php

    require_once('autoload.php');
    /*require_once('src/model/Conta.php');
    require_once('src/model/Cpf.php');
    require_once('src/model/Endereco.php');
    require_once('src/model/Pessoa.php');
    require_once('src/model/Cliente.php');*/
    
    use cefet\projeto\model\Endereco;
    use cefet\projeto\model\Conta;
    use cefet\projeto\model\Cliente;
    use cefet\projeto\model\ContaCorrente;
    use cefet\projeto\model\Cpf;

    $contaDaAlexandra = new ContaCorrente(new Cliente('Alexandra',new Cpf('123.456.789-10'), new Endereco('Rua X', '1', 'Bairro X', 'Nova Friburgo')));
    echo "<br>";
    echo ContaCorrente::getNumeroDeContas();
    $contaDaIsabelle = new ContaCorrente(new Cliente('Isabelle',new Cpf('123.456.789-11'), new Endereco('Rua Y', '2', 'Bairro Y', 'Nova Friburgo')));
    $contaDaIsabelle->getTitular()->setNome('Caua B');
    echo "<br>";
    echo ContaCorrente::getNumeroDeContas();
    $contaDoCaue = new ContaCorrente(new Cliente('Cauê',new Cpf('123.456.789-12'), new Endereco('Rua Z', '3', 'Bairro Z', 'Nova Friburgo')));
    echo "<br>";
    echo ContaCorrente::getNumeroDeContas();

    /*$contaDaAlexandra->setCpfTitular('123.456.789-10');
    $contaDaAlexandra->setNomeTitular('Alexandra');*/
    $contaDaAlexandra->deposita(3000);

    /*$contaDaIsabelle->setCpfTitular('123.456.789-11');
    $contaDaIsabelle->setNomeTitular('Isabelle');*/
    $contaDaIsabelle->deposita(3000);

    /*$contaDoCaue->setCpfTitular('123.456.789-12');
    $contaDoCaue->setNomeTitular('Cauê');*/
    $contaDoCaue->deposita(3000);
    
    echo "<br>A contaDaAlexandra pertence ao titular {$contaDaAlexandra->getTitular()->getNome()} e tem o saldo de R\${$contaDaAlexandra->getSaldo()}<br>";
    $contaDaAlexandra->saca(200);
    echo "<br>A contaDaAlexandra pertence ao titular {$contaDaAlexandra->getTitular()->getNome()} e tem o saldo de R\${$contaDaAlexandra->getSaldo()}<br>";
    $contaDaAlexandra->deposita(8000);
    echo "<br>A contaDaAlexandra pertence ao titular {$contaDaAlexandra->getTitular()->getNome()} e tem o saldo de R\${$contaDaAlexandra->getSaldo()}<br>";
    echo "<hr>";
    $contaDaAlexandra->mostraDados();
    $contaDaIsabelle->mostraDados();
    $contaDaAlexandra->transferePara($contaDaIsabelle, 200);
    echo "<br>Transferindo...<br>";
    $contaDaAlexandra->mostraDados();
    $contaDaIsabelle->mostraDados();
    echo "<br>A contaDaIsabelle pertence ao titular {$contaDaIsabelle->getTitular()->getNome()} e tem o saldo de R\${$contaDaIsabelle->getSaldo()}<br>";
    echo "<hr>";
    echo "<br>A contaDoCaue pertence ao titular {$contaDoCaue->getTitular()->getNome()} e tem o saldo de R\${$contaDoCaue->getSaldo()}<br>";
?>

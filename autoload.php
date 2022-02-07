<?php
    //Fully Qualified Name
    spl_autoload_register(function(string $nomeDaClasse){
        //echo $nomeDaClasse."<br>";
        $fqn = str_replace('cefet\\projeto', 'src', $nomeDaClasse);
        //echo $fqn."<br>";
        $fqn = str_replace('\\', DIRECTORY_SEPARATOR, $fqn);
        $nomeDoArquivo = $fqn.'.php';
        //echo $nomeDoArquivo."<br>";

        if(file_exists($nomeDoArquivo)){
            //echo $nomeDoArquivo."<br>";
            require_once($nomeDoArquivo);
        }
    });
?>
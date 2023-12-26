<?php

    session_start();

    // Montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
 
    $texto = $_SESSION['id']. '#' .$titulo . '#' . $categoria .  '#' . $descricao . PHP_EOL;
    
    // Abrindo o arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.txt','a');
    // Escrevendo o texto
    fwrite($arquivo, $texto);
    // Fechando o arquivo
    fclose($arquivo);
    //redirecionado para o arquivo novamente
    header('location: abrir_chamado.php');

?> 
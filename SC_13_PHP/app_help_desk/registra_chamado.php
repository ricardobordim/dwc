<?php

    // print_r($_POST);
    session_start();

    $titulo = str_replace('#','-',$_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    // PHP_EOL, representa a quebra de linha de acordo com o SO utilizado.
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    // $texto = implode('#',$_POST);
    // echo $texto;

    $arquivo = fopen('../../../app_help_desk/arquivo.txt','a');



    fwrite($arquivo,$texto);

    fclose($arquivo);

    // echo $texto;

    header('Location: abrir_chamado.php');





?>

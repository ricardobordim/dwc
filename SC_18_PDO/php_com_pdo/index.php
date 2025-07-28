<?php
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';
    
    try {
        $conexao = new PDO($dsn, $usuario,$senha);
        //code...
    } catch (PDOException $e) {
        
        echo '<pre>';
        // print_r($e);
        echo 'Erro: ' . $e->getCode() . '  Mensagem: ' . $e->getMessage();
        echo '</pre>';
    }
?>

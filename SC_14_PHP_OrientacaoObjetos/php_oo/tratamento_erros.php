<?php

    // AQUI É ERRO
    // Se estive aqui mataria o programa
    // $sql = "select * from clientes";
    // mysql_query($sql);
    try {
        echo '<h3> ***Try***</h3>';
        $sql = "select * from clientes";
        mysql_query($sql);

    } catch (\Throwable $th) {
        // poderia ter sido catch(Error $th)
        echo '<h3> ***Throw Error***</h3>';
        echo '<p style=color:red>'. $th . '</p>';
        // throw $th;
    } finally {
        echo '<h3> ***Finally***</h3>';

    }



    // AQUI É EXCEPTION 
    // Se estive aqui mataria o programa
    // $sql = "select * from clientes";
    // mysql_query($sql);
    try {
        echo '<h3> ***Try***</h3>';
        if (!file_exists('arquivo_teste.php')) {
            // lancando uma excecao
            throw new Exception('O arquivo deveria estar disponível ' . date('d/m/Y h:i:s') . ' nessa pasta');
        }

    } catch (\Throwable $th) {
        // poderia ter sido catch(Error $th)
        // acima estou tratando uma excecao e nao um erro
        echo '<h3> ***Throw Exception***</h3>';
        echo '<p style=color:red>' . $th . '</p>';
        // throw $th;
    } finally {
        echo '<h3> ***Finally***</h3>';

    }


    // AQUI É ERRO E EXCEÇÃO TRATADAS SEPARADAS
    try {
        echo '<h3> ***Try Error e Exception***</h3>';
        // Geralmente é o programador que lança a exceção
        if (!file_exists('arquivo_teste.php')){
            throw new Exception('O arquivo deveria estar disponível '. date('d/m/Y h:i:s') . ' nessa pasta');
        }

        // Geralmente é o PHP que lança o Erro
        if (!file_exists('arquivo_teste.php')) {
            throw new Error('O arquivo deveria estar disponível ' . date('d/m/Y h:i:s') . ' nessa pasta');
        }


    } catch (Error $th) {
        // poderia ter sido Exception
        echo '<h3> ***Error***</h3>';
        echo '<p style=color:red>' . $th . '</p>';
        // throw $th;
    }
    catch (Exception $th) {
        // poderia ter sido Exception
        echo '<h3> ***Exception***</h3>';
        echo '<p style=color:red>' . $th . '</p>';
        // throw $th;
    } finally {
        echo '<h3> ***Finally2***</h3>';

    }



?>

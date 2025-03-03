<?php

    // sessão deve ser criada sempre antes de qualquer output de dados do navegador

    session_start();

    // Agora é possível acessar o array SESSION
    // print_r($_SESSION);
    // $_SESSION['x'] = 'valor da sessão';

    // criado no home.php
    // echo $_SESSION['y'] . '<br>';

    // echo 'Oi, chegamos aqui';

    // Lembrando que a super global $_GET é um array
    /*
    print_r($_GET);
    echo '<br>';
    echo ($_GET['email']);
    echo '<br>';
    echo ($_GET['senha']);

    */

    // verifica se a autenticação foi realizada
    $usuario_atenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;
    $perfis = array(1=>'Administrativo',2=>'Usuário');


    //usuarios do sistema por array
    $usuarios_app = array(
                    array('id'=> 1,'email'=>'adm@teste.com.br','senha'=>'1234',  'perfil_id'=>1),
                    array('id'=> 2,'email'=>'user@teste.com.br','senha'=>'1234', 'perfil_id'=>1),
                    array('id'=> 3,'email'=>'maria@teste.com.br','senha'=>'1234','perfil_id'=>2),
                    array('id'=> 4,'email'=>'jose@teste.com.br','senha'=>'1234', 'perfil_id'=>2)
    );


    /*
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';

    */

    foreach ($usuarios_app as $user) {
        print_r($user);
        
        if (($user['email'] == $_POST['email']) && ($user['senha'] == $_POST['senha']))  {
            $usuario_atenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];

        }
    }
    if ($usuario_atenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = true;
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;

        header('Location:home.php');
    } else{
        $_SESSION['autenticado'] = false;

        // echo 'Usuário Não encontrado';
        // Usando a função nativa do PHP header para redirecionar para uma página
        header('Location:index.php?login=erro');

    }
    /*
    
    print_r($_POST);
    echo '<br>';
    echo ($_POST['email']);
    echo '<br>';
    echo ($_POST['senha']);
    
    
?>

<?php 

//checar se a reqisicao é POST
$method = $_SERVER['REQUEST_METHOD'];


if ($method == 'POST') {

    //checar se a sessão já existe e está aberta
    if (isset($_SESSION['matricula'])) {

        header("location: /painel");

    } else {
        
        //não existe sessão, vamos cadastrar usuário e 'logar' ele
        $matricula = $_POST['matricula'];

        $_SESSION['matricula'] = $matricula;

        $senha = $_POST['senha'];

        $_SESSION['senha'] = $senha;

        header("location: /painel");

    }    

} else {

    header('location: /');

}
    





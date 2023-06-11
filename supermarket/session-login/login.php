<?php 

//checar se a reqisicao é POST
$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {

    if (isset($_SESSION['matricula'])) {

        header("location: /painel");

    } else {

        header("location: /create");

    }    

} else {

    header("location: /");

}
    

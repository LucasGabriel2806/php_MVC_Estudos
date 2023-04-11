<?php

include 'Controller/PessoaController.php';

/** 
 * parse_url: função
 * recebe dois parametros
 * 1º url que o usuario ta tentando acessar
 * 2º é um paremetro de configuração, que vai ser, 
 * o que eu quero pegar da url, que vai ser o path, 
 * o caminho que o usuario ta tentando acessar
 * 
 * $_SERVER: consigo pegar o que o usuario ta tentando 
 * acessar através da REQUEST_URI.
 * 
 * */ 
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//echo $url;

switch($url)
{
    case '/':
        echo "página inicial";
    break;

    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/form/save':
        PessoaController::save();
    break;

    default:
        echo "Erro 404";
    break;
   
}



<?php

class PessoaController
{
    /** 
     * Cada Método vai ser responsável por 
     * processar uma rota 
     */

    public static function index()
    {
        include 'View/modules/Pessoa/ListaPessoa.php';
    }

    public static function form()
    {
        include 'View/modules/Pessoa/FormPessoa.php';
    }

    public static function save()
    {
        //despejo da var post
        var_dump($_POST);
    }



}
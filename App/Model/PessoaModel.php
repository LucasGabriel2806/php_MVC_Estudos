<?php

class PessoaModel
{

    /**
     * Vou replicar as colunas que tenho no banco de dados, 
     * como propriedades da classe:
     */
    public $id, $nome, $cpf, $data_nascimento;

    public $rows;

    public function save()
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        $dao->insert($this);

    }

    public function getAllRows()
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        $this->rows = $dao->select();

    }


}
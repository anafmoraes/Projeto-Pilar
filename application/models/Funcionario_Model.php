<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario_Model extends CI_Model
{
    public function __construct(){
        parent::__construct();
    }

    public function cadastrar($user){
        return $this->db->insert('funcionario', $user);
    }

    // Realiza a operação de Update do CRUD
    public function atualizar_funcionario($chave, $user){
        // Informa que o funcionario que será atualizado será o que contém o id_funcionario = $chave
        $this->db->where('id_funcionario', $chave);

        //Define quais dados serão inseridos na tabela
        $this->db->set($user);

        //  Realiza a instrução de update na tabela selecionada, conforme os dados e o id informados
        return $this->db->update('funcionario');
    }

    public function pre_visualizacao(){

        // Indica em que tabela será realizada a pesquisa pelos atributos
        $this->db->from('funcionario');

        // Ordena por critério descendente de ID (esperança de ordenar do registro mais recente para o mais antigo)
        $this->db->order_by('id_funcionario','DESC');

        // Retorna o resultado da pesquisa
        return $this->db->get()->result();
    }

    public function pesquisa_unitaria($chave){
        // get_compiled_select() deve ser usado para a pesquisa funcionar corretamente
        $this->db->select();

        // Indica em que tabela será realizada a pesquisa pelos atributos
        $this->db->from('funcionario');

        $this->db->where('id_funcionario', $chave);

        // Retorna o resultado da pesquisa
        return $this->db->get()->result();
    }
}
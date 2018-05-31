<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Exposicao_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function cadastrar_exposicao($exposicao){
        return $this->db->insert('exposicao', $exposicao);
    }

    public function exposicoes($id){

        $this->db->select();

        $this->db->from('exposicao');

        // Ordena por critério descendente de ID (esperança de ordenar do registro mais recente para o mais antigo)
        $this->db->order_by('id_exposicao','DESC');

        $this->db->where('id_obra', $id);

        return $this->db->get()->result();
    }

    public function pesquisa_unitaria($id) {
        $this->db->select();

        $this->db->from('exposicao');

        $this->db->where('id_exposicao', $id);

        return $this->db->get()->result();
    }

    public function atualizar($id_exposicao, $dados){
        // Informa que a exposição que será atualizada será a que contém o id_exposicao = $id_exposicao
        $this->db->where('id_exposicao', $id_exposicao);

        //Define quais dados serão inseridos na tabela
        $this->db->set($dados);

        //  Realiza a instrução de update na tabela selecionada, conforme os dados e o id informados
        return $this->db->update('exposicao');
    }

    public function excluir_exposicoes_obras($id_obra) {
        $this->db->where('id_obra', $id_obra);

        return $this->db->delete('exposicao');
    }

    public function exclusao_unitaria($id_exposicao) {
        $this->db->where('id_exposicao', $id_exposicao);

        return $this->db->delete('exposicao');
    }
}
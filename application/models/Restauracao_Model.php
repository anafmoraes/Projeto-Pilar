<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Restauracao_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function cadastrar_restauracao($restauracao){
        return $this->db->insert('restauracao', $restauracao);
    }

    public function restauracoes($id) {

        $this->db->select();

        $this->db->from('restauracao');

        // Ordena por critério descendente de ID (esperança de ordenar do registro mais recente para o mais antigo)
        $this->db->order_by('id_restauracao','DESC');

        $this->db->where('id_obra', $id);

        return $this->db->get()->result();
    }

    public function pesquisa_unitaria($id){
        $this->db->select();

        $this->db->from('restauracao');

        $this->db->where('id_restauracao', $id);

        return $this->db->get()->result();
    }

    public function atualizar($id_restauracao, $dados){
        // Informa que a obra que será atualizada será a que contém o id_obra = id_restauracao
        $this->db->where('id_restauracao', $id_restauracao);

        //Define quais dados serão inseridos na tabela
        $this->db->set($dados);

        //  Realiza a instrução de update na tabela selecionada, conforme os dados e o id informados
        return $this->db->update('restauracao');
    }

    public function excluir_restauracoes_obras($id_obra) {
        $this->db->where('id_obra', $id_obra);

        return $this->db->delete('restauracao');
    }

    public function exclusao_unitaria($id_restauracao) {
        $this->db->where('id_restauracao', $id_restauracao);

        return $this->db->delete('restauracao');
    }
}
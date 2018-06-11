<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Obra_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    // Responsável por gerar a operação de Cadastrate do CRUD
    public function cadastrar_obra($obra){
        $this->db->insert('obra', $obra);
        $this->db->where('id_obra', $this->db->insert_id());
        return $this->db->get('obra')->result();
    }

    // Responsável por gerar a pré-visualização de TODAS as obras cadastradas na view
    public function pre_visualizacao(){
        // get_compiled_select() deve ser usado para a pesquisa funcionar corretamente
    	$this->db->select('id_obra', 'num_atual', 'num_anterior', 'nome_objeto', 'titulo',
            'imagem')->get_compiled_select();

    	// Indica em que tabela será realizada a pesquisa pelos atributos
    	$this->db->from('obra');

        // Ordena por critério descendente de ID (esperança de ordenar do registro mais recente para o mais antigo)
        $this->db->order_by('id_obra','DESC');

    	// Retorna o resultado da pesquisa
    	return $this->db->get()->result();
    }

    // Reaponsável por realizar a operação de Read do CRUD
    public function pesquisa_unitaria($chave){

        // get_compiled_select() deve ser usado para a pesquisa funcionar corretamente
        $this->db->select();

        // Indica em que tabela será realizada a pesquisa pelos atributos
        $this->db->from('obra');

        $this->db->where('id_obra', $chave);

        // Retorna o resultado da pesquisa
        return $this->db->get()->result();
    }

    // Realiza a operação de Update do CRUD
    public function atualizar_obra($id, $dados){
        // Informa que a obra que será atualizada será a que contém o id_obra = $id
        $this->db->where('id_obra', $id);

        //Define quais dados serão inseridos na tabela
        $this->db->set($dados);

        //  Realiza a instrução de update na tabela selecionada, conforme os dados e o id informados
        return $this->db->update('obra');
    }

    public function excluir_obra($id_obra) {
        $this->db->where('id_obra', $id_obra);

        return $this->db->delete('obra');
    }

    public function imagens_desta_obra($id){
        $this->db->select();

        // Indica em que tabela será realizada a pesquisa pelos atributos
        $this->db->from('galeria');

        $this->db->where('id_obra', $id);

        // Ordena por critério descendente de ID (esperança de ordenar do registro mais recente para o mais antigo)
        $this->db->order_by('id_img','DESC');

        // Retorna o resultado da pesquisa
        return $this->db->get()->result();
    }
    
    // Responsável por gerar a operação de Cadastrate do CRUD
    public function cadastrar_registro_imagem($dados){
        //Grava uma imagem na tabela de dados já inserindo um id
        $this->db->insert('galeria', $dados);

        //Retorna o último id inserido na tabela galeria
        return $this->db->insert_id();
    }

    // Responsável por gerar a operação de Update do CRUD
    public function atualizar_registro_img($id, $dados){
        // Informa que a imagem que será atualizada será a que contém o id_img = $id
        $this->db->where('id_img', $id);

        //Define quais dados serão inseridos na tabela
        $this->db->set($dados);

        //  Realiza a instrução de update na tabela selecionada, conforme os dados e o id informados
        return $this->db->update('galeria');
    }

    public function remover_registro_imagem($id_img){
        $this->db->where('id_img', $id_img);
        return $this->db->delete('galeria');
    }

    public function img_padrao($id_bra){
        $this->db->select();
        $this->db->from('galeria');
        $this->db->where('id_obra', $id_obra);
        $this->db->where('img_padrao', 1);
        return $this->db->get->result();
    }
}
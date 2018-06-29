<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //Caso o usuário não estiver logado ele é redirecionado para a página de login
        if(!$this->session->userdata('logado')){
            redirect(base_url('Funcionario_Controller/login'));
        }

        $this->load->model('Funcionario_Model');
        $this->load->model('Obra_Model');
    }

    public function index() {
        //Chama o modelo de cabeçalho
        $this->load->view('template/html-header');
        $this->load->view('template/header');

        // Chama a página inicial após o login
        $this->load->view('inicio/Inicio_View');

        //Chama o rodapé da página
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }

    public function admin(){
         //Chama o modelo de cabeçalho
        $this->load->view('template/html-header');
        $this->load->view('template/header');

        // Chama a página inicial da área administrativa
        $this->load->view('admin/painel_de_controle');

        //Chama o rodapé da página
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }
    public function supervisor(){
        $this->pre_visualizacao = $this->Obra_Model->pre_visualizacao();
        $dados['obras'] = $this->pre_visualizacao;

         //Chama o modelo de cabeçalho
        $this->load->view('template/html-header');
        $this->load->view('template/header');

        // Chama a página inicial da área administrativa
  
        $this->load->view('admin/painel_de_supervisor',$dados);

        //Chama o rodapé da página
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }
}
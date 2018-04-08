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
    }

    public function index() {
        //Chama o modelo de cabeçalho
        $this->load->view('frontend/template/html-header');
        $this->load->view('frontend/template/header');

        // Chama a página inicial após o login
        $this->load->view('inicio/Inicio_View');

        //Chama o rodapé da página
        $this->load->view('frontend/template/footer');
        $this->load->view('frontend/template/html-footer');
    }
}
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }

        $this->load->model('Funcionario_Model');
    }

    public function index() {
        $this->load->view('backend/Inicio_View');
    }
}
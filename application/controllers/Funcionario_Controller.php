<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Funcionario_Model');
    }

    public function index() {
    }

    public function cadastrar_funcionario() {

        // verifica se o usuário esta logado no sistema
        if($this->session->userdata('logado')){
            // verifica se o usuário possui permissão de administrador
            if($this->session->userdata('usuariologado')->id_tipoFuncionario != 1) {
                redirect(base_url('inicio'));
            }
            $this->load->view('backend/cadastrar_funcionario');
        } else { // usuário não esta logado, é direcionado para o login
            redirect(base_url('login'));
        }
    }

    public function salvar_funcionario() {

        // verifica se o usuário esta logado no sistema
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));

        } else {
            // verifica se o usuário possui permissão de administrador
            if ($this->session->userdata('usuariologado')->id_tipoFuncionario != 1) {
                redirect(base_url('inicio'));
            }

            $this->load->library('form_validation');

            $this->form_validation->set_rules('txt-nome', 'Nome do usuário', 'required|min_length[5]|max_length[80]');
            $this->form_validation->set_rules('txt-senha', 'Senha do usuário', 'required|min_length[6]|max_length[20]');
            $this->form_validation->set_rules('txt-confirmar-senha', 'Confirmar senha', 'required|matches[txt-senha]');
            $this->form_validation->set_rules('txt-cpf', 'CPF', 'required|is_unique[funcionario.cpf]');
            $this->form_validation->set_rules('txt-email', 'Email', 'required|valid_email|is_unique[funcionario.email]');

            if ($this->form_validation->run() == FALSE) {
                $this->cadastrar_funcionario();
            } else {

                $user['nome'] = $this->input->post('txt-nome');
                $user['senha'] = md5($this->input->post('txt-senha'));
                $user['email'] = $this->input->post('txt-email');
                $user['cpf'] = $this->input->post('txt-cpf');
                $user['id_tipoFuncionario'] = 2;
                $user['situacao'] = 1;

                if ($this->Funcionario_Model->cadastrar($user)) {
                    redirect(base_url('cadastrar_funcionario'));
                } else {
                    echo "Houve um erro no sistema";
                }
            }
        }
    }

    public function pagina_login() {
        // verifica se o usuário esta logado no sistema
        if($this->session->userdata('logado')){
            redirect(base_url('inicio'));
        }
        $this->load->view('backend/login');
    }

    public function login() {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('txt-email', 'Email do usuário','required|valid_email');
        $this->form_validation->set_rules('txt-senha', 'Senha do usuário', 'required|min_length[6]');

        if($this->form_validation->run() == FALSE) {
            $this->pagina_login();
        } else {
            $email = $this->input->post('txt-email');
            $senha =  md5($this->input->post('txt-senha'));

            $this->db->where('email', $email);
            $this->db->where('senha', $senha);

            $usuariologado = $this->db->get('funcionario')->result();

            if(count($usuariologado) == 1) {
                if($usuariologado[0]->situacao == 1) {
                    $this->session->set_userdata('usuariologado', $usuariologado[0]);
                    $this->session->set_userdata('logado', TRUE);

                    redirect(base_url('inicio'));
                } else {

                    $this->session->set_userdata('usuariologado', NULL);
                    $this->session->set_userdata('logado', FALSE);

                    redirect(base_url('login'));
                }
            } else {

                $this->session->set_userdata('usuariologado', NULL);
                $this->session->set_userdata('logado', FALSE);

                redirect(base_url('login'));
            }
        }
    }

    public function logout() {
        $this->session->set_userdata('usuariologado', NULL);
        $this->session->set_userdata('logado', FALSE);

        redirect(base_url('login'));
    }
}
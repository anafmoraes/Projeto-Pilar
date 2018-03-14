<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Funcionario_Model');
    }

    public function index(){
    }

    public function cadastrar_funcionario() {

        // verifica se o usuário esta logado no sistema
        if($this->session->userdata('logado')){
            // verifica se o usuário possui permissão de administrador (id_tipoFuncionario == 1 == administrador )
            if($this->session->userdata('usuariologado')->id_tipoFuncionario != 1){
                //Não seria melhor redirecionar para um modal ou página falando que ele nao tem esta permissao?
                redirect(base_url('inicio'));
            }
            $this->load->view('backend/funcionario/cadastrar_funcionario');
        }
        else { // usuário não esta logado, é direcionado para o login
            redirect(base_url('login'));
        }
    }

    public function salvar_funcionario() {

        // verifica se o usuário esta logado no sistema
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        else{
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
            }
            else{
                $user['nome'] = $this->input->post('txt-nome');
                $user['senha'] = md5($this->input->post('txt-senha'));
                $user['email'] = $this->input->post('txt-email');
                $user['cpf'] = $this->input->post('txt-cpf');
                $user['id_tipoFuncionario'] = 2;
                $user['situacao'] = 1;

                if ($this->Funcionario_Model->cadastrar($user)) {
                    redirect(base_url('pre_visualizacao_funcionario'));
                }
                else {
                    echo "Houve um erro no sistema";
                }
            }
        }
    }

    // Envia para a view dados específicos de cada funcionario cadastrada no sistema
    public function pre_visualizacao(){
        $this->resultado = $this->Funcionario_Model->pre_visualizacao();
        $dados['funcionarios'] = $this->resultado;
        $this->load->view('frontend/funcionario/Pre_Visualizacao_Func_View', $dados);
    }

    public function pesquisar_funcionario($id){
        /*Recebe o id do funcionario a ser persquisado no BD*/
        $id_func = $id;

        $this->pesquisa_unitaria = $this->Funcionario_Model->pesquisa_unitaria($id_func);
        $dados['resultado'] = $this->pesquisa_unitaria;
        $this->load->view('frontend/funcionario/Registro_View', $dados);
    }

    // Busca os dados do funcionario no BD e renderiza na tela para serem atualizados
    public function atualizar_perfil($id){
        //Pega o valor do form para renderizar no form de atualização
        $id_func = $id;

        //Realiza a busca pelo registro a ser atualizada no banco de dados
        $this->pesquisa_unitaria = $this->Funcionario_Model->pesquisa_unitaria($id_func);
        $dados['resultado'] = $this->pesquisa_unitaria;
        $dados['id_funcionario'] = $id_func;
        $this->load->view('backend/funcionario/Atualizar_Funcionario_View',$dados);
    }

    //Realiza a operação de Update do CRUD
    public function salvar_atualizacao($id){
        $this->load->library('form_validation');

        /*Valida os outros campos do formulário*/
        $this->form_validation->set_rules('txt-tipo', 'TIPO', 'required');
        $this->form_validation->set_rules('txt-situacao', 'SITUACAO', 'required');
        $this->form_validation->set_rules('txt-nome', 'Nome do usuário', 'required|min_length[5]|max_length[80]');
        $this->form_validation->set_rules('txt-senha', 'Senha do usuário', 'required|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('txt-confirmar-senha', 'Confirmar senha', 'required|matches[txt-senha]');
        $this->form_validation->set_rules('txt-cpf', 'CPF', 'required');
        $this->form_validation->set_rules('txt-email', 'Email', 'required|valid_email');

        // Verifica se a validação de dados obteve sucesso
        if ($this->form_validation->run() == FALSE){
            $this->atualizar_perfil();
        }
        else{
            $chave = $id;
            $user['nome'] = $this->input->post('txt-nome');
            $user['senha'] = md5($this->input->post('txt-senha'));
            $user['email'] = $this->input->post('txt-email');
            $user['cpf'] = $this->input->post('txt-cpf');
            $user['id_tipoFuncionario'] = $this->input->post('txt-tipo');
            $user['situacao'] = $this->input->post('txt-situacao');

            if($this->Funcionario_Model->atualizar_funcionario($chave, $user)){
                redirect(base_url('pre_visualizacao_funcionario'));
            }
            else{
                echo "Validação de dados na atualização do perfil falhou.";
            }
        }
    }

    // Realiza a validação de dados para a exclusão lógica de um usuário do sistema
    public function exclusao_logica(){
        $this->load->library('form_validation');

        // Recebe o id_funcionario vindo do form para validar e usar no método update
        $this->form_validation->set_rules('txt-id', 'ID', 'required');
        $this->form_validation->set_rules('txt-situacao', 'SITUACAO', 'required');

        // Verifica se a validação de dados obteve sucesso
        if ($this->form_validation->run() == FALSE){
                $this->atualizar_perfil();
        }
        else{
            $chave = $this->input->post('txt-id');
            $user['situacao'] = $this->input->post('txt-situacao');

            if($this->Funcionario_Model->atualizar_funcionario($chave, $user)){
                redirect(base_url('pre_visualizacao_funcionario'));
            }
            else{
                echo "Validação de dados na atualização do perfil falhou.";
            }
        }
    }

        // Realiza a validação de dados para a exclusão lógica de um usuário do sistema
    public function inclusao_logica(){
        $this->load->library('form_validation');

        // Recebe o id_funcionario vindo do form para validar e usar no método update
        $this->form_validation->set_rules('txt-id', 'ID', 'required');
        $this->form_validation->set_rules('txt-situacao', 'SITUACAO', 'required');

        // Verifica se a validação de dados obteve sucesso
        if ($this->form_validation->run() == FALSE){
                $this->atualizar_perfil();
        }
        else{
            $chave = $this->input->post('txt-id');
            $user['situacao'] = $this->input->post('txt-situacao');

            if($this->Funcionario_Model->atualizar_funcionario($chave, $user)){
                redirect(base_url('pre_visualizacao_funcionario'));
            }
            else{
                echo "Validação de dados na atualização do perfil falhou.";
            }
        }
    }

    //Método que chama a página inicial do sistema
    public function pagina_login() {
        // verifica se o usuário esta logado no sistema
        if($this->session->userdata('logado')){
            redirect(base_url('inicio'));
        }

        $this->load->view('template/html-header');
        $this->load->view('template/header');
        $this->load->view('login');
        $this->load->view('template/body1');
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }

    public function login() {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('txt-email', 'Email do usuário','required|valid_email');
        $this->form_validation->set_rules('txt-senha', 'Senha do usuário', 'required|min_length[6]');

        if($this->form_validation->run() == FALSE) {
            $this->pagina_login();
        }
        else {
            // Recebe as variáveis do form
            $email = $this->input->post('txt-email');
            $senha =  md5($this->input->post('txt-senha'));

            // Compara valores passados no login com valores salvos no banco de dados
            $this->db->where('email', $email);
            $this->db->where('senha', $senha);

            //Guarda todos os dados buscados no banco de dados
            $usuariologado = $this->db->get('funcionario')->result();
            // 1 == true ou $usuariologado == 1?
            if(count($usuariologado) == 1){
                // Esse if redireciona para uma página especifica conforme a situalçao do usuário?
                //Se for, deve ter um redirecionamento (visão do sistema) para cada tipo de funcionario?
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
                // Este else é chamado quando os dados de login não batem?
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
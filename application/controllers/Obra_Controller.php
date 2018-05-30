<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Obra_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //Caso o usuário não estiver logado ele é redirecionado para a página de login
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }

        $this->load->model('Obra_Model');
        $this->load->model('Exposicao_Model');
        $this->load->model('Restauracao_Model');
    }

    public function index(){
        $this->load->view('backend/obra/Obra_View');
    }

    /*######################################Métodos referentes as obras######################################*/

    public function cadastrar_obra() {
        $this->load->view('template/html-header');
        $this->load->view('template/header');

        $dados['info'] = 'Cadastrar Obra';
        $this->load->view('backend/obra/Cadastrar_Obra_View', $dados);

        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }

    /*Salva todos os dados do formulário nas respepctivas tabelas e retorna para a tela de cadastro*/
    public function salvar_obra() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('localizacao','Localização da obra','required|max_length[1000]');
        $this->form_validation->set_rules('numero-atual','Numero Atual da obra','required|max_length[45]');
        $this->form_validation->set_rules('numero-anterior','Numero anterior da obra','required|max_length[45]');
        $this->form_validation->set_rules('fichas-relacionadas','Fichas relacionadas a obra', 'max_length[1000]');
        $this->form_validation->set_rules('nome-objeto','Nome da obra','required|max_length[250]');
        $this->form_validation->set_rules('titulo','Titulo da obra','required|max_length[250]');
        $this->form_validation->set_rules('classe','Classe da obra','required|max_length[250]');
        $this->form_validation->set_rules('sub-classe','Sub-classe da obra','required|max_length[250]');
        $this->form_validation->set_rules('material','Material da obra','required|max_length[250]');
        $this->form_validation->set_rules('tecnica','Técnica utilizada','required|max_length[250]');
        $this->form_validation->set_rules('inscricoes-marcas','Inscrições/marcas','required|max_length[500]');
        $this->form_validation->set_rules('epoca','Época da obra','required|max_length[500]');
        $this->form_validation->set_rules('autoria','Autoria da obra','required|max_length[250]');
        $this->form_validation->set_rules('origem','Origem da obra','required|max_length[250]');
        $this->form_validation->set_rules('procedencia','Procedência','required|max_length[250]');
        $this->form_validation->set_rules('conservacao','Conservação','required|max_length[50]');
        $this->form_validation->set_rules('altura','Altura da obra','required|max_length[15]');
        $this->form_validation->set_rules('largura','Largura da obra','required|max_length[15]');
        $this->form_validation->set_rules('comprimento','Comprimento da obra','required|max_length[15]');
        $this->form_validation->set_rules('profundidade','Profundidade da obra','required|max_length[15]');
        $this->form_validation->set_rules('diametro','Diâmetro da obra','required|max_length[15]');
        $this->form_validation->set_rules('peso','Peso da obra','required|max_length[15]');
        $this->form_validation->set_rules('circunferencia','Circunferencia da obra','required|max_length[15]');
        $this->form_validation->set_rules('descricao-objeto','Descrição do objeto','required|max_length[10000]');
        $this->form_validation->set_rules('carac-tecnicas','Caracteristicas técnicas','required|max_length[5000]');
        $this->form_validation->set_rules('carac-inconografica','Caracteristicas iconograficas','required|max_length[5000]');
        $this->form_validation->set_rules('carac-estilisticas','Caracteristicas estilisticas','required|max_length[5000]');
        $this->form_validation->set_rules('dados-historicos','Dados historicos','required|max_length[500]');
        $this->form_validation->set_rules('publicacao','Publicações','required|max_length[1000]');
        $this->form_validation->set_rules('fontes-primarias','Fontes primarias','required|max_length[500]');
        $this->form_validation->set_rules('fontes-bibliograficas','Fontes bibliograficas','required|max_length[500]');
        $this->form_validation->set_rules('modo-aquisicao','Modo de aquisição','required|max_length[250]');
        $this->form_validation->set_rules('data-aquisicao','Data de aquisição','required');
        $this->form_validation->set_rules('responsavel','Responsável','required|max_length[60]');
        $this->form_validation->set_rules('nome-fotografo','Nome do fotografo','required|max_length[60]');
        $this->form_validation->set_rules('responsavel-digitacao','Responsavel pela digitação','required|max_length[60]');
        $this->form_validation->set_rules('data-digitacao','Data da digitação','required');
        $this->form_validation->set_rules('responsavel-revisao','Responsavel pela revisao','required|max_length[60]');
        $this->form_validation->set_rules('data-revisao','Data da revisao','required');
        $this->form_validation->set_rules('responsavel-alteracao','Responsavel pela alteração','required|max_length[60]');
        $this->form_validation->set_rules('data-alteracao','Data da alteração','required');
        

        if($this->form_validation->run() == FALSE) {
            $this->cadastrar_obra();
        } else {
            $obra['num_atual'] = $this->input->post('numero-atual');
            $obra['num_anterior'] = $this->input->post('numero-anterior');
            $obra['fichas_relacionadas'] = $this->input->post('fichas-relacionadas');
            $obra['nome_objeto'] = $this->input->post('nome-objeto');
            $obra['titulo'] = $this->input->post('titulo');
            $obra['sub_classe'] = $this->input->post('sub-classe');
            $obra['classe'] = $this->input->post('classe');
            $obra['material'] = $this->input->post('material');
            $obra['tecnica'] = $this->input->post('tecnica');
            $obra['inscricoes_marcas'] = $this->input->post('inscricoes-marcas');
            $obra['epoca'] = $this->input->post('epoca');
            $obra['autoria'] = $this->input->post('autoria');
            $obra['origem'] = $this->input->post('origem');
            $obra['procedencia'] = $this->input->post('procedencia');
            $obra['conservacao'] = $this->input->post('conservacao');
            $obra['localizacao'] = $this->input->post('localizacao');
            $obra['altura'] = $this->input->post('altura');
            $obra['largura'] = $this->input->post('largura');
            $obra['comprimento'] = $this->input->post('comprimento');
            $obra['profundidade'] = $this->input->post('profundidade');
            $obra['diametro'] = $this->input->post('diametro');
            $obra['peso'] = $this->input->post('peso');
            $obra['circunferencia'] = $this->input->post('circunferencia');
            $obra['resp_preenc_tec'] =$this->input->post('responsavel') ;
            $obra['nome_fotografo'] = $this->input->post('nome-fotografo');
            $obra['resp_digitacao'] = $this->input->post('responsavel-digitacao');
            $obra['data_digitacao'] = $this->input->post('data-digitacao');
            $obra['resp_revisao'] = $this->input->post('responsavel-revisao');
            $obra['data_revisao'] = $this->input->post('data-revisao');
            $obra['resp_alteracao'] = $this->input->post('responsavel-alteracao');
            $obra['data_alteracao'] = $this->input->post('data-alteracao');
            $obra['descricao_objeto'] = $this->input->post('descricao-objeto');
            $obra['carac_tecnica'] = $this->input->post('carac-tecnicas');
            $obra['carac_inconografica'] = $this->input->post('carac-inconografica');
            $obra['carac_estilistica'] = $this->input->post('carac-estilisticas');
            $obra['dados_historicos'] = $this->input->post('dados-historicos');
            $obra['publicacao'] = $this->input->post('publicacao');
            $obra['fontes_primarias'] = $this->input->post('fontes-primarias');
            $obra['fontes_bib'] = $this->input->post('fontes-bibliograficas');
            $obra['modo_aquisicao'] = $this->input->post('modo-aquisicao');
            $obra['data_aquisicao'] = $this->input->post('data-aquisicao');
            $obra['id_funcionario'] = $this->session->userdata('usuariologado')->id_funcionario;
            $obra['situacao'] = 1;


            if($dados['obras'] = $this->Obra_Model->cadastrar_obra($obra)) {
                redirect(base_url('Obra_Controller/pre_visualizacao'));
            } else {
                echo "Houve um erro no sistema";
            }
        }
    }

    // Envia, para a view, dados específicos de cada obra cadastrada no sistema
    public function pre_visualizacao() {
        $this->pre_visualizacao = $this->Obra_Model->pre_visualizacao();        
        $dados['obras'] = $this->pre_visualizacao;

        //Chama o modelo de cabeçalho
        $this->load->view('template/html-header');
        $this->load->view('template/header');

        $this->load->view('frontend/obra/Pre_Visualizacao_Obra_View', $dados);

        //Chama o rodapé da página
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
        
    }

    // Envia para a view uma obra específica de acordo com o id que é passado na view
    public function pesquisar_obra($id) {
        $this->pesquisa_unitaria = $this->Obra_Model->pesquisa_unitaria($id);
        $dados['resultado'] = $this->pesquisa_unitaria;
        
        //$this->pesquisaTipo = 

        //Chama o modelo de cabeçalho
        $this->load->view('template/html-header');
        $this->load->view('template/header');

        $this->load->view('frontend/obra/Registro_View', $dados);

        //Chama o rodapé da página
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }

    // Valida e atualiza os dados de uma determinada obra
    public function atualizar_obra($id) {

        // Pega o ID da obra a ser atualziada
        $id_obra = $id;

        //Realiza a busca pela obra a ser atualizada no banco de dados
        $this->pesquisa_unitaria = $this->Obra_Model->pesquisa_unitaria($id_obra);
        $dados['resultado'] = $this->pesquisa_unitaria;
        $dados['id_obra'] = $id_obra;       

        //Chama o modelo de cabeçalho
        $this->load->view('template/html-header');
        $this->load->view('template/header');

        // Carrega o formulário de atualização da obra
        $this->load->view('backend/obra/Atualizar_Obra_View', $dados);

        //Chama o rodapé da página
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');        
    }

    public function salvar_atualizacao($id) {

        $id_obra = $id;
        $this->load->library('form_validation');

        //Não funciona colocando a variável $id_obra como parametro do metodo na forma de string
        //$this->form_validation->set_rules('$id_obra', 'ID', 'required');

        //Realiza a validação dos demais campos do form
        $this->form_validation->set_rules('localizacao','Localização da obra','required|max_length[1000]');
        $this->form_validation->set_rules('numero-atual','Numero Atual da obra','required|max_length[45]');
        $this->form_validation->set_rules('numero-anterior','Numero anterior da obra','required|max_length[45]');
        $this->form_validation->set_rules('fichas-relacionadas','Fichas relacionadas a obra', 'max_length[1000]');
        $this->form_validation->set_rules('nome-objeto','Nome da obra','required|max_length[250]');
        $this->form_validation->set_rules('titulo','Titulo da obra','required|max_length[250]');
        $this->form_validation->set_rules('classe','Classe da obra','required|max_length[250]');
        $this->form_validation->set_rules('sub-classe','Sub-classe da obra','required|max_length[250]');
        $this->form_validation->set_rules('material','Material da obra','required|max_length[250]');
        $this->form_validation->set_rules('tecnica','Técnica utilizada','required|max_length[250]');
        $this->form_validation->set_rules('inscricoes-marcas','Inscrições/marcas','required|max_length[500]');
        $this->form_validation->set_rules('epoca','Época da obra','required|max_length[500]');
        $this->form_validation->set_rules('autoria','Autoria da obra','required|max_length[250]');
        $this->form_validation->set_rules('origem','Origem da obra','required|max_length[250]');
        $this->form_validation->set_rules('procedencia','Procedência','required|max_length[250]');
        $this->form_validation->set_rules('conservacao','Conservação','required|max_length[50]');
        $this->form_validation->set_rules('altura','Altura da obra','required|max_length[15]');
        $this->form_validation->set_rules('largura','Largura da obra','required|max_length[15]');
        $this->form_validation->set_rules('comprimento','Comprimento da obra','required|max_length[15]');
        $this->form_validation->set_rules('profundidade','Profundidade da obra','required|max_length[15]');
        $this->form_validation->set_rules('diametro','Diâmetro da obra','required|max_length[15]');
        $this->form_validation->set_rules('peso','Peso da obra','required|max_length[15]');
        $this->form_validation->set_rules('circunferencia','Circunferencia da obra','required|max_length[15]');
        $this->form_validation->set_rules('descricao-objeto','Descrição do objeto','required|max_length[10000]');
        $this->form_validation->set_rules('carac-tecnicas','Caracteristicas técnicas','required|max_length[5000]');
        $this->form_validation->set_rules('carac-inconografica','Caracteristicas iconograficas','required|max_length[5000]');
        $this->form_validation->set_rules('carac-estilisticas','Caracteristicas estilisticas','required|max_length[5000]');
        $this->form_validation->set_rules('dados-historicos','Dados historicos','required|max_length[500]');
        $this->form_validation->set_rules('publicacao','Publicações','required|max_length[1000]');
        $this->form_validation->set_rules('fontes-primarias','Fontes primarias','required|max_length[500]');
        $this->form_validation->set_rules('fontes-bibliograficas','Fontes bibliograficas','required|max_length[500]');
        $this->form_validation->set_rules('modo-aquisicao','Modo de aquisição','required|max_length[250]');
        $this->form_validation->set_rules('data-aquisicao','Data de aquisição','required');
        $this->form_validation->set_rules('responsavel','Responsável','required|max_length[60]');
        $this->form_validation->set_rules('nome-fotografo','Nome do fotografo','required|max_length[60]');
        $this->form_validation->set_rules('responsavel-digitacao','Responsavel pela digitação','required|max_length[60]');
        $this->form_validation->set_rules('data-digitacao','Data da digitação','required');
        $this->form_validation->set_rules('responsavel-revisao','Responsavel pela revisao','required|max_length[60]');
        $this->form_validation->set_rules('data-revisao','Data da revisao','required');
        $this->form_validation->set_rules('responsavel-alteracao','Responsavel pela alteração','required|max_length[60]');
        $this->form_validation->set_rules('data-alteracao','Data da alteração','required');

        if($this->form_validation->run() == FALSE) {
            // Se a validação falhar chama o método de atualização novamente. '$this' indica que o método pertence a esta classe
            $this->atualizar_obra($id);
        }
        else {
            $obra['num_atual'] = $this->input->post('numero-atual');
            $obra['num_anterior'] = $this->input->post('numero-anterior');
            $obra['fichas_relacionadas'] = $this->input->post('fichas-relacionadas');
            $obra['nome_objeto'] = $this->input->post('nome-objeto');
            $obra['titulo'] = $this->input->post('titulo');
            $obra['sub_classe'] = $this->input->post('sub-classe');
            $obra['classe'] = $this->input->post('classe');
            $obra['material'] = $this->input->post('material');
            $obra['tecnica'] = $this->input->post('tecnica');
            $obra['inscricoes_marcas'] = $this->input->post('inscricoes-marcas');
            $obra['epoca'] = $this->input->post('epoca');
            $obra['autoria'] = $this->input->post('autoria');
            $obra['origem'] = $this->input->post('origem');
            $obra['procedencia'] = $this->input->post('procedencia');
            $obra['conservacao'] = $this->input->post('conservacao');
            $obra['localizacao'] = $this->input->post('localizacao');
            $obra['altura'] = $this->input->post('altura');
            $obra['largura'] = $this->input->post('largura');
            $obra['comprimento'] = $this->input->post('comprimento');
            $obra['profundidade'] = $this->input->post('profundidade');
            $obra['diametro'] = $this->input->post('diametro');
            $obra['peso'] = $this->input->post('peso');
            $obra['circunferencia'] = $this->input->post('circunferencia');
            $obra['resp_preenc_tec'] =$this->input->post('responsavel') ;
            $obra['nome_fotografo'] = $this->input->post('nome-fotografo');
            $obra['resp_digitacao'] = $this->input->post('responsavel-digitacao');
            $obra['data_digitacao'] = $this->input->post('data-digitacao');
            $obra['resp_revisao'] = $this->input->post('responsavel-revisao');
            $obra['data_revisao'] = $this->input->post('data-revisao');
            $obra['resp_alteracao'] = $this->input->post('responsavel-alteracao');
            $obra['data_alteracao'] = $this->input->post('data-alteracao');
            $obra['descricao_objeto'] = $this->input->post('descricao-objeto');
            $obra['carac_tecnica'] = $this->input->post('carac-tecnicas');
            $obra['carac_inconografica'] = $this->input->post('carac-inconografica');
            $obra['carac_estilistica'] = $this->input->post('carac-estilisticas');
            $obra['dados_historicos'] = $this->input->post('dados-historicos');
            $obra['publicacao'] = $this->input->post('publicacao');
            $obra['fontes_primarias'] = $this->input->post('fontes-primarias');
            $obra['fontes_bib'] = $this->input->post('fontes-bibliograficas');
            $obra['modo_aquisicao'] = $this->input->post('modo-aquisicao');
            $obra['data_aquisicao'] = $this->input->post('data-aquisicao');
            $obra['id_funcionario'] = $this->session->userdata('usuariologado')->id_funcionario;

            if($this->Obra_Model->atualizar_obra($id, $obra)) {
                $dados['resultado'] = $this->Obra_Model->pesquisa_unitaria($id);
                $this->load->view('frontend/obra/Registro_View', $dados);
            }
            else {
                echo "Houve um erro no sistema";
            }
        }
    }

    //Realiza a exclusão lógica de uma obra do sistema (Apenas Supervisores)
    public function exclusao_logica($id) {

        $id_obra = $id;        
        $obra['situacao'] = 0;

        if($this->Obra_Model->atualizar_obra($id, $obra)) {
            $dados['resultado'] = $this->Obra_Model->pesquisa_unitaria($id);
            $this->load->view('frontend/obra/Registro_View', $dados);
        }
        else {
            echo "Houve um erro no sistema";
        }
    }

    //Realiza a inclusao lógica de uma obra do sistema (Apenas Supervisores)
    public function inclusao_logica($id) {

        $id_obra = $id;        
        $obra['situacao'] = 1;
        
        if($this->Obra_Model->atualizar_obra($id, $obra)) {
            $dados['resultado'] = $this->Obra_Model->pesquisa_unitaria($id);
            $this->load->view('frontend/obra/Registro_View', $dados);
        }
        else {
            echo "Houve um erro no sistema";
        }
    }

    // Exclui uma obra e as exposições e restaurações relacionadas a ela (Propagação)
    public function remover_obra($id_obra) {

        /*Acessa o BD para excluir todas as exposições associadas à obra*/
        if($this->Exposicao_Model->excluir_exposicoes_obras($id_obra)){
            /*Acessa o BD para excluir todas as restaurações associadas à obra*/
            if($this->Restauracao_Model->excluir_restauracoes_obras($id_obra)){
                /*Acessa o BD para excluir todas aobra selecionada*/
                if($this->Obra_Model->excluir_obra($id_obra)) {
                    redirect(base_url('Obra_Controller/pre_visualizacao'));
                }
                else{
                    echo "Houve um erro inesperado na exclusão da obra selecionada";
                }
            }
            else{
                echo "Houve um erro inesperado na exclusão das restaurações ligadas a obra.";
            }
        }
        else {
            echo "Houve um erro inesperado na exclusão das exposições ligadas a obra.";
        }
    }



/*######################################Métodos referentes as exposições#############################################-*/

    // Pesquisa e retorna todas as exposiçoes ligadas a uma determinada obra
    public function visualizar_exposicoes($id) {

        $this->load->view('template/html-header');
        $this->load->view('template/header');

        //$id = $this->input->post('txt-id');
        $dados['id_obra'] = $id;

        if($dados['exposicoes'] = $this->Exposicao_Model->exposicoes($id)) {
            $this->load->view('backend/obra/Exposicao_View', $dados);
        }
        else{
            $this->load->view('backend/obra/Exposicao_View', $dados);
        }

        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }

    // Carrega a página de cadastro de exposições
    public function cadastrar_exposicao($id_obra){
        $dados['id_obra'] = $id_obra;

        $this->load->view('template/html-header');
        $this->load->view('template/header');
        $this->load->view('backend/obra/Cadastrar_Exposicao_View', $dados);
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }

    // Salva as exposições no banco e relaciona com a obra
    public function salvar_exposicao($id_obra) {
        /*Valida o preenchimento dos campos do formulário*/
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome-exposicao','Nome da Exposição','required|min_length[2]|max_length[100]');
        $this->form_validation->set_rules('descricao-exposicao', 'Descrição da Exposição','required|min_length[2]|max_length[3000]');
        $this->form_validation->set_rules('local-realizacao', 'Local de Realização','required|min_length[2]|max_length[100]');
        $this->form_validation->set_rules('data-inicio-exp', 'Data de Início da Exposição','required');
        $this->form_validation->set_rules('data-fim-exp', 'Data de Término da Exposição','required');

        /*Verifica se a validação obteve sucesso*/
        if ($this->form_validation->run() == FALSE) {
            /*Se verificação de dados falhar renderiza o formulario para nov preenchimento*/
            $this->cadastrar_exposicao($id_obra);
        }
        else {
            /*Passa os dados do cadastro para uma vaŕiável apenas*/
            $exposicao['nome_exposicao'] = $this->input->post('nome-exposicao');
            $exposicao['descricao'] = $this->input->post('descricao-exposicao');
            $exposicao['local_realizacao'] = $this->input->post('local-realizacao');
            $exposicao['data_inicio'] = $this->input->post('data-inicio-exp');
            $exposicao['data_fim'] = $this->input->post('data-fim-exp');
            $exposicao['id_obra'] = $id_obra;

            if($this->Exposicao_Model->cadastrar_exposicao($exposicao)) {
                //$dados['exposicoes'] = $this->Exposicao_Model->exposicoes($id_obra);
                //$dados['id_obra'] = $id_obra;
                $this->visualizar_exposicoes($id_obra);
            }
            else{
                echo "Houve um erro inesperado, as informações não foram salvas.";
            }
        }
    }

    public function atualizar_exposicao($id_obra, $id_exposicao) {

        $dados['exposicoes'] = $this->Exposicao_Model->pesquisa_unitaria($id_exposicao);
        $dados['id_exposicao'] = $id_exposicao;
        $dados['id_obra'] = $id_obra;

        $this->load->view('backend/obra/Atualizar_Exposicao_View', $dados);
    }

    public function salvar_atualizacao_exposicao($id_obra, $id_exposicao) {

        /*Valida o preenchimento dos campos do formulário*/
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome-exposicao','Nome da Exposição','required|min_length[2]|max_length[100]');
        $this->form_validation->set_rules('descricao-exposicao', 'Descrição da Exposição','required|min_length[2]|max_length[3000]');
        $this->form_validation->set_rules('local-realizacao', 'Local de Realização','required|min_length[2]|max_length[100]');
        $this->form_validation->set_rules('data-inicio-exp', 'Data de Início da Exposição','required');
        $this->form_validation->set_rules('data-fim-exp', 'Data de Término da Exposição','required');

        /*Verifica se a validação obteve sucesso*/
        if ($this->form_validation->run() == FALSE) {
            /*Se verificação de dados falhar renderiza o formulario para novo preenchimento*/
            $this->atualizar_exposicao($id_obra, $id_exposicao);
        }
        else {
            /*Envia os dados para a função do model que irá grava-los no BD*/
            $exposicao['nome_exposicao'] = $this->input->post('nome-exposicao');
            $exposicao['descricao'] = $this->input->post('descricao-exposicao');
            $exposicao['local_realizacao'] = $this->input->post('local-realizacao');
            $exposicao['data_inicio'] = $this->input->post('data-inicio-exp');
            $exposicao['data_fim'] = $this->input->post('data-fim-exp');

            if($this->Exposicao_Model->atualizar($id_exposicao, $exposicao)) {
                $dados['exposicoes'] = $this->Exposicao_Model->exposicoes($id_obra);
                $dados['id_obra'] = $id_obra;
                $this->load->view('backend/obra/Exposicao_View', $dados);
            } else {
                echo "Houve um erro inesperado, as informações não foram salvas.";
            }
        }
    }

    public function excluir_exposicao($id_obra, $id_exposicao) {
        /*$this->load->view('template/html-header');
        $this->load->view('template/header');*/

        if($this->Exposicao_Model->exclusao_unitaria($id_exposicao)){
            //$dados['id_obra'] = $id_obra;

            $this->visualizar_exposicoes($id_obra);
        }
    }

    /*######################################Métodos referentes as restaurações######################################*/

    public function visualizar_restauracoes($id_obra) {
        $this->load->view('template/html-header');
        $this->load->view('template/header');

        //$id = $id_obra;
        if($dados['restauracoes'] = $this->Restauracao_Model->restauracoes($id_obra)) {
            $dados['id_obra'] = $id_obra;
            $this->load->view('backend/obra/Restauracao_View', $dados);
        }
        else{
            $dados['id_obra'] = $id_obra;
            $this->load->view('backend/obra/Restauracao_View', $dados);
        }

        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }

    public function cadastrar_restauracao($id_obra){
        $dados['id_obra'] = $id_obra;
        //Chama o modelo de cabeçalho
        $this->load->view('template/html-header');
        $this->load->view('template/header');

        $this->load->view('backend/obra/Cadastrar_Restauracao_View', $dados);

         //Chama o rodapé da página
        $this->load->view('template/footer');
        $this->load->view('template/html-footer'); 
    }

    public function salvar_restauracao($id_obra) {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('tipo-intervencao', 'Intervencão', 'required|max_length[60]');
        $this->form_validation->set_rules('nome-restaurador', 'Nome do Restaurador', 'required|max_length[60]');
        $this->form_validation->set_rules('data-restauracao', 'Data da Restaucarao', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->cadastrar_restauracao($id_obra);
        }
        else {
            $restauracao['intervencao'] = $this->input->post('tipo-intervencao');
            $restauracao['nome_restaurador'] = $this->input->post('nome-restaurador');
            $restauracao['data_restauracao'] = $this->input->post('data-restauracao');
            $restauracao['id_obra'] = $id_obra;

            if($this->Restauracao_Model->cadastrar_restauracao($restauracao)) {
                //$dados['restauracoes'] = $this->Restauracao_Model->restauracoes($id_obra);
                //$dados['id_obra'] = $id_obra;
                $this->visualizar_restauracoes($id_obra);
            }
            else{
                echo "Houve um erro inesperado, as informações não foram salvas.";
            }
        }
    }

    public function atualizar_restauracao($id_obra, $id_restauracao) {

        $dados['restauracoes'] = $this->Restauracao_Model->pesquisa_unitaria($id_restauracao);
        $dados['id_restauracao'] = $id_restauracao;
        $dados['id_obra'] = $id_obra;

        $this->load->view('backend/obra/Atualizar_Restauracao_View', $dados);
    }

    public function salvar_atualizacao_restauracao($id_obra, $id_restauracao) {

        /*Valida o preenchimento dos campos do formulário*/
        $this->load->library('form_validation');

        $this->form_validation->set_rules('tipo-intervencao', 'Intervencão', 'required|max_length[60]');
        $this->form_validation->set_rules('nome-restaurador', 'Nome do Restaurador', 'required|max_length[60]');
        $this->form_validation->set_rules('data-restauracao', 'Data da Restaucarao', 'required');

        /*Verifica se a validação obteve sucesso*/
        if ($this->form_validation->run() == FALSE) {
            /*Se verificação de dados falhar renderiza o formulario para nov preenchimento*/
            $this->atualizar_restauracao($id_obra, $id_restauracao);
        }
        else {
            /*Envia os dados para a função do model que irá grava-los no BD*/
            $restauracao['intervencao'] = $this->input->post('tipo-intervencao');
            $restauracao['nome_restaurador'] = $this->input->post('nome-restaurador');
            $restauracao['data_restauracao'] = $this->input->post('data-restauracao');

            if($this->Restauracao_Model->atualizar($id_restauracao, $restauracao)) {
                $dados['restauracoes'] = $this->Restauracao_Model->restauracoes($id_obra);
                $dados['id_obra'] = $id_obra;
                $this->load->view('backend/obra/Restauracao_View', $dados);
            }
            else {
                echo "Houve um erro inesperado, as informações não foram salvas.";
            }
        }
    }

    public function excluir_restauracao($id_obra, $id_restauracao) {

        //Exclui um registro de uma restauração especifica do banco passando o id para a pesquisa
        if($this->Restauracao_Model->exclusao_unitaria($id_restauracao)) {

            $this->visualizar_restauracoes($id_obra);
        }
    }

    public function galeria($id) {

        //Realiza a busca pela obra a ser atualizada no banco de dados
        $this->pesquisa_unitaria = $this->Obra_Model->pesquisa_unitaria($id);
        $dados['resultado'] = $this->pesquisa_unitaria;
        $dados['id_obra'] = $id;       

        //Chama o modelo de cabeçalho
        $this->load->view('template/html-header');
        $this->load->view('template/header');

        // Carrega o formulário de atualização da obra
        $this->load->view('backend/obra/Galeria', $dados);

        //Chama o rodapé da página
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');    
    }

    public function add_img_obra($id) {
        echo "OK";
    }
}

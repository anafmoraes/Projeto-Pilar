<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
/*Rotas padrão*/
$route['default_controller'] = 'Funcionario_Controller/pagina_login';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['operacao_realizada_sucesso'] = 'Wellcome/operacao_bem_sucedida';
$route['inicio'] = 'Inicio_Controller';

/*Rotas relacionadas às obras*/
$route['cadastrar_obra'] = 'Obra_Controller/cadastrar_obra';
$route['pre_visualizacao_obra'] = 'Obra_Controller/pre_visualizacao';
$route['visualizar_registro'] = 'Obra_Controller/pesquisar_obra';
$route['cadastrar_exposicao'] = 'Exposicao_Controller/cadastrar_exposicao';
$route['cadastrar_restauracao'] = 'Restauracao_Controller/cadastrar_restauracao';

/*Rotas relacionadas à sessão*/
$route['entrar'] = 'Funcionario_Controller/pagina_login';
$route['login'] = 'Funcionario_Controller/login';
$route['logout'] = 'Funcionario_Controller/logout';

/*Rotas relacionadas à usuários*/
$route['cadastrar_funcionario'] = 'Funcionario_Controller/cadastrar_funcionario';
$route['atualizar'] = 'Funcionario_Controller/atualizar_perfil';
$route['pre_visualizacao_funcionario'] = 'Funcionario_Controller/pre_visualizacao';
$route['perfil'] = 'Funcionario_Controller/pesquisar_funcionario';
$route['salvar'] = 'Funcionario_Controller/salvar_atualizacao';
$route['excuirL'] = 'Funcionario_Controller/exclusao_logica';
$route['incluirL'] = 'Funcionario_Controller/inclusao_logica';


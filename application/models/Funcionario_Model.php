<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario_Model extends CI_Model
{

    public function __construct(){
        parent::__construct();
    }

    public function cadastrar($user){
        return $this->db->insert('funcionario', $user);
    }

}
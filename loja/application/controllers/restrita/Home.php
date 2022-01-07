<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Home extends CI_Controller{
    
    public function _construct() {
        parent::_contruct();
        //existe uma seção?
    }
    public function index(){
        $this->load->view('restrita/layout/header');
        $this->load->view('restrita/home/index');
        $this->load->view('restrita/layout/footer');
    }
    }

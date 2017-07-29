<?php
class esmsController extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('esmsModel');
        $this->load->helper('url_helper');
    }
    
    public function index(){
        $data['news'] = $this->esmsModel->get_news();
        $data['title'] = 'ESMS';
        $data['auth'] = 1;
        $data['error'] = '';
        
        $this->load->view('register', $data);
    }
}
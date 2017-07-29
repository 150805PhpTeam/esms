<?php
class esmsModel extends CI_Model {
    
    public function __construct(){
        $this->load->database();
    }
    
    public function get_news($slug = FALSE){
        return $query->row_array();
    }
}
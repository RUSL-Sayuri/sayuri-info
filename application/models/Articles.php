<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Articles extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_article_data($id) {
        $this->db->from('articles');
        $this->db->where('id',$id);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result()[0];
        }else{
            return FALSE;
        }
    }
    
    public function get_published_articles_by_type($type) {
        $this->db->from('articles');
        $this->db->where('published',1);
        $this->db->where('type',$type);
        $this->db->order_by('timestamp', 'DESC');
        return $this->db->get();
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of treatments
 *
 * @author harit_000
 */
class Treatments extends CI_Controller {
    public function index(){
        $language = $this->input->cookie('lang');
        $this->lang->load('treatments', $language);
        
        $view_data = array(
            'text_1' => $this->lang->line('treatments_text_1'),
        );
        
        $this->load->view('treatments',$view_data);
    }
}

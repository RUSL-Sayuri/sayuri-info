<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of prevalence
 *
 * @author harit_000
 */
class Prevalence extends CI_Controller {
     public function index() {
        $language = $this->input->cookie('lang');
        $this->lang->load('prevalence', $language);
        $view_data = array(
         'title_1' => $this->lang->line('prevalence_title_1'),  
            
         'text_1' => $this->lang->line('prevalence_text_1'),   
         'text_2' => $this->lang->line('prevalence_text_2'),   
         'text_3' => $this->lang->line('prevalence_text_3'),   
         'text_4' => $this->lang->line('prevalence_text_4'),   
         'text_5' => $this->lang->line('prevalence_text_5'),   
         'text_6' => $this->lang->line('prevalence_text_6'),   
         'text_7' => $this->lang->line('prevalence_text_7'),   
        );
        $this->load->view('prevalence', $view_data);
    }
}

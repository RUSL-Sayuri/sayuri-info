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
            'title_1' => $this->lang->line('treatments_title_1'),
            'title_2' => $this->lang->line('treatments_title_2'),
            'title_3' => $this->lang->line('treatments_title_3'),
            'title_4' => $this->lang->line('treatments_title_4'),
            'title_5' => $this->lang->line('treatments_title_5'),
            'title_6' => $this->lang->line('treatments_title_6'),
            'title_7' => $this->lang->line('treatments_title_7'),
            'title_8' => $this->lang->line('treatments_title_8'),
            'title_9' => $this->lang->line('treatments_title_9'),
            'title_10' => $this->lang->line('treatments_title_10'),
            
            
            'text_1' => $this->lang->line('treatments_text_1'),
            'text_2' => $this->lang->line('treatments_text_2'),
            'text_3' => $this->lang->line('treatments_text_3'),
            'text_4' => $this->lang->line('treatments_text_4'),
            'text_5' => $this->lang->line('treatments_text_5'),
            'text_6' => $this->lang->line('treatments_text_6'),
            'text_7' => $this->lang->line('treatments_text_7'),
            'text_8' => $this->lang->line('treatments_text_8'),
            'text_9' => $this->lang->line('treatments_text_9'),
            'text_10' => $this->lang->line('treatments_text_10'),
            'text_11' => $this->lang->line('treatments_text_11'),
            'text_12' => $this->lang->line('treatments_text_12'),
            
            'ul_1_li_1' => $this->lang->line('treatments_ul_1_li_1'),
            'ul_1_li_2' => $this->lang->line('treatments_ul_1_li_2'),
            'ul_1_li_3' => $this->lang->line('treatments_ul_1_li_3'),
            'ul_1_li_4' => $this->lang->line('treatments_ul_1_li_4'),
            'ul_1_li_5' => $this->lang->line('treatments_ul_1_li_5'),
            'ul_1_li_6' => $this->lang->line('treatments_ul_1_li_6'),
            
            'ol_1_li_1' => $this->lang->line('treatments_ol_1_li_1'),
            'ol_1_li_2' => $this->lang->line('treatments_ol_1_li_2'),
            'ol_1_li_3' => $this->lang->line('treatments_ol_1_li_3'),
            'ol_1_li_4' => $this->lang->line('treatments_ol_1_li_4'),
            'ol_1_li_5' => $this->lang->line('treatments_ol_1_li_5'),
            'ol_1_li_6' => $this->lang->line('treatments_ol_1_li_6'),
            'ol_1_li_7' => $this->lang->line('treatments_ol_1_li_7'),
            'ol_1_li_8' => $this->lang->line('treatments_ol_1_li_8'),
            'ol_1_li_9' => $this->lang->line('treatments_ol_1_li_9'),
            'ol_1_li_10' => $this->lang->line('treatments_ol_1_li_10'),
            'ol_1_li_11' => $this->lang->line('treatments_ol_1_li_11'),
            'ol_1_li_12' => $this->lang->line('treatments_ol_1_li_12'),
            'ol_1_li_13' => $this->lang->line('treatments_ol_1_li_13'),
            'ol_1_li_14' => $this->lang->line('treatments_ol_1_li_14'),
            'ol_1_li_15' => $this->lang->line('treatments_ol_1_li_15'),
            'ol_1_li_16' => $this->lang->line('treatments_ol_1_li_16'),
            'ol_1_li_17' => $this->lang->line('treatments_ol_1_li_17'),
            'ol_1_li_18' => $this->lang->line('treatments_ol_1_li_18'),
            'ol_1_li_19' => $this->lang->line('treatments_ol_1_li_19'),
            'ol_1_li_20' => $this->lang->line('treatments_ol_1_li_20'),
            'ol_1_li_21' => $this->lang->line('treatments_ol_1_li_21'),
            'ol_1_li_22' => $this->lang->line('treatments_ol_1_li_22'),
            'ol_1_li_23' => $this->lang->line('treatments_ol_1_li_23'),
            'ol_1_li_24' => $this->lang->line('treatments_ol_1_li_24'),
            'ol_1_li_25' => $this->lang->line('treatments_ol_1_li_25'),
            'ol_1_li_26' => $this->lang->line('treatments_ol_1_li_26'),
            'ol_1_li_27' => $this->lang->line('treatments_ol_1_li_27'),
            'ol_1_li_28' => $this->lang->line('treatments_ol_1_li_28'),
        );
        $this->load->view('treatments',$view_data);
    }
}

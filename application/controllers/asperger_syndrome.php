<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of asperger_syndrome
 *
 * @author harit_000
 */
class Asperger_syndrome extends CI_Controller{
    public function index(){
        $language = $this->input->cookie('lang');
        $this->lang->load('asperger_syndrome', $language);
        
        $view_data = array(
            'title_1' => $this->lang->line('asperger_syndrome_title_1'),
            
            'text_1' => $this->lang->line('asperger_syndrome_text_1'),
            'text_2' => $this->lang->line('asperger_syndrome_text_2'),
            'text_3' => $this->lang->line('asperger_syndrome_text_3'),
            'text_4' => $this->lang->line('asperger_syndrome_text_4'),
            
            'ul_1_li_1' => $this->lang->line('asperger_syndrome_ul_1_li_1'),
            'ul_1_li_2' => $this->lang->line('asperger_syndrome_ul_1_li_2'),
            'ul_1_li_3' => $this->lang->line('asperger_syndrome_ul_1_li_3'),
            'ul_1_li_4' => $this->lang->line('asperger_syndrome_ul_1_li_4'),
            'ul_1_li_5' => $this->lang->line('asperger_syndrome_ul_1_li_5'),
            'ul_1_li_6' => $this->lang->line('asperger_syndrome_ul_1_li_6'),
            'ul_1_li_7' => $this->lang->line('asperger_syndrome_ul_1_li_7'),
            'ul_1_li_8' => $this->lang->line('asperger_syndrome_ul_1_li_8'),
            'ul_1_li_9' => $this->lang->line('asperger_syndrome_ul_1_li_9'),
            'ul_1_li_10' => $this->lang->line('asperger_syndrome_ul_1_li_10'),
            'ul_1_li_11' => $this->lang->line('asperger_syndrome_ul_1_li_11'),
            'ul_1_li_12' => $this->lang->line('asperger_syndrome_ul_1_li_12'),
            'ul_1_li_13' => $this->lang->line('asperger_syndrome_ul_1_li_13'),
            'ul_1_li_14' => $this->lang->line('asperger_syndrome_ul_1_li_14'),
            'ul_1_li_15' => $this->lang->line('asperger_syndrome_ul_1_li_15'),
            'ul_1_li_16' => $this->lang->line('asperger_syndrome_ul_1_li_16'),
            'ul_1_li_17' => $this->lang->line('asperger_syndrome_ul_1_li_17'),
            'ul_1_li_18' => $this->lang->line('asperger_syndrome_ul_1_li_18'),
            'ul_1_li_19' => $this->lang->line('asperger_syndrome_ul_1_li_19'),
        );
        
        $this->load->view('asperger_syndrome',$view_data);
    }
}

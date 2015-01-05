<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of what_is_autism
 *
 * @author thejan rajapakshe <coder [dot] clix [at] gmail [dot] com
 */
class What_is_autism extends CI_Controller {

    public function index() {
        $language = $this->input->cookie('lang');
        $this->lang->load('what_is_autism', $language);
        $view_data = array(
            'title' => $this->lang->line('what_is_autism_title'),
            'text_1' => $this->lang->line('what_is_autism_text_1'),
            'text_2' => $this->lang->line('what_is_autism_text_2'),
            'text_3' => $this->lang->line('what_is_autism_text_3'),
            
            'ul_1_li_1' => $this->lang->line('what_is_autism_ul_1_li_1'),
            'ul_1_li_2' => $this->lang->line('what_is_autism_ul_1_li_2'),
            'ul_1_li_3' => $this->lang->line('what_is_autism_ul_1_li_3'),
            'ul_1_li_4' => $this->lang->line('what_is_autism_ul_1_li_4'),
            
            'text_4' => $this->lang->line('what_is_autism_text_4'),
            'text_5' => $this->lang->line('what_is_autism_text_5'),
            'title_2' => $this->lang->line('what_is_autism_title_2'),
            'text_6' => $this->lang->line('what_is_autism_text_6'),
            'text_7' => $this->lang->line('what_is_autism_text_7'),
            'text_8' => $this->lang->line('what_is_autism_text_8'),
        );
        $this->load->view('what_is_autism', $view_data);
    }
}

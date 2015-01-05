<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of symptoms
 *
 * @author thejan rajapakshe <coder [dot] clix [at] gmail [dot] com
 */
class Symptoms extends CI_Controller {

    public function index() {
        $language = $this->input->cookie('lang');
        $this->lang->load('symptoms', $language);
        $view_data = array(
            'title_1' => $this->lang->line('symptoms_title_1'),
            'title_2' => $this->lang->line('symptoms_title_2'),
            'title_3' => $this->lang->line('symptoms_title_3'),
            'title_4' => $this->lang->line('symptoms_title_4'),
            'title_5' => $this->lang->line('symptoms_title_5'),
            'title_6' => $this->lang->line('symptoms_title_6'),
            'text_1' => $this->lang->line('symptoms_text_1'),
            'text_2' => $this->lang->line('symptoms_text_2'),
            'text_3' => $this->lang->line('symptoms_text_3'),
            'text_4' => $this->lang->line('symptoms_text_4'),
            'text_5' => $this->lang->line('symptoms_text_5'),
            'text_6' => $this->lang->line('symptoms_text_6'),
            'ul_1_li_1' => $this->lang->line('symptoms_ul_1_li_1'),
            'ul_1_li_2' => $this->lang->line('symptoms_ul_1_li_2'),
            'ul_1_li_3' => $this->lang->line('symptoms_ul_1_li_3'),
            'ul_1_li_4' => $this->lang->line('symptoms_ul_1_li_4'),
            'ul_1_li_5' => $this->lang->line('symptoms_ul_1_li_5'),
            'ul_1_li_6' => $this->lang->line('symptoms_ul_1_li_6'),
            'ul_1_li_7' => $this->lang->line('symptoms_ul_1_li_7'),
            'ul_1_li_8' => $this->lang->line('symptoms_ul_1_li_8'),
            'ul_1_li_9' => $this->lang->line('symptoms_ul_1_li_9'),
            'ul_1_li_10' => $this->lang->line('symptoms_ul_1_li_10'),
            'ul_1_li_11' => $this->lang->line('symptoms_ul_1_li_11'),
            'ul_2_li_1' => $this->lang->line('symptoms_ul_2_li_1'),
            'ul_2_li_2' => $this->lang->line('symptoms_ul_2_li_2'),
            'ul_2_li_3' => $this->lang->line('symptoms_ul_2_li_3'),
            'ul_2_li_4' => $this->lang->line('symptoms_ul_2_li_4'),
            'ul_2_li_5' => $this->lang->line('symptoms_ul_2_li_5'),
            'ul_2_li_6' => $this->lang->line('symptoms_ul_2_li_6'),
            'ul_3_li_1' => $this->lang->line('symptoms_ul_3_li_1'),
            'ul_3_li_2' => $this->lang->line('symptoms_ul_3_li_2'),
            'ul_3_li_3' => $this->lang->line('symptoms_ul_3_li_3'),
            'ul_3_li_4' => $this->lang->line('symptoms_ul_3_li_4'),
            'ul_3_li_5' => $this->lang->line('symptoms_ul_3_li_5'),
            'ul_3_li_6' => $this->lang->line('symptoms_ul_3_li_6'),
            'ul_4_li_1' => $this->lang->line('symptoms_ul_4_li_1'),
            'ul_4_li_2' => $this->lang->line('symptoms_ul_4_li_2'),
            'ul_4_li_3' => $this->lang->line('symptoms_ul_4_li_3'),
            'ul_4_li_4' => $this->lang->line('symptoms_ul_4_li_4'),
            'ul_4_li_5' => $this->lang->line('symptoms_ul_4_li_5'),
            'ul_5_li_1' => $this->lang->line('symptoms_ul_5_li_1'),
            'ul_5_li_2' => $this->lang->line('symptoms_ul_5_li_2'),
            'ul_5_li_3' => $this->lang->line('symptoms_ul_5_li_3')
        );
        $this->load->view('symptoms', $view_data);
    }

}

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of diagnosis
 *
 * @author thejan rajapakshe <coder [dot] clix [at] gmail [dot] com
 */
class Diagnosis extends CI_Controller {

    public function index() {
        $language = $this->input->cookie('lang');
        $this->lang->load('diagnosis', $language);
        $view_data = array(
            'title_1' => $this->lang->line('diagnosis_title_1'),
            'title_2' => $this->lang->line('diagnosis_title_2'),
            'title_3' => $this->lang->line('diagnosis_title_3'),
            'title_4' => $this->lang->line('diagnosis_title_4'),
            'text_1' => $this->lang->line('diagnosis_text_1'),
            'text_2' => $this->lang->line('diagnosis_text_2'),
            'text_3' => $this->lang->line('diagnosis_text_3'),
            'text_4' => $this->lang->line('diagnosis_text_4'),
            'text_5' => $this->lang->line('diagnosis_text_5'),
            'text_6' => $this->lang->line('diagnosis_text_6'),
            'text_7' => $this->lang->line('diagnosis_text_7'),
            'text_8' => $this->lang->line('diagnosis_text_8'),
            'ol_1_li_1' => $this->lang->line('diagnosis_ol_1_li_1'),
            'ol_1_li_2' => $this->lang->line('diagnosis_ol_1_li_2'),
            'ol_1_li_3' => $this->lang->line('diagnosis_ol_1_li_3'),
            'ol_2_li_1' => $this->lang->line('diagnosis_ol_2_li_1'),
            'ol_2_li_2' => $this->lang->line('diagnosis_ol_2_li_2'),
            'ol_2_li_3' => $this->lang->line('diagnosis_ol_2_li_3'),
            'ol_2_li_4' => $this->lang->line('diagnosis_ol_2_li_4'),
            'ol_2_li_5' => $this->lang->line('diagnosis_ol_2_li_5'),
            'ol_3_li_1' => $this->lang->line('diagnosis_ol_3_li_1'),
            'ol_3_li_2' => $this->lang->line('diagnosis_ol_3_li_2'),
            'ol_3_li_3' => $this->lang->line('diagnosis_ol_3_li_3'),
            'ol_3_li_4' => $this->lang->line('diagnosis_ol_3_li_4'),
            'ol_3_li_5' => $this->lang->line('diagnosis_ol_3_li_5'),
            'ol_3_li_6' => $this->lang->line('diagnosis_ol_3_li_6'),
            'ol_4_li_1' => $this->lang->line('diagnosis_ol_4_li_1'),
            'ol_4_li_2' => $this->lang->line('diagnosis_ol_4_li_2'),
            'ol_4_li_3' => $this->lang->line('diagnosis_ol_4_li_3'),
            'ol_4_li_4' => $this->lang->line('diagnosis_ol_4_li_4'),
            'ol_4_li_5' => $this->lang->line('diagnosis_ol_4_li_5'),
            'ol_4_li_6' => $this->lang->line('diagnosis_ol_4_li_6'),
            'ol_4_li_7' => $this->lang->line('diagnosis_ol_4_li_7'),
            'ol_4_li_8' => $this->lang->line('diagnosis_ol_4_li_8'),
            'ol_4_li_9' => $this->lang->line('diagnosis_ol_4_li_9'),
            'ol_4_li_10' => $this->lang->line('diagnosis_ol_4_li_10'),
            'ol_4_li_11' => $this->lang->line('diagnosis_ol_4_li_11'),
            'ol_4_li_12' => $this->lang->line('diagnosis_ol_4_li_12'),
            'ol_4_li_13' => $this->lang->line('diagnosis_ol_4_li_13'),
            'ol_4_li_14' => $this->lang->line('diagnosis_ol_4_li_14'),
            'ol_4_li_15' => $this->lang->line('diagnosis_ol_4_li_15'),
            'ol_4_li_16' => $this->lang->line('diagnosis_ol_4_li_16'),
            'ol_4_li_17' => $this->lang->line('diagnosis_ol_4_li_17'),
            'ol_4_li_18' => $this->lang->line('diagnosis_ol_4_li_18'),
            'ol_4_li_19' => $this->lang->line('diagnosis_ol_4_li_19'),
            'ol_4_li_20' => $this->lang->line('diagnosis_ol_4_li_20'),
            'ol_4_li_21' => $this->lang->line('diagnosis_ol_4_li_21'),
        );
        $this->load->view('diagnosis', $view_data);
    }

}

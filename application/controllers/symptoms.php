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
            'text_1'=>  $this->lang->line('symptoms_text_1'),
        );
        $this->load->view('symptoms',$view_data);
    }

}

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of useful_site_links
 *
 * @author thejan rajapakshe <coder [dot] clix [at] gmail [dot] com
 */
class Useful_site_links extends CI_Controller {

    public function index() {
        $language = $this->input->cookie('lang');
        $this->lang->load('useful_site_links', $language);

        $view_data = array(
            'text_1' => $this->lang->line('useful_site_links_text_1'),
            'text_2' => $this->lang->line('useful_site_links_text_2'),
            'text_3' => $this->lang->line('useful_site_links_text_3'),
            'text_4' => $this->lang->line('useful_site_links_text_4'),
            'text_5' => $this->lang->line('useful_site_links_text_5'),
            'text_6' => $this->lang->line('useful_site_links_text_6'),
            'text_7' => $this->lang->line('useful_site_links_text_7'),
            'text_8' => $this->lang->line('useful_site_links_text_8'),
            'text_9' => $this->lang->line('useful_site_links_text_9'),
            'text_10' => $this->lang->line('useful_site_links_text_10'),
            'text_11' => $this->lang->line('useful_site_links_text_11')
        );
        $this->load->view('useful_site_links', $view_data);
    }

}

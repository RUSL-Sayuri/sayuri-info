<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author thejan rajapakshe <coder [dot] clix [at] gmail [dot] com
 */
class Home extends CI_Controller {

    public function index($new_language = null) {
        if ($new_language == null) {
            $language = $this->input->cookie('lang');
        } else {
            $language = $new_language;
        }
        $this->lang->load('home', $language);
        $view_data = array(
            'language'=> $language,
            'become_a_member' => $this->lang->line('home_become_a_member'),
            'about_autism' => $this->lang->line('home_about_autism'),
            'resources' => $this->lang->line('home_resources'),
        );
        $this->load->view('home', $view_data);
    }

    public function en() {
        $this->set_langugage('english');
        $this->index('english');
    }

    public function si() {
        $this->set_langugage('sinhala');
        $this->index('sinhala');
    }

    function set_langugage($language = "english") {
        $this->load->helper('cookie');
        $cookie = array(
            'name' => 'lang',
            'value' => $language,
            'expire' => 3600,
            'domain' => NULL,
            'path' => '/'
        );
        $this->input->set_cookie($cookie);
    }

}

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

    public function index() {
        $this->en();
    }

    public function en() {
        $this->set_langugage('en');
        $view_data = array();
        $this->load->view('home', $view_data);
    }

    public function si() {
        $this->set_langugage('si');
        $view_data = array();
        $this->load->view('home', $view_data);
    }

    function set_langugage($language = "en") {
        $this->load->helper('cookie');
        $cookie = array(
            'name' => 'lang',
            'value' => $language,
            'expire'=> 3600,
            'domain'=> 'localhost',
            'path'=>'/'
        );
        $this->input->set_cookie($cookie);
    }

}

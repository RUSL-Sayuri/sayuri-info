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
        $view_data = array();
        $this->load->view('home',$view_data);
    }
    
    public function si() {
        $view_data = array();
        $this->load->view('home',$view_data);
    } 
}

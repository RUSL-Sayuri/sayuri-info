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

    public function index($new_language = null, $email_subscribe = FALSE, $error = NULL) {
        if ($new_language == null) {
            $language = $this->input->cookie('lang');
        } else {
            $language = $new_language;
        }
        $this->lang->load('home', $language);
        $this->lang->load('what_is_autism', $language);
        $view_data = array(
            'language' => $language,
            'join_us' => $this->lang->line('home_join_us'),
            'what_is_autism' => $this->lang->line('home_what_is_autism'),
            'resources' => $this->lang->line('home_resources'),
            'model_what_is_autism_title' => $this->lang->line('what_is_autism_title'),
            'model_what_is_autism_text_1' => $this->lang->line('what_is_autism_text_1'),
            'model_what_is_autism_text_2' => $this->lang->line('what_is_autism_text_2'),
            'carousel_quote_1' => $this->lang->line('carousel_quote_1'),
            'carousel_quote_2' => $this->lang->line('carousel_quote_2'),
            'carousel_quote_3' => $this->lang->line('carousel_quote_3'),
            'carousel_quote_author_1' => $this->lang->line('carousel_quote_author_1'),
            'carousel_quote_author_2' => $this->lang->line('carousel_quote_author_2'),
            'carousel_quote_author_3' => $this->lang->line('carousel_quote_author_3'),
            'email_subscribe_title' => $this->lang->line('email_subscribe_title'),
            'email_subscribe' => $email_subscribe,
            'email_subscribe_error_no' => $error,
        );

        switch ($error) {
            case NULL:
                $view_data['email_subscribe_message'] = $this->lang->line('email_subscribe_error_0');
                break;
            case 1062:
                $view_data['email_subscribe_message'] = $this->lang->line('email_subscribe_error_1062');
                break;

            default:
                break;
        }

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

    public function email_subscribe() {
        $this->load->database();
        $data = array(
            'email' => $this->input->post('subscribe_email')
        );
        $this->db->insert('subscription', $data);
        $error_no = $this->db->_error_number();
        $this->index(NULL, TRUE, $error_no);
    }

}

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller {

    public function family_member() {
        $language = $this->input->cookie('lang');
        $this->lang->load('register', $language);
        $view_data = array(
            'common_label_1' => $this->lang->line('register_user_common_label_1'),
            'common_label_2' => $this->lang->line('register_user_common_label_2'),
            'common_label_3' => $this->lang->line('register_user_common_label_3'),
            'common_label_4' => $this->lang->line('register_user_common_label_4'),
            'common_label_5' => $this->lang->line('register_user_common_label_5'),
            'common_label_6' => $this->lang->line('register_user_common_label_6'),
            'common_label_7' => $this->lang->line('register_user_common_label_7'),
            'common_label_8' => $this->lang->line('register_user_common_label_8'),
            'common_label_9' => $this->lang->line('register_user_common_label_9'),
            'common_label_10' => $this->lang->line('register_user_common_label_10'),
            'common_label_11' => $this->lang->line('register_user_common_label_11'),
            'common_label_12' => $this->lang->line('register_user_common_label_12'),
            'common_label_13' => $this->lang->line('register_user_common_label_13'),
            'common_label_14' => $this->lang->line('register_user_common_label_14'),
            'common_label_15' => $this->lang->line('register_user_common_label_15'),
            'family_member_label_1' => $this->lang->line('register_user_family_member_label_1'),
            'family_member_label_2' => $this->lang->line('register_user_family_member_label_2'),
            'family_member_label_3' => $this->lang->line('register_user_family_member_label_3'),
        );
        $this->load->view('register/family_member', $view_data);
    }
    
    public function professional(){
        $language = $this->input->cookie('lang');
        $this->lang->load('register', $language);
        $view_data = array(
            'common_label_1' => $this->lang->line('register_user_common_label_1'),
            'common_label_2' => $this->lang->line('register_user_common_label_2'),
            'common_label_3' => $this->lang->line('register_user_common_label_3'),
            'common_label_4' => $this->lang->line('register_user_common_label_4'),
            'common_label_5' => $this->lang->line('register_user_common_label_5'),
            'common_label_6' => $this->lang->line('register_user_common_label_6'),
            'common_label_7' => $this->lang->line('register_user_common_label_7'),
            'common_label_8' => $this->lang->line('register_user_common_label_8'),
            'common_label_9' => $this->lang->line('register_user_common_label_9'),
            'common_label_10' => $this->lang->line('register_user_common_label_10'),
            'common_label_11' => $this->lang->line('register_user_common_label_11'),
            'common_label_12' => $this->lang->line('register_user_common_label_12'),
            'common_label_13' => $this->lang->line('register_user_common_label_13'),
            'common_label_14' => $this->lang->line('register_user_common_label_14'),
            'common_label_15' => $this->lang->line('register_user_common_label_15'),
            'professional_label_1' => $this->lang->line('register_user_professional_label_1'),
            'professional_label_2' => $this->lang->line('register_user_professional_label_2'),
            'professional_label_3' => $this->lang->line('register_user_professional_label_3'),
        );
        $this->load->view('register/professional', $view_data);
    }
    
    public function researcher(){
        $language = $this->input->cookie('lang');
        $this->lang->load('register', $language);
        $view_data = array(
            'common_label_1' => $this->lang->line('register_user_common_label_1'),
            'common_label_2' => $this->lang->line('register_user_common_label_2'),
            'common_label_3' => $this->lang->line('register_user_common_label_3'),
            'common_label_4' => $this->lang->line('register_user_common_label_4'),
            'common_label_5' => $this->lang->line('register_user_common_label_5'),
            'common_label_6' => $this->lang->line('register_user_common_label_6'),
            'common_label_7' => $this->lang->line('register_user_common_label_7'),
            'common_label_8' => $this->lang->line('register_user_common_label_8'),
            'common_label_9' => $this->lang->line('register_user_common_label_9'),
            'common_label_10' => $this->lang->line('register_user_common_label_10'),
            'common_label_11' => $this->lang->line('register_user_common_label_11'),
            'common_label_12' => $this->lang->line('register_user_common_label_12'),
            'common_label_13' => $this->lang->line('register_user_common_label_13'),
            'common_label_14' => $this->lang->line('register_user_common_label_14'),
            'common_label_15' => $this->lang->line('register_user_common_label_15'),
            'researcher_label_1' => $this->lang->line('register_user_researcher_label_1'),
            'researcher_label_2' => $this->lang->line('register_user_researcher_label_2'),
            'researcher_label_3' => $this->lang->line('register_user_researcher_label_3'),
            'researcher_label_4' => $this->lang->line('register_user_researcher_label_4'),
        );
        $this->load->view('register/researcher', $view_data);
    }
    
    public function special_school(){
        $language = $this->input->cookie('lang');
        $this->lang->load('register', $language);
        $view_data = array(
            'common_label_1' => $this->lang->line('register_user_common_label_1'),
            'common_label_2' => $this->lang->line('register_user_common_label_2'),
            'common_label_3' => $this->lang->line('register_user_common_label_3'),
            'common_label_4' => $this->lang->line('register_user_common_label_4'),
            'common_label_5' => $this->lang->line('register_user_common_label_5'),
            'common_label_6' => $this->lang->line('register_user_common_label_6'),
            'common_label_7' => $this->lang->line('register_user_common_label_7'),
            'common_label_8' => $this->lang->line('register_user_common_label_8'),
            'common_label_9' => $this->lang->line('register_user_common_label_9'),
            'common_label_10' => $this->lang->line('register_user_common_label_10'),
            'common_label_11' => $this->lang->line('register_user_common_label_11'),
            'common_label_12' => $this->lang->line('register_user_common_label_12'),
            'common_label_13' => $this->lang->line('register_user_common_label_13'),
            'common_label_14' => $this->lang->line('register_user_common_label_14'),
            'common_label_15' => $this->lang->line('register_user_common_label_15'),
            'special_school_label_1' => $this->lang->line('register_user_special_school_label_1'),
            'special_school_label_2' => $this->lang->line('register_user_special_school_label_2'),
            'special_school_label_3' => $this->lang->line('register_user_special_school_label_3'),
            'special_school_label_4' => $this->lang->line('register_user_special_school_label_4'),
            'special_school_label_5' => $this->lang->line('register_user_special_school_label_5'),
        );
        $this->load->view('register/special_school', $view_data);
    }
}

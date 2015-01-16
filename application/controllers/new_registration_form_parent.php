<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class new_registration_form_parent extends CI_Controller {

    public function index() {
        $language = $this->input->cookie('lang');
        $this->lang->load('new_registration_form_parent', $language);
        $view_data = array(
            'r_u_c_l_1' => $this->lang->line('register_user_common_label_1'),
            'r_u_c_l_2' => $this->lang->line('register_user_common_label_2'),
            'r_u_c_l_3' => $this->lang->line('register_user_common_label_3'),
            'r_u_c_l_4' => $this->lang->line('register_user_common_label_4'),
            'r_u_c_l_5' => $this->lang->line('register_user_common_label_5'),
            'r_u_c_l_6' => $this->lang->line('register_user_common_label_6'),
            'r_u_c_l_7' => $this->lang->line('register_user_common_label_7'),
            'r_u_c_l_8' => $this->lang->line('register_user_common_label_8'),
            'r_u_c_l_9' => $this->lang->line('register_user_common_label_9'),
            'r_u_c_l_10' => $this->lang->line('register_user_common_label_10'),
            'r_u_c_l_11' => $this->lang->line('register_user_common_label_11'),
            'r_u_c_l_12' => $this->lang->line('register_user_common_label_12'),
            'r_u_c_l_13' => $this->lang->line('register_user_common_label_13'),
            'r_u_c_l_14' => $this->lang->line('register_user_common_label_14'),
            'r_u_c_l_15' => $this->lang->line('register_user_common_label_15'),
            'r_u_f_m_l_1' => $this->lang->line('register_user_family_member_label_1'),
            'r_u_f_m_l_2' => $this->lang->line('register_user_family_member_label_2'),
            'r_u_f_m_l_3' => $this->lang->line('register_user_family_member_label_3'),
            'r_u_p_l_1' => $this->lang->line('register_user_professional_lebel_1'),
            'r_u_p_l_2' => $this->lang->line('register_user_professional_lebel_2'),
            'r_u_p_l_3' => $this->lang->line('register_user_professional_lebel_3'),
            'r_u_r_l_1' => $this->lang->line('register_user_researcher_lebel_1'),
            'r_u_r_l_2' => $this->lang->line('register_user_researcher_lebel_2'),
            'r_u_r_l_3' => $this->lang->line('register_user_researcher_lebel_3'),
            'r_u_r_l_4' => $this->lang->line('register_user_researcher_lebel_4'),
            'r_u_s_s_l_1' => $this->lang->line('register_user_special_school_label_1'),
            'r_u_s_s_l_2' => $this->lang->line('register_user_special_school_label_2'),
            'r_u_s_s_l_3' => $this->lang->line('register_user_special_school_label_3'),
            'r_u_s_s_l_4' => $this->lang->line('register_user_special_school_label_4'),
            'r_u_s_s_l_5' => $this->lang->line('register_user_special_school_label_5'),
           
        );
        $this->load->view('new_registration_form_parent', $view_data);
    }

}

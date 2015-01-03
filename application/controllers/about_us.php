<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of about_us
 *
 * @author manoj vidanage
 */
class About_us extends CI_Controller {
    //put your code here
    
    public function index(){
        $language = $this->input->cookie('lang');
        $this->lang->load('about_us', $language);
        $view_data= array(
            'about_team_title'=>$this->lang->line('about_us_about_the_team_title'),
            'about_team_text'=>$this->lang->line('about_us_about_the_team_text'),
            'about_project_title'=>$this->lang->line('about_us_about_the_project_title'),
            'about_project_text1'=>$this->lang->line('about_us_about_the_project_text1'),
            'about_project_text2'=>$this->lang->line('about_us_about_the_project_text2'),
            'about_project_text3'=>$this->lang->line('about_us_about_the_project_text3'),
            'about_project_text4'=>$this->lang->line('about_us_about_the_project_text4'),
            'vision_title'=>$this->lang->line('about_us_vision_title'),
            'vision_text'=>$this->lang->line('about_us_vision_text'),
            'mission_title'=>$this->lang->line('about_us_mission_title'),
            'mission_text'=>$this->lang->line('about_us_mission_text')            
        );
        $this->load->view('about_us',$view_data);
    }
}



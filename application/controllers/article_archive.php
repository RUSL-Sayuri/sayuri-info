<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of article_archive
 *
 * @author harit_000
 */
class Article_archive extends CI_Controller{
    public function index(){
        $language = $this->input->cookie('lang');
        $this->lang->load('article_archive', $language);
        $this->load->model('articles');
        $newspapers = $this->articles->get_published_articles_by_type('newspaper');
        $researchPapers = $this->articles->get_published_articles_by_type('newspaper');
        $newspapers = $this->articles->get_published_articles_by_type('newspaper');
        
        $view_data = array(
           'title_1' => $this->lang->line('article_archive_title_1'),
            'title_2' => $this->lang->line('article_archive_title_2'),
            'title_3' => $this->lang->line('article_archive_title_3'),
            'title_4' => $this->lang->line('article_archive_title_4'),
//            
//            'article_title_1' => $this->lang->line('article_archive_article_title_1'),
//            'article_title_2' => $this->lang->line('article_archive_article_title_2'),
//            'article_title_3' => $this->lang->line('article_archive_article_title_3'),
//            
//            'article_text_1' => $this->lang->line('article_archive_article_text_1'),
//            'article_text_2' => $this->lang->line('article_archive_article_text_2'),
//            'article_text_3' => $this->lang->line('article_archive_article_text_3'),
            
            'newspapers'=>$this->articles->get_published_articles_by_type('newspaper'),
            'webArticles'=>$this->articles->get_published_articles_by_type('web'),
            'researchPapers'=>$this->articles->get_published_articles_by_type('research'),
            
        );
        
        $this->load->view('article_archive',$view_data);
    }
}

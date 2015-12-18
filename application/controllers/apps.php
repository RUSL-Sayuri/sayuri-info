<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class apps extends CI_Controller {

    public function index()
    {
        $this->load->view('app_center');
	}
}

/* End of file apps.php */
/* Location: ./application/controllers/apps.php */
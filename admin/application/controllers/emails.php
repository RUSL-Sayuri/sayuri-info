<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class emails extends CI_Controller
{

    public function index()
    {
        $this->load->view('compose_email');
    }

    public function send()
    {
        $this->load->model('emailm');
        $email_list = $this->emailm->get_subcribe_emails();
        $subject = $this->input->post('subject');
        $body = $this->input->post('body');
        foreach ($email_list as $item) {
            $this->send_email($item->email, $subject, $body);
        }
        redirect('/emails');

    }

    public function send_email($to, $subject, $body)
    {

    }
}

/* End of file emails.php */
/* Location: ./application/controllers/emails.php */
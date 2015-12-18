<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class emailm extends CI_Model {

    public function get_subcribe_emails()
    {
        $this->load->database();
        $this->db->from('subscription');
        return $this->db->get()->result();

    }
}

/* End of file emailm.php */
/* Location: ./application/models/emailm.php */
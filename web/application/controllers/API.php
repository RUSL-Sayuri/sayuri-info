<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class API extends CI_Controller
{
    public function login()
    {
        $this->load->model('user');

        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        $user_info = $this->user->get_user_login_info($username);

        if ($user_info == null) {
            //user DNE
            echo "0.";
        } elseif (sha1($password) == $user_info['password']) {
            //Login Success
            $user_data = $this->user->get_user($user_info['id']);
            echo $user_data->id . ".";
        } else {
            echo "0.";
        }
    }

    public function consultant($id)
    {
        $this->load->model('consultant');
        $view_data = $this->consultant->get_consultant($id);
        $this->load->view('json', array('data' => $view_data));
    }

    public function parent($id)
    {
        $this->load->model('user');
        $view_data = $this->user->get_parent($id);
        $this->load->view('json', array('data' => $view_data));

    }

    public function add_score()
    {
        $this->load->model('game');

        $user_id = $this->input->post('user_id', TRUE);
        $game_id = $this->input->post('game_id', TRUE);
        $level = $this->input->post('level', TRUE);
        $score = $this->input->post('score', TRUE);

        $this->game->insert_score($user_id, $game_id, $level, $score);
        echo "1.";
    }

}

/* End of file API.php */
/* Location: ./application/controllers/API.php */
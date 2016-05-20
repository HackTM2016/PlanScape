<?php

class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Account_model');
    }

    public function login()
    {
        $this->Account_model->getUsers();die();
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|md5');
        if($this->form_validation->run() == true){
            $user = $this->Account_model->login($username, md5($password));

            if($user){
                $userdata = array(
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'id' => $user['id'],
                    'loggedIn' => true
                );
                $this->session->set_userdata($userdata);
            }
        }
        $this->data['view']='login_register';
        $this->load->view('layout',$this->data);
    }

    public function register()
    {
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $r_password = $this->input->post('r_password');

        $this->form_validation->set_rules('username', 'Username', 'required|unique[username.users]');
        $this->form_validation->set_rules('password', 'Password', 'required|md5');
        $this->form_validation->set_rules('email', 'Email', 'required|md5|unique[]');
        $this->form_validation->set_rules('r_password', 'Retype Password', 'required|md5|matches[password]');

        if($this->form_validation->run() == true){

        }
    }
}